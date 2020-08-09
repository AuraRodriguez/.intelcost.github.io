<?php

/**
 * 
 */

include_once './conf/Config.php';
class conexion {

    private $conexion = null;
    private $user = USER;
    private $pass = PASS;
    private $service = HOST;
    private $port = PORT;
    private $database = DB;

    public  function conectar() {
        //Conexion a la BD
       $this->conexion = mysqli_connect($this->service, $this->user, $this->pass, $this->database, $this->port);
        if ($this->conexion != null) {
            return $this->conexion;
        } else {
            return null;
        }
    }

}
?>
