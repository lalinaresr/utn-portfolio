<?php  
	/* $conexion = mysqli_connect('localhost', 'root', '12345678', 'ferreteria'); */
	$conexion = mysqli_connect('localhost', 'root', 'root', 'ferreteria');

	if (mysqli_connect_errno()) {
		echo 'Error al conectar con MySQL ' . mysqli_connect_error();
	}

	$consultaEliminarPieza = "DELETE FROM piezas  WHERE piezas_id = '" . $_POST['id'] . "'  ";
	$resultadoEliminacionPieza = mysqli_query($conexion, $consultaEliminarPieza);

	if ($resultadoEliminacionPieza != null) {
		$consultaEliminarInventario = "DELETE FROM inventario  WHERE pieza_id = '" . $_POST['id'] . "'  ";
		$resultadoEliminacionInventario = mysqli_query($conexion, $consultaEliminarInventario);
		
		if ($resultadoEliminacionInventario != null) {
			echo 'Exito';
		} else {
			echo 'Fallido';			
		}
	} else {
		echo 'Fallido';
	}
?>