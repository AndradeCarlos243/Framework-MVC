<?php
    // include 'claseA.php';
    // include 'claseB.php';

    spl_autoload_register(function($nombre_clase){
        include './clases/'.$nombre_clase.'.php';
    });

    $saludoA = new ClaseA;
    echo $saludoA->saludo();
    echo '<br>';
    $saludoB = new ClaseB;
    echo $saludoB->saludo();
?>