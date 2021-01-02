<?php

namespace FacturaScripts\Plugins\Colombia\Lib;

use FacturaScripts\Core\Lib\BusinessDocumentCode as ParentBusinessDocumentCode;

class BusinessDocumentCode extends ParentBusinessDocumentCode
{
    /**
     * Generates a new identifier for humans from a document.
     *
     * @param \FacturaScripts\Core\Model\Base\BusinessDocument $document
     */
    public static function getNewCode(&$document)
    {
        $sequence = static::getSequence($document);
        $document->numero = static::getNewNumber($sequence, $document);

        $vars = [
            '{EJE}' => $document->codejercicio,
            '{SERIE}' => $document->codserie,
            '{0SERIE}' => str_pad($document->codserie, 2, '0', STR_PAD_LEFT),
            '{NUM}' => $document->numero,
            '{0NUM}' => str_pad($document->numero, $sequence->longnumero, '0', STR_PAD_LEFT),
            '{PREFIX}' => $sequence->prefijo ?? null,
        ];

        $document->codigo = strtr($sequence->patron, $vars);
    }

    /**
     * Get resolution
     *
     * @param mixed $document
     *
     * @return \FacturaScripts\Plugins\Colombia\Model\SecuenciaDocumento
     */
    public static function getResolution(&$document)
    {
        return static::getSequence($document);
    }
}
