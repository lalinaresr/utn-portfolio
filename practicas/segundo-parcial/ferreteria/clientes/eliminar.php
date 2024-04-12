<?php  
	require_once '../config.php';

	$conexion = mysqli_connect(CONNECTION['HOSTNAME'], CONNECTION['USERNAME'], CONNECTION['PASSWORD'], CONNECTION['DATABASE'], CONNECTION['PORT'], CONNECTION['SOCKET']);

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