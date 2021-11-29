<?php
class conectar {
  public static function conexion () {
    try{
        $conexion = new PDO("mysql:host=localhost;dbname=crud_php",'root', '');
        $conexion->setAttribute(PDO::ATTR_ERRMODE, PDO::ERRMODE_EXCEPTION);
        $conexion->exec("SET CHARACTER, SET UTF8");
    }catch (Exception $e){ 
        die("error" . $e->getMessage());
        echo "Línea de error" . $e->getLine();
    }
    return $conexion;
  }
}
