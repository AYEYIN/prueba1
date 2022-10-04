<?php
$host="localhost";
$bd="sitio";
$usuario="root";
$contraseña="";


try {
    
 $conexion=new PDO("mysql:host=$host;dbname=$bd",$usuario,$contraseña);
 if($conexion){echo "conectado.... a sistema ";}



} catch (Exception $ex) {
    
    echo $ex->getMessage();
}
?>