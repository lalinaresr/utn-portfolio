<?php  
	require_once '../config.php';

	$conexion = mysqli_connect(CONNECTION['HOSTNAME'], CONNECTION['USERNAME'], CONNECTION['PASSWORD'], CONNECTION['DATABASE'], CONNECTION['PORT'], CONNECTION['SOCKET']);

	if (mysqli_connect_errno()) {
		echo 'Error al conectar con MySQL ' . mysqli_connect_error();
	}

	$consultaInsertarVenta = "INSERT INTO venta(fecha, cliente_id) VALUES('" . date('Y-m-d') . "' , '" . $_POST['cliente'] . "')";
	$resultadoInsercionVenta = mysqli_query($conexion, $consultaInsertarVenta);

	if ($resultadoInsercionVenta != null) {
		$ventaInsertada = mysqli_insert_id($conexion);

		$consultaVerificarPieza = "SELECT * FROM inventario WHERE pieza_id = '" . $_POST['pieza'] . "'";
		$resultadoConsulta = mysqli_query($conexion, $consultaVerificarPieza);

		$filaEncontrada = mysqli_fetch_row($resultadoConsulta);

		$consultaInsertarDetalles = "INSERT INTO detalle_venta(folio, pieza_id, cantidad, precio) VALUES('" . $ventaInsertada  . "' , '" . $_POST['pieza'] . "' , '" . $_POST['cantidad']  . "' , '" . ($filaEncontrada[4] * 1.3) . "')";
		$resultadoInsercionDetalles = mysqli_query($conexion, $consultaInsertarDetalles);

		if ($resultadoInsercionDetalles != null) {
			$consultaActualizarInventario = "UPDATE inventario SET cantidad = cantidad - '" . $_POST['cantidad'] . "' WHERE pieza_id = '" . $_POST['pieza'] . "'";
			$resultadoActualizacionInventario = mysqli_query($conexion, $consultaActualizarInventario);

			if ($resultadoActualizacionInventario != null) {
				echo 'Exito';				
			} else {
				echo 'Fallido';
			}
		} else {
			echo 'Fallido';
		}
	} else {
		echo 'Fallido';
	}		
?>