<?php
//Conexion a la bd
$mysqli = new MySQLi("localhost", "root","", "sistemaforo");
//Verifica si se conecto a la bd
if ($mysqli -> connect_errno) {
	die( "Fallo la conexión a MySQL: (" . $mysqli -> mysqli_connect_errno(). ") " . $mysqli -> mysqli_connect_error());
}else{
	//echo "Conexión ok!";
}
?>