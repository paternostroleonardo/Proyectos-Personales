<?php

namespace FacturaScripts\Plugins\Colombia\Lib;

use FacturaScripts\Core\Lib\BusinessDocumentGenerator as ParentBusinessDocumentGenerator;

class BusinessDocumentGenerator extends ParentBusinessDocumentGenerator
{
    /**
     * Exclude fields
     *
     * @var array
     */
    public $excludeFields = [
        'uuid', 'esvalido', 'codigoestado', 'estadodescription', 'mensajeestado', 'clavedocumentoxml', 'nombrearchivoxml', 'errormensajes', 'codejercicio', 'codigo', 'fecha', 'femail', 'hora', 'idestado', 'neto', 'netosindto', 'numero', 'total', 'totalirpf', 'totaliva', 'totalrecargo',
    ];
}
