<?php

$host = "localhost";
$user = "root";
$password = "";
$db = "qpromotor";


$conexion = mysqli_connect($host, $user, $password, $db);
if(!$conexion){
echo "No se realizo la conexion a la basa de datos, el error fue:".
mysqli_connect_error() ;


}

?>