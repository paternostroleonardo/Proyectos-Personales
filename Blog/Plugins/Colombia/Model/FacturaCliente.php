<?php

namespace FacturaScripts\Plugins\Colombia\Model;

use FacturaScripts\Core\Model\Impuesto;
use FacturaScripts\Core\Model\Variante;
use FacturaScripts\Core\Base\DataBase\DataBaseWhere;
use FacturaScripts\Core\Model\FacturaCliente as ParentFacturaCliente;
use FacturaScripts\Dinamic\Model\LineaFacturaCliente as LineaFactura;

class FacturaCliente extends ParentFacturaCliente
{
    /**
     * Returns the lines associated with the invoice.
     *
     * @return LineaFactura[]
     */
    public function getLines()
    {
        $lineaModel = new LineaFactura();
        $where = [new DataBaseWhere('idfactura', $this->idfactura)];
        $order = ['orden' => 'DESC', 'idlinea' => 'ASC'];

        $lines = $lineaModel->all($where, $order, 0, 0);

        foreach ($lines as $line) {
            // Item
            $item = new Producto();
            $item->loadFromCode($line->idproducto);
            $line->producto = $item;

            // Tax
            $tax = new Impuesto();
            $tax->loadFromCode($line->codimpuesto);
            $line->impuesto = $tax;

            // Variant
            $variant = new Variante();
            $variant->loadFromCode('', [
                new DataBaseWhere('idproducto', $line->idproducto),
                new DataBaseWhere('referencia', $item->referencia),
            ]);
            $line->variante = $variant;
        }

        return $lines;
    }

    /**
     * Removes this document from the database.
     *
     * @return bool
     */
    public function delete()
    {
        if ($this->esvalido === true) {
            $this->toolBox()->log('fe')->error("El documento electrónico {$this->codigo}, ha sido autorizada por la DIAN.");

            return false;
        }

        if ($this->enviando == true) {
            $this->toolBox()->log('fe')->error("El documento electrónico {$this->codigo}, ha sido enviado a la DIAN.");

            return false;
        }

        return parent::delete();
    }
}
