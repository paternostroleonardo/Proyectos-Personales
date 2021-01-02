<?php

namespace FacturaScripts\Plugins\Colombia\Lib;

use FacturaScripts\Core\Base\Translator;
use FacturaScripts\Core\Lib\BusinessDocSubType as ParentBusinessDocSubType;

class BusinessDocSubType extends ParentBusinessDocSubType
{
    /**
     * National sales invoice
     *
     * @var string
     */
    const SUB_TYPE_DOCUMENT_NSI = '01';

    /**
     * Credit note
     *
     * @var string
     */
    const SUB_TYPE_DOCUMENT_CN = '91';

    /**
     * Debit note
     *
     * @var string
     */
    const SUB_TYPE_DOCUMENT_DN = '92';

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
            self::SUB_TYPE_DOCUMENT_NSI => self::$i18n->trans('national-sales-invoice'),
            self::SUB_TYPE_DOCUMENT_CN => self::$i18n->trans('credit-note'),
            self::SUB_TYPE_DOCUMENT_DN => self::$i18n->trans('debit-note'),
        ];
    }

    /**
     * Returns the default value
     *
     * @return string
     */
    public static function defaultValue()
    {
        return self::SUB_TYPE_DOCUMENT_NSI;
    }
}
