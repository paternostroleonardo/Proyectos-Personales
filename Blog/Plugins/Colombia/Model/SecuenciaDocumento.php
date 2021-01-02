<?php

namespace FacturaScripts\Plugins\Colombia\Model;

use FacturaScripts\Core\Model\SecuenciaDocumento as ParentSecuenciaDocumento;

class SecuenciaDocumento extends ParentSecuenciaDocumento
{
    /**
     *
     * @var string
     */
    public $prefijo;

    /**
     *
     * @var int
     */
    public $resolucion;

    /**
     *
     * @var date
     */
    public $fecharesolucion;

    /**
     *
     * @var string
     */
    public $llavetecnica;

    /**
     *
     * @var int
     */
    public $desde;

    /**
     *
     * @var int
     */
    public $hasta;

    /**
     *
     * @var date
     */
    public $fechadesde;

    /**
     *
     * @var date
     */
    public $fechahasta;

    /**
     * Clear
     *
     * @return void
     */
    public function clear()
    {
        parent::clear();
        $this->hasta = null;
        $this->desde = null;
        $this->prefijo = null;
        $this->fechadesde = null;
        $this->fechahasta = null;
        $this->resolucion = null;
        $this->llavetecnica = null;
        $this->fecharesolucion = null;
        $this->patron = '{PREFIX}{0NUM}';
    }
}
