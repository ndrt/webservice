<?php
require_once 'conexion.php';
/*$con = conectar();
$sql = "SELECT * FROM usuario WHERE nombre = :nombre ";
$stm = $con->prepare($sql);

$resultado = $stm->execute();
$rows =$stm->fetchAll();
$res =array();
foreach ($rows as $row){
  $nombre= $row['nombre'];
   $clave=  $row['clave'];
  $res[] = array('nombre'=>$nombre,'clave'=>$clave);
}
$json = json_encode($res);
echo $json;
 * 
 */
class usuarioss{
    private $usuario;
    private $clave;
    function __construct($usuario=null, $clave=null) {
        $this->usuario = $usuario;
        $this->clave = $clave;
    }
    function getUsuario() {
        return $this->usuario;
    }

    function getClave() {
        return $this->clave;
    }

    function setUsuario($usuario) {
        $this->usuario = $usuario;
    }

    function setClave($clave) {
        $this->clave = $clave;
    }

   public static function ver(){
       $con = new conexion();
       $consulta = $con->prepare('SELECT * FROM usuario');
       $consulta->execute();
       $registro = $consulta->fetchAll();
       $con = null;
       return $registro;
   }
   public static function seleccionar($nombre){
        $con = new conexion();
       $consulta = $con->prepare('SELECT * FROM usuario WHERE nombre = :nombre');
       $consulta->bindParam(':nombre',$nombre,PDO::PARAM_STR);
       $consulta->execute();
   $registro = $consulta->fetchAll();
       $con= null;
       return $registro;
   }
public static function login($nombre,$clave){
    $con = new conexion();
    $consulta = $con->prepare("SELECT * FROM usuario WHERE nombre = :nombre AND clave = :clave");
    $consulta->bindParam(':nombre',$nombre,PDO::PARAM_STR);
    $consulta->bindParam(':clave',$clave,PDO::PARAM_STR);
    $consulta->execute();
   if($consulta->rowCount()== 1){
        echo "ok";
    }else{
       echo "no"; 
    }
}
   
   public function registrar(){
       $con = new conexion();
       $consulta = $con->prepare('INSERT INTO usuario(nombre,clave)VALUES(:nombre , :clave)');
       $consulta->bindParam(':nombre',$this->usuario);
       $consulta->bindParam(':clave',$this->clave);
       $consulta->execute();
   }
   
}