<?php 
$contrasena = "admin123";
$usuario = "admin";
$nombre_bd = "CrudBd";

try {
	$bd = new PDO (
		'mysql:host=database-ejemplo.c1c88adadd1t.us-east-1.rds.amazonaws.com;
		dbname='.$nombre_bd,
		$usuario,
		$contrasena,		
		array(PDO::MYSQL_ATTR_INIT_COMMAND => "SET NAMES utf8")
	);
} catch (Exception $e) {
	echo "Problema con la conexion: ".$e->getMessage();
}
?>
