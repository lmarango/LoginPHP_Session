<?php

if (isset($_REQUEST['salir'])) {
  $sesion->cerrarSesion();
  require('vista/login.php');
} else if (isset($_REQUEST['info'])) {
  $datosUsuario = $sesion->datosSesion();
  require('vista/info.php');
} else {
  require('Modelo/clsProductoAcceso.php');
  $datos = new clsProductoAcceso();
  $listaProductos = $datos->listar();
  require('vista/paginaProductos.php');
}
