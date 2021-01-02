<?php

namespace FacturaScripts\Plugins\Colombia;

require_once __DIR__ . '/vendor/autoload.php';

use FacturaScripts\Core\Model\Pais;
use FacturaScripts\Core\Model\Serie;
use FacturaScripts\Core\Model\Ciudad;
use FacturaScripts\Core\Base\InitClass;
use FacturaScripts\Core\Model\Impuesto;
use FacturaScripts\Core\Model\Provincia;
use FacturaScripts\Core\Model\FormaPago;
use FacturaScripts\Core\Model\IdentificadorFiscal;
use FacturaScripts\Plugins\Colombia\Model\Producto;
use FacturaScripts\Plugins\Colombia\Model\UnidadMedida;
use FacturaScripts\Plugins\Colombia\Extension\Model\Settings;
use FacturaScripts\Plugins\Colombia\Extension\Model\FacturaCliente;
use FacturaScripts\Plugins\Colombia\Extension\Controller\ListFacturaCliente;

class Init extends InitClass
{
    /**
     * Install tables
     *
     * @var array
     */
    private $installTables = [
        // Order
        Pais::class,
        Provincia::class,
        Ciudad::class,
        UnidadMedida::class,
        // Others
        Serie::class,
        Impuesto::class,
        Producto::class,
        FormaPago::class,
        IdentificadorFiscal::class,
    ];

    /**
     * Load extension
     *
     * @var array
     */
    private $loadExtensions = [
        Settings::class,
        FacturaCliente::class,
        ListFacturaCliente::class,
    ];

    /**
     * Init
     *
     * @return void
     */
    public function init()
    {
        foreach ($this->loadExtensions as $class) {
            $this->loadExtension(new $class());
        }
    }

    /**
     * Update
     *
     * @return void
     */
    public function update()
    {
        // Sync
        $this->syncUp($this->installTables);
    }

    /**
     * Sync up
     *
     * @param array $tables
     *
     * @return void
     */
    private function syncUp(array $tables) {
        // Settings default
        foreach (json_decode(file_get_contents(__DIR__ . '/Data/Codpais/COL/default.json'), true)['default'] as $key => $value) $this->toolBox()->appSettings()->set('default', $key, $value);

        // Save settings
        $this->toolBox()->appSettings()->save();

        foreach ($tables as $model) {
            $newInstance = new $model();

            $this->updateTableData($model::tableName());
        }
    }
}
