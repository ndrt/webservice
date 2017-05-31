<?php

require_once 'Tecnicos.php';
$msj = $_REQUEST['mensaje'];
$tel = $_REQUEST['telefono'];
$email = $_REQUEST['correo'];
$dir = $_REQUEST['direccion'];

/*$msj = "sdsds";
$tel ="121313";
$email ="assasasa";
$dir="sdsdsd";
*/

if($msj != "" || $tel != "" || $email != "" || $dir != ""){

$rg = new Tecnicos();
$rg->setMensaje($msj);
$rg->setTelefono($tel);
$rg->setCorreo($email);
$rg->setDireccion($dir);
$rg->registrar();
echo "ok";
}else{
  echo "no deje en blanco";  
}
