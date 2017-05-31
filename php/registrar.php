<?php
require_once 'usuarioss.php';
$nombre = $_REQUEST['nombre'];
$clave = $_REQUEST['clave'];    
$con = new conexion();

if($nombre != "" || $clave != ""){

$rg = new usuarioss();


$consulta = $con->prepare("SELECT * FROM usuario WHERE nombre = :nombre ");
   $consulta->bindParam(':nombre',$nombre,PDO::PARAM_STR);
   $consulta->execute();
   if($consulta->rowCount()== 0){
$rg->setClave($clave);
$rg->setUsuario($nombre);
$rg->registrar();
echo "ok"; 
    }else{
 echo "ya existe el usuario";
    }


}else{
  echo "no deje en blanco";  
}
