<?php

namespace FacturaScripts\Plugins\Colombia\Lib\Export;

use Symfony\Component\HttpFoundation\Response;
use FacturaScripts\Core\Lib\Export\MAILExport as ParentMAILExport;

class MAILExport extends ParentMAILExport
{
    /**
     * Model
     *
     * @var mixed
     */
    private $model;

    /**
     *
     * @param BusinessDocument $model
     *
     * @return bool
     */
    public function addBusinessDocPage($model): bool
    {
        $this->model = $model;

        return parent::addBusinessDocPage($model);
    }

    /**
     *
     * @param Response $response
     */
    public function show(Response &$response)
    {
        if ($this->model->documentoadjuntoxml != null) {
            $fileNameXML = $this->getFileName() . '_mail_' . time() . '.xml';
            $filePathXML = \FS_FOLDER . '/MyFiles/' . $fileNameXML;
            file_put_contents($filePathXML, base64_decode($this->model->documentoadjuntoxml));

            $this->sendParams['fileNameXML'] = $fileNameXML;
        }

        parent::show($response);
    }
}
