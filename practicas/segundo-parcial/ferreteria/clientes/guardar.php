<?php
	require_once '../config.php';

	$conexion = mysqli_connect(CONNECTION['HOSTNAME'], CONNECTION['USERNAME'], CONNECTION['PASSWORD'], CONNECTION['DATABASE'], CONNECTION['PORT'], CONNECTION['SOCKET']);

	if (mysqli_connect_errno()) {
		echo 'Error al conectar con MySQL ' . mysqli_connect_error();
	}

	$consultaVerificarCliente = "SELECT * FROM clientes WHERE telefono = '" . $_POST['telefono'] . "' AND correo = '" . $_POST['correo_electronico'] . "'";
	$resultadoConsultaCliente = mysqli_query($conexion, $consultaVerificarCliente);

	if (mysqli_num_rows($resultadoConsultaCliente) > 0) {
		echo 'Existente';
	} else {
		$consultaInsertarCliente = "INSERT INTO clientes(nombres, telefono, correo) VALUES('" . $_POST['nombres'] . "' , '" . $_POST['telefono'] . "' , '" . $_POST['correo_electronico'] . "')";
		$resultadoInsercionCliente = mysqli_query($conexion, $consultaInsertarCliente);

		if ($resultadoInsercionCliente != null) {
			echo 'Exito';
		} else {
			echo 'Fallido';
		}
	}	
?>