<?php
require_once("funciones.php");
if($_SESSION["usuario"]){
    session_destroy();
    setcookie("usuario", null, -1);
}

// var_dump($_SESSION);exit;
 //Redireccionar
 header("Location: Home.php");
 exit;

?>
