<?php  
	/* $conexion = mysqli_connect('localhost', 'root', '12345678', 'ferreteria'); */
	$conexion = mysqli_connect('localhost', 'root', 'root', 'ferreteria');

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