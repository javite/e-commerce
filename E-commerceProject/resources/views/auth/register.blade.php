{{-- @extends('layouts.app')

@section('content') --}}


  <!DOCTYPE html>
  <html lang="en" dir="ltr">

  <head>
      <meta charset="utf-8">
      <meta name="viewport" content="width=device-width, initial-scale=1.0">
      <link rel="stylesheet" href="/css/registro.css">
        <link href="https://fonts.googleapis.com/css?family=Hind:700&amp;subset=latin-ext" rel="stylesheet">
      <script src="/js/registerJs.js"></script>
      <title>Registro</title>
  </head>

  <body>
      <header>
          <nav>
              <a class="nav" href="home"><img class="logo" src="/img/logo.png" alt=""></a>
              <ul class="login">
                  <li>
                      <a class="registro" href="login">¿Tenés una cuenta? Ingresá acá</a>
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


                  <input  class="nombreDeUsuario" type="text" name="usuario"  value="{{old('usuario')}}" placeholder="ingrese su nombre de usuario" >


              @if($errors->has('usuario'))
                <span class="help-block">
                  <strong>{{$errors->first('usuario')}}</strong>
                </span>
              @endif

              </div>
              <div class="formulario">
                  <label class="formulario" for="email">Email:</label>
                  <br>

                  </p>

                  <input class="email" type="email" name="email" value="{{old('email')}}" placeholder="ingrese su e-mail" >

                @if($errors->has('email'))
                  <span class="help-block">
                    <strong>{{$errors->first('email')}}</strong>
                  </span>
                @endif

              </div>
              <div class="formulario">
                  <label class="formulario" for="password">Contraseña:</label>
                  <br>

                  <input class="password" type="password" name="password" id="password" value="" placeholder="ingrese su contraseña" >

                @if($errors->has('password'))
                  <span class="help-block">
                    <strong>{{$errors->first('password')}}</strong>
                  </span>
                @endif
              </div>
              <div class="formulario">
                  <label class="password_confirmation" for="confirmation">Repetir contraseña:</label>
                  <br>

                <input class="password_confirmation" type="password" name="password_confirmation" id="confirmation" value="" placeholder="repetir contraseña" >

                @if($errors->has('password_confirmation'))
                  <span class="help-block">
                    <strong>{{$errors->first('password_confirmation')}}</strong>
                  </span>
                @endif
              </div>
              <div class="formulario">
                  <label class="formulario" for="domicilio">Domicilio:</label>
                  <br>

                  </p>

                  <input class="domicilio" type="text" name="domicilio" id="domicilio" value="{{old('domicilio')}}" placeholder="ingrese su domicilio" >
                  @if($errors->has('domicilio'))
                    <span class="help-block">
                      <strong>{{$errors->first('domicilio')}}</strong>
                    </span>
                  @endif

              </div>
              <p class="sexo">Sexo</p>

              </p>

              <div class="sexo">
                @if($errors->has('sexo'))
                  <span class="help-block">
                    <strong>{{$errors->first('sexo')}}</strong>
                  </span>
                @endif
                  <span class="recordarme">Masculino</span>
                  <input class="sexo" type="radio" name="sexo" value="m" @if(old("sexo") == "m") {{"checked"}} @endif>
                  <span class="recordarme">Femenino</span>
                  <input class="sexo" type="radio" name="sexo" value="f" @if(old("sexo") == "f") {{"checked"}} @endif>
              </div>
              <div class="formulario">

                </p>

              <input class="foto" type="file" name="foto" value="">
              @if($errors->has('foto'))
                <span class="help-block">
                  <strong>{{$errors->first('foto')}}</strong>
                </span>
              @endif


              </div>
              <div class="boton">
                  <button class="botones" type="submit" name="aceptar">Aceptar</button>
              </div>


      </section>
  </body>

  </html>
{{-- @endsection --}}
