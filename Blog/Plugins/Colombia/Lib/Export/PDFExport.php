<?php

namespace FacturaScripts\Plugins\Colombia\Lib\Export;

use FacturaScripts\Core\Model\Pais;
use FacturaScripts\Core\Base\Utils;
use FacturaScripts\Core\Model\Ciudad;
use FacturaScripts\Core\Model\Cliente;
use FacturaScripts\Core\Model\Provincia;
use FacturaScripts\Core\App\AppSettings;
use FacturaScripts\Core\Base\FileManager;
use FacturaScripts\Dinamic\Model\Empresa;
use FacturaScripts\Core\Model\Base\ModelCore;
use SimpleSoftwareIO\QrCode\BaconQrCodeGenerator;
use FacturaScripts\Plugins\Colombia\Lib\RegimenIVA;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Plugins\Colombia\Lib\BusinessDocSubType;
use FacturaScripts\Plugins\Colombia\Lib\BusinessDocumentCode;
use FacturaScripts\Core\Lib\Export\PDFExport as ParentPDFExport;

class PDFExport extends ParentPDFExport
{
    /**
     * Empresa
     *
     * @var \FacturaScripts\Dinamic\Model\Empresa
     */
    private $company;

    /**
     * Insert header details.
     *
     * @param int $idempresa
     */
    protected function insertHeader($idempresa = null)
    {
        if ($this->insertedHeader) {
            return;
        }

        $this->insertedHeader = true;

        $code = $idempresa ?? AppSettings::get('default', 'idempresa', '');
        $company = new Empresa();

        if ($company->loadFromCode($code)) {
            // Company
            $this->company = $company;

            // City
            $ciudad = new Ciudad();
            $ciudad->loadFromCode('', [new DataBaseWhere('codeid', $company->ciudad)]);

            // Province
            $provincia = new Provincia();
            $provincia->loadFromCode($ciudad->idprovincia);

            // Country
            $pais = new Pais();
            $pais->loadFromCode('', [new DataBaseWhere('codiso', $company->codpais)]);

            $this->pdf->ezText($company->nombre, self::FONT_SIZE + 7, ['justification' => 'right']);
            $address = $company->direccion;
            $address .= empty($company->codpostal) ? "\n" : "\n" . $company->codpostal . ', ';
            $address .= empty($ciudad->ciudad) ? '' : $ciudad->ciudad;
            $address .= empty($provincia->provincia) ? '' : ' (' . $provincia->provincia . ') ' . $pais->nombre;

            $contactData = [];
            foreach (['telefono1', 'telefono2', 'email', 'web'] as $field) {
                if (!empty($company->{$field})) {
                    $contactData[] = $company->{$field};
                }
            }

            $lineText = $company->cifnif . ' - ' . $address . "\n" . implode(' · ', $contactData);
            $this->pdf->ezText($lineText, self::FONT_SIZE, ['justification' => 'right']);
            $this->pdf->ezText(implode(' · ', ['Tipo de Contribuyente(' . (($company->personafisica) ? 'Persona Natural y asimiladas' : 'Persona Jurídica y asimiladas') . ')', 'Detalle tributario(' . (RegimenIVA::all()[$company->regimeniva ?? RegimenIVA::defaultValue()]) . ')']), 6.5, ['justification' => 'right']);
            $this->pdf->ezText(implode(' · ', ["Responsabilidad ({$company->responsabilidad})", "Detalle tributario({$company->detalletributario})", "Matrícula mercantil({$company->matriculamercantil})"]), 6.5, ['justification' => 'right']);

            $idlogo = $this->format->idlogo ?? $company->idlogo;
            $this->insertCompanyLogo($idlogo);
        }
    }

