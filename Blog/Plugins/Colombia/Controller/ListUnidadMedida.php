<?php

namespace FacturaScripts\Plugins\Colombia\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

class ListUnidadMedida extends ListController
{
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

    /**
     * Load Views
     */
    protected function createViews()
    {
        $this->createViewProtected();
    }

    /**
     * Create view protected
     *
     * @param string $viewName
     *
     * @return void
     */
    protected function createViewProtected($viewName = 'ListUnidadMedida')
    {
        $this->addView($viewName, 'UnidadMedida');
        $this->addOrderBy($viewName, ['codunidadmedida'], 'code');
        $this->addOrderBy($viewName, ['descripcion'], 'description');
        $this->addSearchFields($viewName, ['descripcion', 'codunidadmedida']);
    }
}
