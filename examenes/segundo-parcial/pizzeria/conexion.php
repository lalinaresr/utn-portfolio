<?php  	
	date_default_timezone_set('America/Mexico_City');

	$conexion = mysqli_connect('localhost', 'root', 'root', 'pizzeria');

	if (mysqli_connect_errno()) {
		echo 'Error al conectar con MySQL ' . mysqli_connect_error();
	}
?>