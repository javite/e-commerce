<?php

include_once("funciones.php");
/*si el usuario no esta logueado y se entra desde la barra del navegador te redirecciona al login*/
if(!isset($_SESSION["usuario"])){
  header("Location: login.php");
  exit;
}
$usuario = buscarPorEmail($_SESSION["email"]);
$foto = traerFoto();
?>

<!DOCTYPE html>
<html lang="en" dir="ltr">
  <head>
    <meta charset="utf-8">
    <link rel="stylesheet" href="css/BaseResponsive.css">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Detalle de usuario</title>
  </head>
  <body>
  <header>
        <nav class="nav">
            <a class="nav" href="Home.php"><img class="logo" src="img/logo.png" alt=""></a>
            <ul class="login">
            <li>
                <a class="registro" href="Home.php">Página principal</a>
            </li>
            <li>
                <a class="ingreso" href="logout.php">Logout</a>
            </li>
            </ul>
        </nav>
    </header>
  <div class="principal">
      <h1>Bienvenido al perfil de <?=$usuario["usuario"]?></h1>
      <img class="img-usuario" width="200" src="<?=$foto?>" alt="">
      <ul>
        <li>Email: <?=$usuario["email"]?></li>
        <li>Genero: <?php if ($usuario["genero"] == "m"):?>
        varon
        <?php else:?>
        mujer
        <?php endif;?>
        </li>
      </ul>
      
    </div>
  </body>
</html>
