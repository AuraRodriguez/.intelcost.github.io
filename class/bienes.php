<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of bienes
 *
 * @author aura
 */
require_once './conf/conexion.php'; 
class bienes {
 
  public $conexion;
  public $id  ;  
  public $fecha_registro  ;  
  public $direccion  ;  
  public $ciudad  ;  
  public $telefomo  ;  
  public $codigo_postal  ;  
  public $tipo  ;  
  public $precio  ;  
  
  
  
  function __construct() {
        $con = new conexion();
        $this->conexion = $con->conectar();
    }
    
    
    function getBienes() {
        $sql = " SELECT c.nombre, b.* FROM bienes b";
        $sql .= " inner join ciudades c on c.id=b.fk_ciudad ";
        $result = mysqli_query($this->conexion, $sql);
        if ($result) {
           # return $result;
        $num = mysqli_num_rows($result);
         $datos='';
       for ($i = 0; $i < $num; $i++) {
        $obj = mysqli_fetch_object($result);
        $datos.='<div class="img"></div><div class="list"><span>Dirección:</span> '.$obj->direccion;
       $datos.='<br><span>Ciudad:</span> '.$obj->nombre;
       $datos.='<br><span>Telefóno:</span> '.$obj->telefono;
       $datos.='<br><span>Código postal</span> '.$obj->codigo_postal;
       $datos.='<br><span>Tipo:</span> '.$obj->tipo;
       $datos.='<br><span>Precio:</span> '.$obj->precio;
       $datos.='</div>';
        }
        return $datos;
        } else {
            echo 'Error!!!' . mysqli_error($this->conexion);
        }
        mysqli_close($this->conexion);
    }
    
}
