<?php

require_once 'Informales.php';

$res = Informales::ver();

$r = array();
foreach ($res as $row){
    $mensaje = $row['mensaje'];
    $telefono = $row['telefono'];
    $correo = $row['correo'];
    $direccion = $row['direccion'];
    
   $r[] = array('publicacion'=>$mensaje,'telefono'=>$telefono,'correo'=>$correo,'direccion'=>$direccion);
}
$json = json_encode($r);
echo $json;