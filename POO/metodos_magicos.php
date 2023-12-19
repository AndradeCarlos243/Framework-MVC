<?php
    class Usuario{
        private $nombre;
        public function __set($nombre, $valor){
            echo "configurando $nombre con el valor <strong> $valor </strong><br>";
            $this->nombre = $nombre;
        }

        public function __get($nombre){
            echo "obteniendo $nombre con el valor <strong> $this->nombre </strong><br>";
        }

        public function __isset($nombre)
        {
            echo "Está la variable ".$nombre." configurada?<br>";
            return isset($this->nombre);
        }
    }

    $usuario = new Usuario;
    $usuario->nombre = "Juan";
    echo $usuario->nombre;
    var_dump(isset($usuario->nombre));
?>