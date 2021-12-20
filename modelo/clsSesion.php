<?php
class clsSesion {
  private $conexion;

  public function __construct(){
    $this->conexion = new clsConexion();
    session_start();
  }

  public function existeUsuario($usuario, $clave) {
    $resultado = false;
    try {
      $sql = "SELECT * FROM usuarios WHERE usuario = '$usuario' AND clave = '$clave' ";
      $consulta = $this->conexion->getConexion()->query($sql);
      while ($fila = $consulta->fetch_assoc()){
        $this->usuarioLogin($fila);
        $resultado = true;
      }
    } catch( Exception $ex ) {
      echo "ERROR: ".$ex;
    }
    return $resultado;
  }

  public function usuarioLogin($usuario) {
    $_SESSION['nombre'] = $usuario['nombre'];
    $_SESSION['usuario'] = $usuario['usuario'];
    $_SESSION['clave'] = $usuario['clave'];
    $_SESSION['rol'] = $usuario['rol'];
  }

  public function datoUsuario(){
    return $_SESSION['usuario'];
  }

  public function existeSesion(){
    return isset($_SESSION['usuario']);
  }

  public function datosSesion(){
    return $_SESSION;
  }

  public function cerrarSesion(){
    session_unset();
    session_destroy();
  }
}
