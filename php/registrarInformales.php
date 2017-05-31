<?php
require_once 'Informales.php';
$msj = $_REQUEST['mensaje'];
$tel = $_REQUEST['telefono'];
$email = $_REQUEST['correo'];
$dir = $_REQUEST['direccion'];

if($msj != "" || $tel != "" || $email != "" || $dir != ""){

$rg = new Informales();
$rg->setMensaje($msj);
$rg->setTelefono($tel);
$rg->setCorreo($email);
$rg->setDireccion($di);
$rg->registrar();
echo "ok";
}else{
  echo "no deje en blanco";  
}