<?php
//require_once 'conexion.php';
require_once 'usuarioss.php';
/*$respuesta = $_REQUEST['nombre'];
$sql = "SELECT * FROM usuario WHERE nombre ='$respuesta'";
$result =  mysql_query($sql,$con)or die("a ocurrido un error");
$registro =array();
while($row = mysql_fetch_array($result)){
    $nombre = $row['nombre'];
    $clave = $row['clave'];
    $registro[] = array('nombre'=>$nombre,'clave'=>$clave);
}
$string_json = json_encode($registro);
echo $string_json;
 * 
 */
//---------------funcion ver usuarios-----------------
/*
$res = usuarioss::ver();

$r = array();
foreach ($res as $row){
    $nombre = $row['nombre'];
    $clave = $row['clave'];
   $r[] = array('nombre'=>$nombre,'clave'=>$clave);
}
$json = json_encode($r);
echo $json;
//$res->setUsuario('luis');
 */
//---------------funcion registra-----------
/*
$rg = new usuarioss();
$rg->setClave('oracle');
$rg->setUsuario('juan');
$rg->registrar();
 * 
 */
//---------------seleccionar usuario

$valor = $_REQUEST['nombre'];
$ver = usuarioss::seleccionar($valor);
$vector = array();
foreach ($ver as $row){
    $nombre= $row['nombre'];
    $clave= $row['clave'];
    $vector[] = array('nombre'=>$nombre,'clave'=>$clave);
}
$json = json_encode($vector);
echo $json;
 
