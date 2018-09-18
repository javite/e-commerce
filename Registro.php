<?php
    $usuario = "";
    $email = "";
    $direccion = "";
    $genero = "";
if ($_POST){
    //  var_dump($_POST);exit;




    $errores = [];
    if(strlen($_POST["usuario"]) < 2){
        $errores[] = "El usuario debe tener mas de 2 letras";
    } else {
        $usuario = $_POST["usuario"];
    }
    if(strlen($_POST["email"]) == 0){
        $errores[] = "El email no puede estar vacío";
    } else if(filter_var($_POST["email"], FILTER_VALIDATE_EMAIL) == false){
        $errores[] = "El email no es válido";
    } else {
        $email = $_POST["email"];
    }
    if(strlen($_POST["password"]) < 8){
        $errores[] = "La contraseña debe tener mas de 8 caracteres";
    }
    if($_POST["confirmation"] != $_POST["password"]){
        $errores[] = "La contraseña y la confirmación no coinciden";
    }
    if(strlen($_POST["domicilio"]) == 0){
        $errores[] = "El domicilio no puede estar vacío";
    } else {
        $direccion = $_POST["domicilio"];
    }
    if(isset($_POST["sexo"])==false){
        $errores[] = "Debe seleccionar un género";
    } else {
        $genero = $_POST["sexo"];
    }

    if(empty($errores)){
        header("Location: Home.html");exit;
    }
}

?>

<!DOCTYPE html>
<html lang="en" dir="ltr">

<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="css/Registro.css">
    <title>Registro</title>
</head>

<body>
    <header>
        <nav>
            <a class="nav" href="Home.html"><img class="logo" src="img/logo.png" alt=""></a>
            <ul class="login">
                <li>
                    <a class="registro" href="login.html">¿Tenés una cuenta? Ingresá acá</a>
                </li>
            </ul>
        </nav>
    </header>

    <section>
        <h1>Crear una cuenta</h1>
        <h2>Ingresá tus datos</h2>
        <?php if(empty($errores) == false):?>
        <ul>
            <?php foreach ($errores as $error) :?>
                <li><?=$error?></li>
            <?php endforeach;?>
        </ul>
        <?php endif; ?>
        <form class="contenedor-form" action="Registro.php" method="post">
            <div class="formulario">
                <label class="formulario" for="usuario">Nombre de usuario:</label>
                <br>
                <input class="nombreDeUsuario" type="text" name="usuario" id="nombreDeUsuario" value="<?=$usuario?>" placeholder="ingrese su nombre de usuario" >
            </div>
            <div class="formulario">
                <label class="formulario" for="email">Email:</label>
                <br>
                <input class="email" type="email" name="email" id="email" value="<?=$email?>" placeholder="ingrese su e-mail" >
            </div>
            <div class="formulario">
                <label class="formulario" for="password">Contraseña:</label>
                <br>
                <input class="password" type="password" name="password" id="password" value="" placeholder="ingrese su contraseña" >
            </div>
            <div class="formulario">
                <label class="formulario" for="confirmation">Repetir contraseña:</label>
                <br>
                <input class="password" type="password" name="confirmation" id="confirmation" value="" placeholder="repetir contraseña" >
            </div>
            <div class="formulario">
                <label class="formulario" for="domicilio">Domicilio:</label>
                <br>
                <input class="domicilio" type="text" name="domicilio" id="domicilio" value="<?=$direccion?>" placeholder="ingrese su domicilio" >
            </div>
            <p class="sexo">Sexo</p>
            <div class="sexo">
                <span class="recordarme">Masculino</span>
                <input class="sexo" type="radio" name="sexo" value="m" <?php if($genero == "m"){echo "checked";} ?>>
                <span class="recordarme">Femenino</span>
                <input class="sexo" type="radio" name="sexo" value="f" <?php if($genero == "f"){echo "checked";} ?>>
            </div>
            <div class="boton">
                <button class="botones" type="submit" name="aceptar">Aceptar</button>
            </div>

    </section>
</body>

</html>