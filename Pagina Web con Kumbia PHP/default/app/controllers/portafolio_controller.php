<?php

/**
 * Controller por defecto si no se usa el routes
 *
 */
class PortafolioController extends AppController
{

    /**
     * @abstract    pagina inicial del portafolio
     */
    public function index(){
        // seleccion del template
        View::template('portafolio/principal');
    }

    /**
     * @abstract    pagina del catalogo para emprendedores
     */
    public function emprendedor(){
        // seleccion del template
        View::template('portafolio/default');
    }

    /**
     * @abstract    pagina del catalogo para pymes
     */
    public function pymes(){
        // seleccion del template
        View::template('portafolio/default');
    }

    /**
     * @abstract    pagina del catalogo para educacion
     */
    public function educacion(){
        // seleccion del template
        View::template('portafolio/default');
    }

    /**
     * @abstract    pagina del catalogo para sistemas operativos
     */
    public function os(){
        // seleccion del template
        View::template('portafolio/default');
    }
}
