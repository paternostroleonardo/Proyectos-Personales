<?php

namespace FacturaScripts\Plugins\Colombia\Extension\Controller;

use FacturaScripts\Plugins\Colombia\Fe\ClientFE;

class ListFacturaCliente
{
    /**
     * Exec previous action
     *
     * @return boolean
     */
    public function execPreviousAction()
    {
        return function ($action) {
            if ($action === 'status_zip') {
                $code = $this->request->request->get('code', $this->request->query->get('code', ''));

                if ($this->views[$this->active]->model->loadFromCode($code)) {
                    $response = ClientFE::client()->send('POST', 'document/status-zip', [
                        'json' => [
                            'uuid' => $this->views[$this->active]->model->uuid,
                            'zip_key' => $this->views[$this->active]->model->zip_key,
                        ],
                    ]);

                    if ($response !== false) {
                        $this->views[$this->active]->model->uuid = $response['uuid'];
                        $this->views[$this->active]->model->enviando = false;
                        $this->views[$this->active]->model->esvalido = $response['response']['is_valid'];
                        $this->views[$this->active]->model->codigoestado = $response['response']['status_code'];
                        $this->views[$this->active]->model->estadodescription = $response['response']['status_description'];
                        $this->views[$this->active]->model->mensajeestado = $response['response']['status_message'];
                        $this->views[$this->active]->model->clavedocumentoxml = $response['response']['xml_document_key'];
                        $this->views[$this->active]->model->nombrearchivoxml = $response['response']['xml_file_name'];
                        $this->views[$this->active]->model->documentoadjuntoxml = $response['response']['xml_attached_document'];
                        $this->views[$this->active]->model->qr_search = $response['response']['qr_search'];
                        $this->views[$this->active]->model->qr_graphic = $response['response']['qr_graphic'];
                        $this->views[$this->active]->model->zip_key = $response['response']['zip_key'];
                        $this->views[$this->active]->model->errormensajes = (!$response['response']['is_valid']) ? implode(', ', $response['response']['errors_messages'] ?? []) : null;
                        $this->views[$this->active]->model->save();

                        return true;
                    }

                    return false;
                }
            }
        };
    }
}
