<?php
require_once("funciones.php");
$infoUsuarios = traerUsuarios();

 ?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <title></title>
  </head>
  <body>
    <h1>Mis usuarios</h1>
    <ul>
      <?php foreach ($infoUsuarios as $usuario) { ?>
      <li>
        <?php  echo $usuario["usuario"]; ?>
      </li>
    <?php } ?>
    </ul>

  </body>
</html>
