<?php
    class Usuario
    {
        public $nombre;
        public static $minContrasena = 6;

        public static function validaContrasena($contrasena)
        {
            if(strlen($contrasena) >= self::$minContrasena)
            {
                return true;
            }else
            {
                return false;
            }
        }
    }

    $contrasena = "123456";
    $clase = new Usuario;

    // if(Usuario::validaContrasena($contrasena))
    // {
    //     echo "La contraseña es válida";
    // }else
    // {
    //     echo "Ingresa una contraseña válida";
    // }

    echo Usuario::$minContrasena;
?>