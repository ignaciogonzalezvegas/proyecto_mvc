<?php 
class RepresentanteModel{

    private $db;
    private $representantes;

    public function __construct(){
        require_once("conexion.php");
        $this->db = conectar::conexion();
        $this->$representantes = array();
    }

    public function get_representantes(){
        $consulta = $this->db->query("SELECT * FROM representantes");

        while ($filas = $consulta->fetch(PDO::FETCH_ASSOC));{

            $this->representantes[] = $filas;
        }        
        return $this->representantes;
    }
}
