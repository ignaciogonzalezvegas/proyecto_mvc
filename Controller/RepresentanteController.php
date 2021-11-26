<?php 
require("./Model/RepresentanteModel.php");

$productos=new RepresentanteModel ();

$MatrizRepresentantes=$representante->get_representantes();

require_once("./home.php");


?>