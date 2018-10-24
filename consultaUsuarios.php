<?php

require_once("funciones.php");
global $db;
$consultas = $db->query("SELECT * FROM usuarios");
// $consulta->bindValue(":email", $email);
// $consultas->execute();
$consultas->fetchAll(PDO::FETCH_ASSOC);
echo "funciona";
foreach($consultas as $consulta){
    echo $consulta["nombre"];
    echo "funciona";
}
?>