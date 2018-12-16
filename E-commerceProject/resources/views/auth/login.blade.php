{{-- @extends('layouts.app')

@section('content') --}}

  <!DOCTYPE html>
  <html lang="en" dir="ltr">
  <head>
      <meta charset="utf-8">
      <link rel="stylesheet" href="/css/login.css">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <title>Login</title>
  </head>

  <body>
      <header>
          <nav class="nav">
              <a class="nav" href="home"><img class="logo" src="/img/logo.png" alt=""></a>
              <ul class="login">
              <li>
                  <a class="registro" href="register">Crear una cuenta</a>
              </li>
              </ul>
          </nav>
      </header>
      <section>
          <h1>BIENVENIDO!</h1>
          <h2>Ingresá tus datos</h2>
          <form class="contenedor-form" action="login" method="post">
            {{csrf_field()}}
              <div class="formulario">
                  <label class="formulario" for="email">Email:</label>
                  <br>
                  @if (isset($errores["email"]))
                  <input class="email error" type="email" name="email" id="email" value="" placeholder="ingrese su e-mail" required>
                  <p class="mensaje-error">
                  {{$errores["email"]}}
                  </p>
                @else
                    <input class="email" type="email" name="email" id="email" value="" placeholder="ingrese su e-mail" required>
                  @endif
              </div>
              <div class="formulario">
                  <label class="formulario" for="password">Contraseña:</label>
                  <br>
                  @if (isset($errores["password"]))
                  <input class="password error" type="password" name="password" id="password" value="" placeholder="ingrese su contraseña" required>
                  <p class="mensaje-error">
                  {{$errores["password"]}}
                  </p>
                @else
                    <input class="password" type="password" name="password" id="password" value="" placeholder="ingrese su contraseña" required>
                  @endif
              </div>
              <p class="sin-registro">¿No tenes usuario creado? Hacé click <a class="sin-registro" href="register">aquí</a> para crear uno.</p>
              <div class="recordarme">
                  <input class="recordarme" type="checkbox" name="recordarme" value="r">
                  <span class="recordarme">Recordarme</span>
              </div>
              <div class="boton">
                  <button class="botones" type="submit" name="aceptar">Ingresar</button>
              </div>
          </form>
      </section>
  </body>

  </html>

{{-- @endsection --}}
