<?php
require_once 'usuarioss.php';

$login = new usuarioss();
$usuario = $_REQUEST['nombre'];
$clave = $_REQUEST['clave'];
//$login->setUsuario($usuario);
//$login->setClave($clave);
$login->login($usuario,$clave);

