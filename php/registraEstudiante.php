<?php
require_once 'estudiante.php';

$msj = $_REQUEST['mensaje'];
$tel = $_REQUEST['telefono'];
$email = $_REQUEST['correo'];
$dir = $_REQUEST['direccion'];
 
/* 
$msj ="dfdf";
$tel ="sdrdsr";
$email = "sdsd";
$dir = "dfdf";
 
 * 
 */

if($msj != "" || $tel != "" || $email != "" || $dir != ""){

$rg = new estudiante();
$rg->setMensaje($msj);
$rg->setTelefono($tel);
$rg->setCorreo($email);
$rg->setDireccion($dir);
$rg->registrar();
echo "ok";
}else{
echo "no deje en blanco";  
}
