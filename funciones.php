<?php

session_start();
if (isset($_COOKIE["usuario"]) && isset($_SESSION["usuario"]) == false) {
  $_SESSION["usuario"] = $_COOKIE["usuario"];
}   
if (isset($_COOKIE["email"]) && isset($_SESSION["email"]) == false) {
  $_SESSION["email"] = $_COOKIE["email"];
}

function buscarPorEmail($email) {
  $base = file_get_contents("usuarios.json");
  $baseArray = json_decode($base, true);

   foreach($baseArray as $infoUser) {
      if($infoUser["email"] == $email) {
         return $infoUser;
     }
   }
   return NULL;
}

function armarUsuario() {
  return [
    "id" => proximoId(),
    "usuario" => trim($_POST["usuario"]),
    "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
    "genero" => $_POST["sexo"],
    "email" => trim($_POST["email"]),
    "domicilio" => $_POST["domicilio"]
  ];
}

function crearUsuario($registroUsuario) {

  $usuarios = file_get_contents("usuarios.json");
  $usuarios = json_decode($usuarios, true);
  if($usuarios === NULL) {
    $usuarios=[];
  }
  $usuarios[] = $registroUsuario;
  $usuarios = json_encode($usuarios);
 file_put_contents("usuarios.json", $usuarios);

}

function traerUsuarios() {
  $usuarios = file_get_contents("usuarios.json");
$usuarios =json_decode($usuarios, true);
return $usuarios;
}

function proximoId() {
$json =file_get_contents("usuarios.json");
if ($json == "") {
  return 1;
}
$usuarios =json_decode($json, true);
$ultimo = array_pop($usuarios);
return $ultimo["id"] + 1;
}

function validarRegistro($datos) {
  $datosFinales = [];
  $errores = [];

  foreach ($datos as $posicion => $dato) {
    $datosFinales[$posicion] = trim($dato);
  }

  if (strlen($datosFinales["usuario"]) < 3) {
    $errores["usuario"] = "El nombre de usuario debe ser mayor a 2 caracteres";
  }
  if ($datosFinales["email"] == "") {
    $errores["email"] = "El email no puede estar vacío";
  }
  else if ( filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL) == false) {
    $errores["email"] = "El email no es válido";
  }
  if(buscarPorEmail($datosFinales["email"]) != NULL) {
    $errores["email"] = "La dirección de email ya esta en uso";
  }

   if ($datosFinales["password"] == "") {
    $errores["password"] = "La contraseña está vacía";
  }
  else if (strlen($datosFinales["password"]) < 8) {
      $errores["password"] = "La contraseña debe tener al menos 8 caracteres";
  }
  else if (!preg_match("#[0-9]+#", $datosFinales["password"])) {
      $errores["password"] = "La contraseña debe tener al menos un numero";
  }
  else if (!preg_match("#[A-Z]+#", $datosFinales["password"])) {
      $errores["password"] = "La contraseña debe tener al menos una mayúscula";
  }
  else if (!preg_match("#[a-z]+#", $datosFinales["password"])) {
      $errores["password"] = "La contraseña debe tener al menos una minúscula";
  }

  if ($datosFinales["confirmation"] == "") {
    $errores["confirmation"] = "La contraseña está vacía";
  }
  else if ( $datosFinales["confirmation"] != $datosFinales["password"] ) {
    $errores["confirmation"] = "La contraseña y la confirmación no coinciden";
  }

  if ($datosFinales["domicilio"] == "") {
    $errores["domicilio"] = "El domicilio no puede estar vacío";
  }
  if ( !isset($_POST["sexo"]) ) {
    $errores["sexo"] = "Debe seleccionar un género";
  }
  if($_FILES["foto"]["error"] != 0) {
      $errores["foto"] = "No se cargó la imágen";
  }
  else {
    $ext = pathinfo($_FILES["foto"]["name"], PATHINFO_EXTENSION);
    if($ext != "jpg" && $ext !="png") {
      $errores["foto"] = "La imagen debe ser JPG o PNG";
    }
  }
  return $errores;
}

function buscarPorId($id) {
 $usuarios= file_get_contents("usuarios.json");
 if ($usuarios == "") {
   return null;
 }
 $usuariosArray= json_decode($usuarios, true);
 foreach ($usuariosArray as $usuario){
   if($id==$usuario["id"]){
     return $usuario;
    }
  }
  return null;
}

//*Login

function validarLogin($datos) {
  $datosFinales = [];
  $errores = [];

foreach ($datos as $posicion => $dato) {
  $datosFinales[$posicion] = trim($dato);
}

if ($datosFinales["email"] == "") {
  $errores["email"] = "El email no puede estar vacío";
}
else if ( filter_var($datosFinales["email"], FILTER_VALIDATE_EMAIL) == false) {
  $errores["email"] = "El email no es válido";
}
if(buscarPorEmail($datosFinales["email"]) == NULL) {
  $errores["email"] = "El usuario no existe";
}
//* validar password
if ($datosFinales["password"] == "") {
  $errores["password"] = "La contraseña no puede estar vacia";
}
else {
$usuario = buscarPorEmail($datosFinales["email"]);
  if($datosFinales["password"] !== NULL) {
    if(!password_verify($datosFinales["password"], $usuario["password"])) {
    $errores["password"] = "Contraseña incorrecta";
  }
  } 
}
return $errores;
}

function loguearUsuario($email, $recordarme){
  $usuarioLogueado = buscarPorEmail($email);
  $_SESSION["usuario"] = $usuarioLogueado["usuario"];
  $_SESSION["email"] = $usuarioLogueado["email"];
  if($recordarme) {
    setcookie("usuario", $usuarioLogueado["usuario"], time() + 60);
    setcookie("email", $usuarioLogueado["email"], time() + 60); 
  }
}

function traerFoto() {
  $foto = glob("img/" . $_SESSION["email"] . "*")[0];
  return $foto;
}
?>