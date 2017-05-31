<?php
require_once 'usuarioss.php';

$res = usuarioss::ver();

$r = array();
foreach ($res as $row){
    $nombre = $row['nombre'];
    $clave = $row['clave'];
   $r[] = array('nombre'=>$nombre,'clave'=>$clave);
}
$json = json_encode($r);
echo $json;