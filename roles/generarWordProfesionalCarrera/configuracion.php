
<?php

$host = "localhost";
$usuario = "root";
$contrasena = "";
$nombre_bd = "fomope2";

$conexion = mysqli_connect($host, $usuario, $contrasena, $nombre_bd);
$conexion->set_charset("utf8");


if(!$conexion){

	die("La conexion fallo: " . mysqli_connect_error());
	
}

?>
