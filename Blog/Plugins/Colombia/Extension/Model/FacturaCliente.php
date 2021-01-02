<?php

namespace FacturaScripts\Plugins\Colombia\Extension\Model;

use FacturaScripts\Core\Model\FormaPago;
use FacturaScripts\Plugins\Colombia\Fe\ClientFE;
use FacturaScripts\Plugins\Colombia\Lib\BusinessDocumentCode;

class FacturaCliente
{
    /**
     * Finish
     */
    public function finish()
    {
        return function () {
            // Completed
            if ((!$this->editable) && ($this->esvalido == false) && ($this->enviando == false)) {
                // Payment form
                $paymentForm = new FormaPago();
                $paymentForm->loadFromCode($this->codpago);

                $response = ClientFE::client()->send('PUT', 'document', [
                    'json' => [
                        'document' => $this,
                        'payment_form' => $paymentForm,
                        'client' => $this->getSubject(),
                        'company' => $this->getCompany(),
                        'document_items' => $this->getLines(),
                        'parent' => $this->parentDocuments()[0] ?? [],
                        'resolution' => BusinessDocumentCode::getResolution($this),
                    ],
                ]);

                if ($response !== false) {
                    $this->uuid = $response['uuid'];
                    $this->enviando = ($response['response']['zip_key'] == null) ? false : true;
                    $this->esvalido = $response['response']['is_valid'];
                    $this->codigoestado = $response['response']['status_code'];
                    $this->estadodescription = $response['response']['status_description'];
                    $this->mensajeestado = $response['response']['status_message'];
                    $this->clavedocumentoxml = $response['response']['xml_document_key'];
                    $this->nombrearchivoxml = $response['response']['xml_file_name'];
                    $this->documentoadjuntoxml = $response['response']['xml_attached_document'];
                    $this->qr_search = $response['response']['qr_search'];
                    $this->qr_graphic = $response['response']['qr_graphic'];
                    $this->zip_key = $response['response']['zip_key'];
                    $this->errormensajes = (!$response['response']['is_valid']) ? implode(', ', $response['response']['errors_messages'] ?? []) : null;
                    $this->save();
                }
            }
        };
    }
}
