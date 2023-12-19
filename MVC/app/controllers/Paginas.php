<?php

    class Paginas extends Controller{
        public function __construct()
        {
            // echo "Controlador páginas cargado";
        }

        public function index()
        {
            $this->view('paginas/inicio');
        }

        public function articulo()
        {
        
        }

        public function actualizar($num)
        {
            echo $num;
        }
    }

?>