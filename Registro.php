<?php

require_once("funciones.php");

    $usuario = "";
    $email = "";
    $direccion = "";
    $genero = "";
    $errores = [];

if ($_POST){
    $errores = validarRegistro($_POST);
    $usuario = $_POST["usuario"];
    $email = $_POST["email"];
    $direccion = $_POST["domicilio"];
    if(isset($_POST["sexo"])){
        $genero = $_POST["sexo"];
    } 
    
    if(empty($errores)){
        header("Location: Home.php");
        exit;
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
            <a class="nav" href="Home.php"><img class="logo" src="img/logo.png" alt=""></a>
            <ul class="login">
                <li>
                    <a class="registro" href="login.php">¿Tenés una cuenta? Ingresá acá</a>
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
                <?php if (isset($errores["usuario"])) : ?>
                <input class="nombreDeUsuario error" type="text" name="usuario"  value="<?=$usuario?>" placeholder="ingrese su nombre de usuario" >
                <p class="mensaje-error">
				<?=$errores["usuario"]?>
				</p>
				<?php else : ?>
                <input class="nombreDeUsuario" type="text" name="usuario"  value="<?=$usuario?>" placeholder="ingrese su nombre de usuario" >
                <?php endif; ?>
            </div>
            <div class="formulario">
                <label class="formulario" for="email">Email:</label>
                <br>
                <?php if (isset($errores["email"])) : ?>
                <input class="email error" type="email" name="email"  value="<?=$email?>" placeholder="ingrese su e-mail" >
                <p class="mensaje-error">
				<?=$errores["email"]?>
                </p>
                <?php else : ?>
                <input class="email" type="email" name="email" value="<?=$email?>" placeholder="ingrese su e-mail" >
                <?php endif ; ?>
            </div>
            <div class="formulario">
                <label class="formulario" for="password">Contraseña:</label>
                <br>
                <?php if (isset($errores["password"])) : ?>
                <input class="password error" type="password" name="password" id="password" value="" placeholder="ingrese su contraseña" >
                <p class="mensaje-error">
				<?=$errores["password"]?>
                </p>
                <?php else : ?>
                <input class="password" type="password" name="password" id="password" value="" placeholder="ingrese su contraseña" >
                <?php endif ; ?>
            </div>
            <div class="formulario">
                <label class="formulario" for="confirmation">Repetir contraseña:</label>
                <br>
                <?php if (isset($errores["confirmation"])) : ?>
                <input class="password error" type="password" name="confirmation" id="confirmation" value="" placeholder="repetir contraseña" >
                <p class="mensaje-error">
				<?=$errores["confirmation"]?>
                </p>
                <?php else : ?>
                <input class="password" type="password" name="confirmation" id="confirmation" value="" placeholder="repetir contraseña" >
                <?php endif; ?>
            </div>
            <div class="formulario">
                <label class="formulario" for="domicilio">Domicilio:</label>
                <br>
                <?php if (isset($errores["domicilio"])) : ?>
                <input class="domicilio error" type="text" name="domicilio" id="domicilio" value="<?=$direccion?>" placeholder="ingrese su domicilio" >
                <p class="mensaje-error">
				<?=$errores["domicilio"]?>
                </p>
                <?php else : ?>
                <input class="domicilio" type="text" name="domicilio" id="domicilio" value="<?=$direccion?>" placeholder="ingrese su domicilio" >
                <?php endif ; ?>
            </div>
            <p class="sexo">Sexo</p>
            <?php if (isset($errores["sexo"])) : ?>
            <div class="sexo error">
            <p class="mensaje-error">
				<?=$errores["sexo"]?>
            </p>
            <?php else : ?>
            <div class="sexo">
            <?php endif ; ?>
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