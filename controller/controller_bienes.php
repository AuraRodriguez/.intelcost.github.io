<?php

/*
 * To change this license header, choose License Headers in Project Properties.
 * To change this template file, choose Tools | Templates
 * and open the template in the editor.
 */

/**
 * Description of controller_bienes
 *
 * @author aura
 */
include_once '../class/bienes.php';
class controller_bienes {
    
    
    function __construct() {
        $this->bienesExistentes = new bienes();
    }
    
   function misBienes() {
        $result = $this->bienesExistentes->getBienes();
        $num = mysqli_num_rows($result);
        for ($i = 0; $i < $num; $i++) {
           $obj = mysqli_fetch_object($result);
        $datos= '<div class="img"></div><div class="list"><span>Dirección:</span> '.$obj->direccion;
         $datos.='<br><span>Ciudad:</span> '.$obj->nombre;
       $datos.='<br><span>Telefóno:</span> '.$obj->telefono;
        $datos.='<br><span>Código postal</span> '.$obj->codigo_Postal;
        $datos.='<br><span>Tipo:</span> '.$obj->tipo;
       $datos.='<br><span>Precio:</span> '.$obj->precio;
       $datos.='</div>';
        }
    }
    
}
