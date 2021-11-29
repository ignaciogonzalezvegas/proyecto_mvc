<?php 
require_once("./Model/RepresentanteModel.php");

$representantes=new RepresentanteModel();

$MatrizRepresentantes = $representantes->get_representantes();

require_once("./Views/home.php");


?>