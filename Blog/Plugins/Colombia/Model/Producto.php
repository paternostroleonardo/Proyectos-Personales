<?php

namespace FacturaScripts\Plugins\Colombia\Model;

use FacturaScripts\Core\Model\Producto as ParentProducto;

class Producto extends ParentProducto
{
    /**
     * Unidad de medida of the product.
     *
     * @var string
     */
    public $codunidadmedida;

    /**
     * Reset the values of all model properties.
     */
    public function clear()
    {
        parent::clear();
        $this->codunidadmedida = '94';
    }
}
