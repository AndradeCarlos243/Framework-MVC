<?php
    abstract class Animal
    {
        public $nombre;
        public $color;

        public function describir()
        {
            return "El nombre es $this->nombre, y el color es $this->color";
        }

        abstract public function sonido();
    }

    class Gato extends Animal{
        public function describir()
        {
            return parent::describir();
        }

        public function sonido(){
            return 'Miau';
        }
    }

    class Perro extends Animal{
        public function describir()
        {
            return parent::describir();
        }

        public function sonido(){
            return 'Guau';
        }
    }

    $gato = new Gato();
    $gato->nombre = "Richard P.";
    $gato->color = "Naranja";
    echo $gato->describir();
    echo '<br>';
    echo $gato->sonido();

    echo '<br>';

    $perro = new Perro();
    $perro->nombre = "Solovino";
    $perro->color = "Gris";
    echo $perro->describir();
    echo '<br>';
    echo $perro->sonido();
?>