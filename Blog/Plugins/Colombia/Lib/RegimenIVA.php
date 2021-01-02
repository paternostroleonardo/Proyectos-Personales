<?php

namespace FacturaScripts\Plugins\Colombia\Lib;

class RegimenIVA
{
    const TAX_SYSTEM_EXEMPT = '49';
    const TAX_SYSTEM_GENERAL = '48';
    const TAX_SYSTEM_SURCHARGE = '00';

    /**
     * Returns all the available options
     *
     * @return array
     */
    public static function all()
    {
        return [
            self::TAX_SYSTEM_EXEMPT => 'No responsable de IVA',
            self::TAX_SYSTEM_GENERAL => 'Impuesto sobre las ventas – IVA',
        ];
    }

    /**
     * Returns the default value
     *
     * @return string
     */
    public static function defaultValue()
    {
        return self::TAX_SYSTEM_GENERAL;
    }
}
