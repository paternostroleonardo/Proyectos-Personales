<?php

namespace FacturaScripts\Plugins\Colombia\Lib\Widget;

use FacturaScripts\Core\Lib\Widget\BaseWidget;

/**
 * Widget Fe
 */
class WidgetFe extends BaseWidget
{
    /**
     * Model
     *
     * @var mixed
     */
    protected $model;

    /**
     *
     * @param array $data
     */
    public function __construct($data)
    {
        parent::__construct($data);
    }

    /**
     *
     * @param object $model
     */
    protected function setValue($model)
    {
        $this->value = @$model->{$this->fieldname};
        $this->model = @$model;
    }

    /**
     *
     * @return string
     */
    protected function show()
    {
        if ($this->value === true) {
            $state = 'Aceptada';
            $icon = 'fas fa-check text-success';
        }

        if ($this->model->enviando == true) {
            $state = 'Enviado';
            $icon = 'fas fa-sync text-info';
        }

        if (($this->value === false) && ($this->model->enviando == false)) {
            $state = 'Rechazada';
            $icon = 'fas fa-exclamation-triangle text-danger';
        }

        if (($this->value === null) && ($this->model->zip_key == null)) {
            $state = 'Sin enviar';
            $icon = 'fas fa-info-circle text-warning';
        }

        if (($this->model->enviando) || (($this->value == false) && ($this->model->zip_key != null) && (!$this->model->editable))) {
            return <<<HTML
<button type="button" class="btn btn-sm btn-link cancelClickable" data-toggle="modal" data-target="#modal-fe-{$this->model->uuid}">{$state}</button>
<form id="formModal{$this->model->uuid}" method="post" enctype="multipart/form-data">
    <input type="hidden" name="activetab" value="ListFacturaCliente"/>
    <input type="hidden" name="code" value="{$this->model->idfactura}"/>
    <div class="modal cancelClickable text-dark" id="modal-fe-{$this->model->uuid}" tabindex="-1" role="dialog">
        <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
            <div class="modal-content">
                <div class="modal-header">
                    <h5 class="modal-title">
                        <i class="{$icon}"></i> {$this->model->codigo}
                    </h5>
                    <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                        <span aria-hidden="true">&times;</span>
                    </button>
                </div>
                <div class="modal-body">
                    <div class="row">
                        <div class="col-md">
                            <div class="form-group">
                                <label>UUID</label>
                                <input type="text" name="uuid" value="{$this->model->uuid}" class="form-control" readonly="true"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Estado</label>
                                <input type="text" name="esvalido" value="{$state}" class="form-control" readonly="true"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Estado descriptión</label>
                                <input type="text" name="estadodescription" value="{$this->model->estadodescription}" class="form-control" readonly="true"/>
                            </div>
                        </div>
                        <div class="col-md-6">
                            <div class="form-group">
                                <label>Mensaje estado</label>
                                <input type="text" name="mensajeestado" value="{$this->model->mensajeestado}" class="form-control" readonly="true"/>
                            </div>
                        </div>
                        <div class="col-md-12">
                            <div class="form-group">
                                <label>Mensajes error</label>
                                <textarea class="form-control" rows="8" name="errormensajes" readonly="true">{$this->model->errormensajes}</textarea>
                            </div>
                        </div>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
                    <button type="submit" name="action" value="status_zip" class="btn btn-primary">Consultar</button>
                </div>
            </div>
        </div>
    </div>
</form>
HTML;
        }

        return <<<HTML
<button type="button" class="btn btn-sm btn-link cancelClickable" data-toggle="modal" data-target="#modal-fe-{$this->model->uuid}">{$state}</button>
<div class="modal cancelClickable text-dark" id="modal-fe-{$this->model->uuid}" tabindex="-1" role="dialog">
    <div class="modal-dialog modal-dialog-centered modal-dialog-scrollable modal-xl" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h5 class="modal-title">
                    <i class="{$icon}"></i> {$this->model->codigo}
                </h5>
                <button type="button" class="close" data-dismiss="modal" aria-label="Close">
                    <span aria-hidden="true">&times;</span>
                </button>
            </div>
            <div class="modal-body">
                <div class="row">
                    <div class="col-md">
                        <div class="form-group">
                            <label>UUID</label>
                            <input type="text" name="uuid" value="{$this->model->uuid}" class="form-control" readonly="true"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Estado</label>
                            <input type="text" name="esvalido" value="{$state}" class="form-control" readonly="true"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Estado descriptión</label>
                            <input type="text" name="estadodescription" value="{$this->model->estadodescription}" class="form-control" readonly="true"/>
                        </div>
                    </div>
                    <div class="col-md-6">
                        <div class="form-group">
                            <label>Mensaje estado</label>
                            <input type="text" name="mensajeestado" value="{$this->model->mensajeestado}" class="form-control" readonly="true"/>
                        </div>
                    </div>
                    <div class="col-md-12">
                        <div class="form-group">
                            <label>Mensajes error</label>
                            <textarea class="form-control" rows="8" name="errormensajes" readonly="true">{$this->model->errormensajes}</textarea>
                        </div>
                    </div>
                </div>
            </div>
            <div class="modal-footer">
                <button type="button" class="btn btn-secondary" data-dismiss="modal">Cerrar</button>
            </div>
        </div>
    </div>
</div>
HTML;
    }
}
