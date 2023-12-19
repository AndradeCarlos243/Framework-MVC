<?php
  class Usuario{

    private $id = 56;
    private $email;
    private $usuario;
    private $contrasena;

    public function __construct()
    {
      // echo "Llamado al constructor";
    }

    public function __destruct()
    {
      // echo "Llamada al destructor";
    }

    public function auto_usuario(){
      echo $this->usuario." se encuentra autenticado";
    }

    public function registrar($usuario, $contrasena)
    {
        echo "Usuario registrado $usuario con la contraseña $contrasena";
    }

    public function login($usuario, $contrasena)
    {
      $this->usuario = $usuario;
      $this->contrasena = $contrasena;
      $this->auto_usuario();
    }
  }

  $usuario1 = new Usuario;
  $usuario1->login("Carlos", "ABCDE");
  echo "<br>";
?>