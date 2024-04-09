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
		$consultaInsertarPieza = "INSERT INTO piezas(nombre, descripcion) VALUES('" . $_POST['nombre'] . "' , '" . $_POST['descripcion'] . "')";
		$resultadoInsercionPieza = mysqli_query($conexion, $consultaInsertarPieza);

		if ($resultadoInsercionPieza != null) {
			$consultaInsertarInventario = "INSERT INTO inventario(fecha, pieza_id, cantidad, precio) VALUES('" . date('Y-m-d') . "' , '" . mysqli_insert_id($conexion) . "' , '" . $_POST['cantidad'] . "' , '" . $_POST['precio'] . "')";
			$resultadoInsercionInventario = mysqli_query($conexion, $consultaInsertarInventario);
			
			if ($resultadoInsercionPieza != null) {
				echo 'Exito';
			} else {
				echo 'Fallido';
			}
		} else {
			echo 'Fallido';
		}
	}	
?>