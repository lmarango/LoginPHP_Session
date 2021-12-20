<?php
class clsProductoAcceso {
  private $conexion;

  public function __construct(){
    $this->conexion = new clsConexion();
  }

  public function listar(){
    $sql = 'SELECT * FROM PRODUCTO';
    $consulta = $this->conexion->getConexion()->query($sql);
    $listadoProductos = array();
    $i = 0;
    while($item = $consulta->fetch_assoc()){
        $listadoProductos[$i] = $item;
        $i++;
    }
    return $listadoProductos;
  }
}
