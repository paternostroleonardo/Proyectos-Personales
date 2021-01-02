<?php

namespace FacturaScripts\Plugins\Colombia\Controller;

use FacturaScripts\Core\Lib\ExtendedController\BusinessDocumentView;
use FacturaScripts\Core\Controller\EditFacturaCliente as ParentEditFacturaCliente;

class EditFacturaCliente extends ParentEditFacturaCliente
{
    /**
     * Shows the document opertation type selector.
     *
     * @var bool
     */
    public $showDocOperation = true;

    /**
     * Shows the document sub-type selector.
     *
     * @var bool
     */
    public $showDocSubType = true;

    /**
     * Save the lines of the document.
     *
     * @param BusinessDocumentView $view
     * @param array                $newLines
     *
     * @return bool
     */
    protected function saveLines(BusinessDocumentView &$view, array &$newLines)
    {
        if ($view->model->esvalido === true) {
            $this->toolBox()->log('fe')->error("El documento electrónico {$view->model->codigo}, ha sido autorizada por la DIAN.");

            return false;
        }

        if (($view->model->enviando == true)) {
            $this->toolBox()->log('fe')->error("El documento electrónico {$view->model->codigo}, ha sido enviado a la DIAN.");

            return false;
        }

        return parent::saveLines($view, $newLines);
    }
}
