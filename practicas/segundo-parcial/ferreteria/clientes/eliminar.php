<?php  
	/* $conexion = mysqli_connect('localhost', 'root', '12345678', 'ferreteria'); */
	$conexion = mysqli_connect('localhost', 'root', 'root', 'ferreteria');

	if (mysqli_connect_errno()) {
		echo 'Error al conectar con MySQL ' . mysqli_connect_error();
	}

	$consultaEliminarCliente = "DELETE FROM clientes  WHERE cliente_id = '" . $_POST['id'] . "'  ";
	$resultadoEliminacionCliente = mysqli_query($conexion, $consultaEliminarCliente);

	if ($resultadoEliminacionCliente != null) {
		echo 'Exito';
	} else {
		echo 'Fallido';
	}
?>