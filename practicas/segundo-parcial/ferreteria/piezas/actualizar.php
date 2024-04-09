<?php  
	/* $conexion = mysqli_connect('localhost', 'root', '12345678', 'ferreteria'); */
	$conexion = mysqli_connect('localhost', 'root', 'root', 'ferreteria');

	if (mysqli_connect_errno()) {
		echo 'Error al conectar con MySQL ' . mysqli_connect_error();
	}

	$consultaVerificarPieza = "SELECT * FROM piezas WHERE nombre = '" . $_POST['nombre'] . "' AND descripcion = '" . $_POST['descripcion'] . "'";
	$resultadoConsultaPieza = mysqli_query($conexion, $consultaVerificarPieza);

	if (mysqli_num_rows($resultadoConsultaPieza) > 0) {
		echo 'Existente';
	} else {
		$consultaActualizarPieza = "UPDATE piezas SET nombre = '" . $_POST['nombre'] . "',  descripcion = '" . $_POST['descripcion'] . "' WHERE piezas_id = '" . $_POST['id'] . "'  ";
		$resultadoActualizacionPieza = mysqli_query($conexion, $consultaActualizarPieza);

		if ($resultadoActualizacionPieza != null) {
			$consultaActualizarInventario = "UPDATE inventario SET cantidad = '" . $_POST['cantidad'] . "',  precio = '" . $_POST['precio'] . "' WHERE pieza_id = '" . $_POST['id'] . "'  ";
			$resultadoActualizacionInventario = mysqli_query($conexion, $consultaActualizarInventario);

			if ($resultadoActualizacionInventario != null) {
				echo 'Exito';				
			} else {
				echo 'Fallido';
			}
		} else {
			echo 'Fallido';
		}
	}	
?>