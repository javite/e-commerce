@extends('layouts.app')

@section('content')
//<?php

//  require_once("funciones.php");

  // $usuario = "";
  // $email = "";
  // $direccion = "";
  // $genero = "";
  // $errores = [];
  //
  // /*si el usuario esta logueado y se entra desde la barra del navegador te redirecciona a la home*/
  // if(isset($_SESSION["usuario"])){
  //     header("Location: Home.php");
  //     exit;
  // }
  //
  // if ($_POST){
  //     $errores = validarRegistro($_POST);
  //     $usuario = $_POST["usuario"];
  //     $email = $_POST["email"];
  //     $direccion = $_POST["domicilio"];
  //     if(isset($_POST["sexo"])){
  //         $genero = $_POST["sexo"];
  //     }
  //
  //     if(empty($errores)){
  //       //Registrar usuarios
  //       $nuevoUsuario = armarUsuario();
  //       crearUsuario($nuevoUsuario);
  //       //Guardar a Foto
  //       $ext = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
  //       move_uploaded_file($_FILES["foto"]["tmp_name"], "img/" . trim($nuevoUsuario["email"]) ."." .$ext);
  //       loguearUsuario($nuevoUsuario["email"],false);
  //       //Redireccionar
  //     header("Location: Home.php");
  //     exit;
  //     }
  // }
  //
  // ?>

  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/css/registro.css">
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

          <form class="contenedor-form" action="/register" method="post" enctype="multipart/form-data">
            {{csrf_field()}}
              <div class="formulario">

                  <label class="formulario" for="usuario">Nombre de usuario:</label>
                  <br>
                  @if (isset($errores["usuario"]))
                  <input class="nombreDeUsuario error" type="text" name="usuario"  value= "{{old('usuario')}}" placeholder="ingrese su nombre de usuario" >
                  <p class="mensaje-error">
  				{{$errores["usuario"]}}
  				</p>
  				@else

                  <input class="nombreDeUsuario" type="text" name="usuario"  value="{{old('usuario')}}" placeholder="ingrese su nombre de usuario" >
                @endif
              </div>
              <div class="formulario">
                  <label class="formulario" for="email">Email:</label>
                  <br>
                  @if (isset($errores["email"]))
                  <input class="email error" type="email" name="email"  value="{{'email'}}" placeholder="ingrese su e-mail" >
                  <p class="mensaje-error">
  				{{$errores["email"]}}
                  </p>
                @else
                  <input class="email" type="email" name="email" value="{{'email'}}" placeholder="ingrese su e-mail" >
                @endif
              </div>
              <div class="formulario">
                  <label class="formulario" for="password">Contraseña:</label>
                  <br>
                  @if (isset($errores["password"]))
                  <input class="password error" type="password" name="password" id="password" value="" placeholder="ingrese su contraseña" >
                  <p class="mensaje-error">
  				{{$errores["password"]}}
                  </p>
                @else
                  <input class="password" type="password" name="password" id="password" value="" placeholder="ingrese su contraseña" >
                @endif
              </div>
              <div class="formulario">
                  <label class="formulario" for="confirmation">Repetir contraseña:</label>
                  <br>
                @if (isset($errores["confirmation"]))
                  <input class="password error" type="password" name="confirmation" id="confirmation" value="" placeholder="repetir contraseña" >
                  <p class="mensaje-error">
  				{{$errores["confirmation"]}}
                  </p>
                @else
                  <input class="password" type="password" name="confirmation" id="confirmation" value="" placeholder="repetir contraseña" >
                @endif
              </div>
              <div class="formulario">
                  <label class="formulario" for="domicilio">Domicilio:</label>
                  <br>
                  @if (isset($errores["domicilio"]))
                  <input class="domicilio error" type="text" name="domicilio" id="domicilio" value="{{'domicilio'}}" placeholder="ingrese su domicilio" >
                  <p class="mensaje-error">
  				{{$errores["domicilio"]}}
                  </p>
                @else
                  <input class="domicilio" type="text" name="domicilio" id="domicilio" value="{{'domicilio'}}" placeholder="ingrese su domicilio" >
                @endif
              </div>
              <p class="sexo">Sexo</p>
              @if (isset($errores["sexo"]))
              <div class="sexo error">
              <p class="mensaje-error">
  				{{$errores["sexo"]}}
              </p>
            @else
              <div class="sexo">
              @endif
                  <span class="recordarme">Masculino</span>
                  <input class="sexo" type="radio" name="sexo" value="m"  @if($genero == "m"){{echo "checked";}} @endif>
                  <span class="recordarme">Femenino</span>
                  <input class="sexo" type="radio" name="sexo" value="f"  @if($genero == "f"){{echo "checked";}} @endif>
              </div>
              <div class="formulario">
                @if (isset($errores["usuario"]))
                <input class="foto error" type="file" name="foto" value="">
                <p class="mensaje-error">
                {{$errores["foto"]}}
                </p>
              @else

              <input class="foto" type="file" name="foto" value="">
            @endif


              </div>
              <div class="boton">
                  <button class="botones" type="submit" name="aceptar">Aceptar</button>
              </div>


      </section>
  </body>

  </html>
@endsection