    /**
     * Inserts the header of the page with the model data.
     *
     * @param \FacturaScripts\Core\Model\Base\BusinessDocument $model
     */
    protected function insertBusinessDocHeader($model)
    {
        // Qr
        $this->setQr($model);

        $headerData = [
            'title' => BusinessDocSubType::all()[$model->codsubtipodoc] ?? $this->i18n->trans($model->modelClassName() . '-min'),
            'subject' => $this->i18n->trans('customer'),
            'fieldName' => 'nombrecliente',
        ];

        if (isset($model->codproveedor)) {
            $headerData['subject'] = $this->i18n->trans('supplier');
            $headerData['fieldName'] = 'nombre';
        }

        if (!empty($this->format->titulo)) {
            $headerData['title'] = Utils::fixHtml($this->format->titulo);
        }

        $this->pdf->ezText("\n" . $headerData['title'] . ': ' . $model->codigo, self::FONT_SIZE + 6);
        $this->pdf->ezText("<c:alink:{$model->qr_search}>{$model->clavedocumentoxml}</c:alink>\n", 8);
        $this->newLine();

        $subject = $model->getSubject();
        $tipoidfiscal = empty($subject->tipoidfiscal) ? $this->i18n->trans('cifnif') : $subject->tipoidfiscal;
        $tableData = [
            ['key' => $this->i18n->trans('date'), 'value' => $model->fecha],
            ['key' => $headerData['subject'], 'value' => Utils::fixHtml($model->{$headerData['fieldName']})],
            ['key' => $this->i18n->trans('number'), 'value' => $model->numero],
            ['key' => $tipoidfiscal, 'value' => $model->cifnif],
        ];

        // Client
        $cliente = new Cliente();
        $cliente->loadFromCode($model->codcliente);

        array_push($tableData, ['key' => 'Tipo de Contribuyente', 'value' => ($cliente->personafisica) ? 'Persona Natural y asimiladas' : 'Persona Jurídica y asimiladas'], ['key' => 'Responsabilidad', 'value' => $cliente->responsabilidad], ['key' => 'Detalle tributario', 'value' => $cliente->detalletributario], ['key' => 'Matrícula mercantil', 'value' => $cliente->matriculamercantil], ['key' => 'Régimen Contable', 'value' => $cliente->regimeniva]);

        if (!empty($model->direccion)) {
            $tableData[] = ['key' => $this->i18n->trans('address'), 'value' => $this->combineAddress($model)];
        }

        /// rectified invoice?
        if (isset($model->codigorect) && !empty($model->codigorect)) {
            array_unshift($tableData, ['key' => $this->i18n->trans('original'), 'value' => $model->codigorect]);
        }

        $tableOptions = [
            'width' => $this->tableWidth,
            'showHeadings' => 0,
            'shaded' => 0,
            'lineCol' => [1, 1, 1],
            'cols' => [],
            'fontSize' => 8.5,
            'rowGap' => 0,
            'colGap' => 0,
        ];

        $this->insertParalellTable($tableData, '', $tableOptions);
        $this->pdf->ezText('');

        if (!empty($model->idcontactoenv) && $model->idcontactoenv != $model->idcontactofact) {
            $this->insertBusinessDocShipping($model);
        }
    }

    /**
     * Inserts the footer of the page with the model data.
     *
     * @param \FacturaScripts\Core\Model\Base\BusinessDocument $model
     */
    protected function insertBusinessDocFooter($model)
    {
        parent::insertBusinessDocFooter($model);

        if ($model->codsubtipodoc == '01') {
            $resolution = BusinessDocumentCode::getResolution($model);

            $resolutionData = [];
            foreach (['resolucion', 'prefijo', 'fecharesolucion', 'llavetecnica', 'desde', 'hasta', 'fechadesde', 'fechahasta'] as $field) {
                if (!empty($resolution->{$field})) $resolutionData[] = $resolution->{$field};
            }

            $this->pdf->ezText("\n" . implode(' · ', $resolutionData), 6.2, ['justification' => 'center']);
            $this->pdf->ezText("Factura impresa en computador por {$this->company->nombre}", 6.2, ['justification' => 'center']);
        }
        else {
            $this->pdf->ezText("\nFactura impresa en computador por {$this->company->nombre}", 6.2, ['justification' => 'center']);
        }
    }

    /**
     * Combine address if the parameters don´t empty
     *
     * @param mixed $model
     *
     * @return string
     */
    protected function combineAddress($model): string
    {
        // City
        $ciudad = new Ciudad();
        $ciudad->loadFromCode('', [new DataBaseWhere('codeid', $model->ciudad)]);

        // Province
        $provincia = new Provincia();
        $provincia->loadFromCode($ciudad->idprovincia);

        // Country
        $pais = new Pais();
        $pais->loadFromCode('', [new DataBaseWhere('codiso', $model->codpais)]);

        $completeAddress = Utils::fixHtml($model->direccion);
        $completeAddress .= empty($model->apartado) ? '' : ', ' . $this->i18n->trans('box') . ' ' . $model->apartado;
        $completeAddress .= empty($model->codpostal) ? '' : "\n" . $model->codpostal;
        $completeAddress .= empty($ciudad->ciudad) ? '' : ', ' . Utils::fixHtml($ciudad->ciudad);
        $completeAddress .= empty($provincia->provincia) ? '' : ' (' . Utils::fixHtml($provincia->provincia) . ')';
        $completeAddress .= empty($pais->codpais) ? '' : ', ' . $pais->nombre;

        return $completeAddress;
    }

    /**
     * Set qr
     *
     * @param mixed $model
     */
    private function setQr($model) {
        if ($model->qr_graphic != null) {
            $path = FS_FOLDER . DIRECTORY_SEPARATOR . 'MyFiles' . DIRECTORY_SEPARATOR . date('Y' . DIRECTORY_SEPARATOR . 'm' . DIRECTORY_SEPARATOR, strtotime(date(ModelCore::DATE_STYLE))) . DIRECTORY_SEPARATOR . 'qr';

            if (!FileManager::createFolder($path, true)) {
                $this->toolBox()->i18nLog()->critical('cant-create-folder', ['%folderName%' => $path]);
                die("No es pot crear la carpeta {$path}");
            }

            $qrcode = new BaconQrCodeGenerator();

            file_put_contents($pathQr = $path . DIRECTORY_SEPARATOR . $model->idfactura, $qrcode->encoding('UTF-8')->format('png')->size(500)->generate(base64_decode($model->qr_graphic)));

            $this->pdf->addPngFromFile($pathQr, 499, 677, 70, 70);

            unlink($pathQr);
        }
    }
}
