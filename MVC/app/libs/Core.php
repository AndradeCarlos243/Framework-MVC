<?php
    /*
    Mapear la URL ingresada
    1-Controlador
    2-Método
    3-Parámetro
    */

    class Core{
        protected $controller = 'paginas';
        protected $metodoActual = 'index';
        protected $parametros = [];

        public function __construct()
        {
            $url = $this->getUrl();    
        }

        public function getUrl()
        {
            echo $_GET['url'];
        }

    }

?>