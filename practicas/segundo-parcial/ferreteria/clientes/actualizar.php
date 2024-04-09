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
		$consultaActualizarCliente = "UPDATE clientes SET nombres = '" . $_POST['nombres'] . "',  telefono = '" . $_POST['telefono'] . "',  correo = '" . $_POST['correo_electronico'] . "' WHERE cliente_id = '" . $_POST['id'] . "'  ";
		$resultadoActualizacionCliente = mysqli_query($conexion, $consultaActualizarCliente);

		if ($resultadoActualizacionCliente != null) {
			echo 'Exito';
		} else {
			echo 'Fallido';
		}
	}	
?>