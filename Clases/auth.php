<?php

class Auth {
  public function __construct() {
    session_start();

    if (isset($_COOKIE["usuario"]) && isset($_SESSION["usuario"]) == false) {
      $_SESSION["usuario"] = $_COOKIE["usuario"];
    }
    if (isset($_COOKIE["email"]) && isset($_SESSION["email"]) == false) {
      $_SESSION["email"] = $_COOKIE["email"];
    }
  }

//Estoy que es esta abajo No estoy seguro de que quede bien asi....

  function loguearUsuario($email) {
    $_SESSION["usuarioLogueado"] = $email;
  }

  function estaLogueado() {
    return isset($_SESSION["usuarioLogueado"]);
  }

  public function usuarioLogueado() {
    global $db;
    return $db->buscarPorEmail($_SESSION["usuarioLogueado"]);
  }

}

?>
