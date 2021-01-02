<?php

namespace FacturaScripts\Plugins\Colombia\Model;

use FacturaScripts\Core\Model\Base\ModelTrait;
use FacturaScripts\Core\Model\Base\ModelClass;

/**
 * Unidad medida
 */
class UnidadMedida extends ModelClass
{
    use ModelTrait;

    /**
     * Unit of measure code
     *
     * @var string
     */
    public $codunidadmedida;

    /**
     * Description
     *
     * @var string
     */
    public $descripcion;

    /**
     * Primary column
     *
     * @return string
     */
    public static function primaryColumn(): string
    {
        return 'codunidadmedida';
    }

    /**
     * Table name
     *
     * @return string
     */
    public static function tableName(): string
    {
        return 'unidadmedidas';
    }
}
