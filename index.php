<?php
require('modelo/clsConexion.php');
require('modelo/clsSesion.php');

$sesion = new clsSesion();

if ($sesion->existeSesion()) {
  require('controlador/gestionProducto.php');
} else if( isset($_REQUEST['usuario']) && isset($_REQUEST['contrasenia']) ) {
  $usuario = $_REQUEST['usuario'];
  $clave = $_REQUEST['contrasenia'];
  if ($sesion->existeUsuario($usuario, $clave)) {
    require('controlador/gestionProducto.php');
  }else {
    $errorLogin = "<p>Verifique los credenciales e intente nuevamente :(</p>";
    require('vista/login.php');
  } 
} else {
  require('vista/login.php');
}
