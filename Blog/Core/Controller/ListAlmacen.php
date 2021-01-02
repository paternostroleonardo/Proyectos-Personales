<?php
/**
 * This file is part of FacturaScripts
 * Copyright (C) 2017-2019 Carlos Garcia Gomez <carlos@facturascripts.com>
 *
 * This program is free software: you can redistribute it and/or modify
 * it under the terms of the GNU Lesser General Public License as
 * published by the Free Software Foundation, either version 3 of the
 * License, or (at your option) any later version.
 *
 * This program is distributed in the hope that it will be useful,
 * but WITHOUT ANY WARRANTY; without even the implied warranty of
 * MERCHANTABILITY or FITNESS FOR A PARTICULAR PURPOSE. See the
 * GNU Lesser General Public License for more details.
 *
 * You should have received a copy of the GNU Lesser General Public License
 * along with this program. If not, see <http://www.gnu.org/licenses/>.
 */
namespace FacturaScripts\Core\Controller;

use FacturaScripts\Core\Lib\ExtendedController\ListController;

/**
 *  Controller to list the items in the Almacen model
 *
 * @author Carlos García Gómez  <carlos@facturascripts.com>
 * @author Artex Trading sa     <jcuello@artextrading.com>
 */
class ListAlmacen extends ListController
{

    /**
     * Returns basic page attributes
     *
     * @return array
     */
    public function getPageData()
    {
        $data = parent::getPageData();
        $data['menu'] = 'warehouse';
        $data['title'] = 'warehouses';
        $data['icon'] = 'fas fa-warehouse';
        return $data;
    }

    /**
     * Load views
     */
    protected function createViews()
    {
        $this->createViewAlmacen();
        $this->createViewTransfer();
    }

    /**
     * 
     * @param string $name
     */
    protected function createViewAlmacen($name = 'ListAlmacen')
    {
        $this->addView($name, 'Almacen', 'warehouses', 'fas fa-warehouse');
        $this->addSearchFields($name, ['nombre', 'codalmacen']);
        $this->addOrderBy($name, ['codalmacen'], 'code');
        $this->addOrderBy($name, ['nombre'], 'name');

        /// Filters
        $selectValues = $this->codeModel->all('empresas', 'idempresa', 'nombre');
        $this->addFilterSelect($name, 'idempresa', 'company', 'idempresa', $selectValues);
    }

    /**
     * 
     * @param string $name
     */
    protected function createViewTransfer($name = 'ListTransferenciaStock')
    {
        $this->addView($name, 'TransferenciaStock', 'stock-transfers', 'fas fa-exchange-alt');
        $this->addSearchFields($name, ['observaciones']);
        $this->addOrderBy($name, ['codalmacenorigen'], 'origin-warehouse');
        $this->addOrderBy($name, ['codalmacendestino'], 'destination-warehouse');
        $this->addOrderBy($name, ['fecha'], 'date');
        $this->addOrderBy($name, ['usuario'], 'user');

        /// Filters
        $this->addFilterDatePicker($name, 'fromfecha', 'from-date', 'fecha', '>=');
        $this->addFilterDatePicker($name, 'untilfecha', 'until-date', 'fecha', '<=');
        $this->addFilterAutocomplete($name, 'nick', 'user', 'nick', 'users', 'nick', 'nick');
    }
}