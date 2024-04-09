<?php  
	/* $conexion = mysqli_connect('localhost', 'root', '12345678', 'ferreteria'); */
	$conexion = mysqli_connect('localhost', 'root', 'root', 'ferreteria');

	if (mysqli_connect_errno()) {
		echo 'Error al conectar con MySQL ' . mysqli_connect_error();
	}

	$consultaActualizarVenta = "UPDATE venta SET cliente_id = '" . $_POST['cliente'] . "' WHERE folio =  '" . $_POST['id'] . "'";
	$resultadoActualizacionVenta = mysqli_query($conexion, $consultaActualizarVenta);

	if ($resultadoActualizacionVenta != null) {
		$consultaVerificarPieza = "SELECT * FROM inventario WHERE pieza_id = '" . $_POST['pieza'] . "'";
		$resultadoConsulta = mysqli_query($conexion, $consultaVerificarPieza);
		
		$filaEncontrada = mysqli_fetch_row($resultadoConsulta);

		$consultaDevolver = "UPDATE inventario SET cantidad = cantidad + '" . $_POST['cantidad_oculta'] . "' WHERE pieza_id = '" . $_POST['pieza_oculta'] . "'";
		mysqli_query($conexion, $consultaDevolver);

		$consultaActualizarDetalles = "UPDATE detalle_venta SET pieza_id = '" . $_POST['pieza'] . "', cantidad = '" . $_POST['cantidad'] . "', precio = '" . ($filaEncontrada[4] * 1.3) . "' WHERE folio = '" . $_POST['id'] . "'";
		$resultadoActualizacionDetalles = mysqli_query($conexion, $consultaActualizarDetalles);

		if ($resultadoActualizacionDetalles != null) {
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