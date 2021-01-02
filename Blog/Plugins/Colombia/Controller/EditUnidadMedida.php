<?php

namespace FacturaScripts\Plugins\Colombia\Controller;

use FacturaScripts\Core\Lib\ExtendedController\EditController;

class EditUnidadMedida extends EditController
{
    /**
     * Returns the class name of the model to use in the editView.
     */
    public function getModelClassName()
    {
        return 'UnidadMedida';
    }

    /**
     * Return the basic data for this page.
     *
     * @return array
     */
    public function getPageData()
    {
        $pageData = parent::getPageData();
        $pageData['menu'] = 'warehouse';
        $pageData['title'] = 'Unidades de Medida';
        $pageData['icon'] = 'fas fa-ruler';

        return $pageData;
    }
}
