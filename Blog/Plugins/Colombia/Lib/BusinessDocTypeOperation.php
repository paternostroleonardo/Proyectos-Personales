<?php

namespace FacturaScripts\Plugins\Colombia\Lib;

use FacturaScripts\Core\Base\Translator;
use FacturaScripts\Core\Lib\BusinessDocTypeOperation as ParentBusinessDocTypeOperation;

class BusinessDocTypeOperation extends ParentBusinessDocTypeOperation
{
    /**
     * Standard
     *
     * @var string
     */
    const TYPE_OPERATION_DOCUMENT_STA = '10';

    /**
     *
     * @var Translator
     */
    public static $i18n;

    /**
     * Returns all the available options
     *
     * @return array
     */
    public static function all()
    {
        if (!isset(self::$i18n)) {
            self::$i18n = new Translator();
        }

        return [
            self::TYPE_OPERATION_DOCUMENT_STA => self::$i18n->trans('standard'),
        ];
    }

    /**
     * Returns the default value
     *
     * @return string
     */
    public static function defaultValue()
    {
        return self::TYPE_OPERATION_DOCUMENT_STA;
    }
}
