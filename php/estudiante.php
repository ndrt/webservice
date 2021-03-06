<?php
require_once 'conexion.php';
class estudiante {
 private $mensaje;
  private $telefono;
  private $correo;
  private $direccion;
  function __construct($mensaje=null, $telefono=null, $correo=null, $direccion=null) {
      $this->mensaje = $mensaje;
      $this->telefono = $telefono;
      $this->correo = $correo;
      $this->direccion = $direccion;
  }
  function getMensaje() {
      return $this->mensaje;
  }

  function getTelefono() {
      return $this->telefono;
  }

  function getCorreo() {
      return $this->correo;
  }

  function getDireccion() {
      return $this->direccion;
  }
  function setMensaje($mensaje) {
      $this->mensaje = $mensaje;
  }

  function setTelefono($telefono) {
      $this->telefono = $telefono;
  }

  function setCorreo($correo) {
      $this->correo = $correo;
  }

  function setDireccion($direccion) {
      $this->direccion = $direccion;
  }
public  static function  ver(){
      $con = new conexion();
       $consulta = $con->prepare('SELECT * FROM estudiante');
       $consulta->execute();
       $registro = $consulta->fetchAll();
       $con = null;
       return $registro;
}

public function registrar(){
     $con = new conexion();
     $consulta = $con->prepare('INSERT INTO estudiante(mensaje,telefono,correo,direccion)VALUES( :mensaje , :telefono , :correo , :direccion )');
    $consulta->bindParam(':mensaje', $this->mensaje);
    $consulta->bindParam(':telefono',$this->telefono);
    $consulta->bindParam(':correo',$this->correo);
    $consulta->bindParam(':direccion',$this->direccion);
    $consulta->execute();
}


}
