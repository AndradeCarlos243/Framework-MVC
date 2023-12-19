<?php
    class Primera{
        public $id = 28;
        protected $nombre = "Juan García";

        public function saludo($mensaje){
            echo $mensaje;
        }
    }

    class Segunda extends Primera{
        public function getNombre(){
            echo $this->nombre;
        }
    }

    $segunda = new Segunda;
    // echo $segunda->id;
    echo $segunda->getNombre();
    echo $segunda->saludo("Bienvenidos a mi repositorio");
?>