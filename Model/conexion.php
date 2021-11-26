<?php

class conectar {

  public static function conexion () {
    try{

        $conexion= new PDO('mysql:host=localhost; dbname=crup_php', 'root', '' );
        $conexion->setAttributte(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER, SET UTF8");
    }

    catch (Exception $e){ 
        die("error" . $e->getMessage());
        echo "Línea de error" . $e->getLine();
    }
      return $conexion;
  }
}






$servername = "localhost";
$username = "root";
$password = "";
$dbname = "crud_php";

// Create connection
$conn = new mysqli($servername, $username, $password, $dbname );

// Check connection
if ($conn->connect_error) {
  die("Connection failed: " . $conn->connect_error);
}
// echo "Connected successfully";
