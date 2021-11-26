<?php 

class RepresentanteModel{

private $db;

private $representantes;

public function __contruc(){

    require_once ("./conexion.php");
    $this->db=conectar::conexion();
    $this->$representantes=array ();
}

public function get_representantes (){

$consulta=$this->db->query("SELECT * FROM REPRESENTANTES");

while ($filas=$consulta->fetch(PDO::FETCH _ASSOC));{

    $this->representantes[]=$filas;
}
    return $this->representantes;
}
}

?>