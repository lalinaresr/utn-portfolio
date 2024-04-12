<?php  	
	require_once 'config.php';

	date_default_timezone_set('America/Mexico_City');

	$conexion = mysqli_connect(CONNECTION['HOSTNAME'], CONNECTION['USERNAME'], CONNECTION['PASSWORD'], CONNECTION['DATABASE'], CONNECTION['PORT'], CONNECTION['SOCKET']);

	if (mysqli_connect_errno()) {
		echo 'Error al conectar con MySQL ' . mysqli_connect_error();
	}
?>