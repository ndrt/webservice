<?php


/*    
$con = mysql_connect($host,$user,$pass)or die("no se puede conectar ".mysql_error());
//echo "conexion exitosa";
mysql_select_db($db)or die("no se pudo conectar");
//echo "conexion a la base";
*/

//$host ="mysql.hostinger.mx";
//$db = "u906186728_app";   
//$host = "mysql:host=mysql.hostinger.mx;u906186728_app";
//$user ="u906186728_php";
//$pass ="pass123";
 /*
     function conectar() {
        $con = null;
         try{
        $con = new PDO("mysql:host=mysql.hostinger.mx;dbname=u906186728_app","u906186728_php","pass123");
       
        }catch(PDOException $e){
           echo "no se pudo conectar a la base de datos ".$e;
        }
       return $con;
    }
  * 
  */
class conexion extends PDO{
   public function __construct(){
       try{
       parent::__construct("mysql:host=mysql.hostinger.mx;dbname=u906186728_app","u906186728_php","pass123");
       parent::setAttribute(PDO::ATTR_ERRMODE,PDO::ERRMODE_EXCEPTION);     
   
       }catch(PDOException $e){
           echo "error en la conexion a la base de datos".$e;
       }
       }
}