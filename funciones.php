<?php

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


function armarUsuario() {
  return [
    "usuario" => trim($_POST["usuario"]),
    "password" => password_hash($_POST["password"], PASSWORD_DEFAULT),
    "genero" => $_POST["sexo"],
    "email" => trim($_POST["email"]),
    "domicilio" => $_POST["domicilio"]
  ];
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

?>
