<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pizzería | Verificar Compra</title>
		<link rel="stylesheet" type="text/css" href="assets/css/materialize.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/icon?family=Material+Icons">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	</head>
	<body class="blue-grey lighten-5">
		<nav>
		    <div class="nav-wrapper light-green lighten-2">
		    	<a href="produccion.php" class="brand-logo">Pizzería</a>
		      	<a href="#" data-activates="mobile-demo" class="button-collapse"><i class="material-icons">menu</i></a>
		      	<ul class="right hide-on-med-and-down">
		        	<li><a href="../../../index.php"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a></li>
		      	</ul>
		      	<ul class="side-nav" id="mobile-demo">
		        	<li><a href="../../../index.php">Regresar</a></li>
		      	</ul>
		    </div>
		</nav>

		<div class="container">
			<div class="row mt-20">				
				<div class="col m12 s12">
					<div class="card-panel">
						<?php  
							$tamano = $_POST['tamano'];
							$ingrediente = $_POST['ingredientes'];
							$cantidad = $_POST['cantidad'];

							/**
							 * [obtenerPrecioTamano description]
							 * @param  [type] $tamano [description]
							 * @return [type]         [description]
							 */
							function obtenerPrecioTamano($tamano){
								$precioTamano = 0;
								switch ($tamano) {
									case 'grande':
										$precioTamano = 90;
										break;
									case 'mediana':
										$precioTamano = 70;
										break;
									case 'chica':
										$precioTamano = 40;
										break;									
									default:
								}
								return $precioTamano;
							}

							/**
							 * [obtenerIngredienteSeleccionado description]
							 * @param  [type] $ingrediente [description]
							 * @return [type]              [description]
							 */
							function obtenerIngredienteSeleccionado($ingrediente){
								$ingredienteSeleccionado = "";
								$ingredientes = array(
									array('clave' => 'S1', 'ingrediente' => 'Hawaiana'),
									array('clave' => 'S2', 'ingrediente' => 'Peperoni'),
									array('clave' => 'S3', 'ingrediente' => 'Carnes Frias'),
									array('clave' => 'E1', 'ingrediente' => 'Mexicana'),
									array('clave' => 'E2', 'ingrediente' => 'Suprema'),
									array('clave' => 'E3', 'ingrediente' => 'Tres Quesos')
								);

								for ($i = 0; $i < count($ingredientes); $i++) {
									if (strcmp($ingredientes[$i]['clave'], $ingrediente) == 0) {
										$ingredienteSeleccionado = $ingredientes[$i]['ingrediente'];
									}
								}
								return $ingredienteSeleccionado;
							}

							/**
							 * [aumentarIngredienteEspecial description]
							 * @param  [type] $ingrediente [description]
							 * @return [type]              [description]
							 */
							function aumentarIngredienteEspecial($ingrediente){
								$aumentoEspecial = 0;
								if (strrpos($ingrediente, 'E') === false) {
									$aumentoEspecial = 0;		
								} else {
									$aumentoEspecial = 20;		
								}
								return $aumentoEspecial;
							}

							$precioFinalIngrediente = (obtenerPrecioTamano($tamano)  + aumentarIngredienteEspecial($ingrediente));
						?>
						<table class="responsive-table striped bordered">
							<thead>
								<tr>
									<th>Ingrediente</th>
									<th>Tamaño</th>
									<th>Precio</th>
									<th>Cantidad</th>
									<th>Subtotal</th>
									<th>IVA %16</th>
									<th>Total</th>
								</tr>
							</thead>
							<tbody>
								<tr>
									<td><?= obtenerIngredienteSeleccionado($ingrediente); ?></td>
									<td><?= ucwords(strtolower($tamano)); ?></td>
									<td>$<?= $precioFinalIngrediente; ?></td>
									<td><?= $cantidad; ?></td>
									<td>$<?= ($precioFinalIngrediente * $cantidad); ?></td>
									<td>$<?= (($precioFinalIngrediente * $cantidad) * 0.16); ?></td>
									<td>$<?= (($precioFinalIngrediente * $cantidad) + (($precioFinalIngrediente * $cantidad) * 0.16)); ?></td>
									<td></td>
								</tr>
							</tbody>
						</table>
					</div>					
				</div>
			</div>

			<div class="row">
				<div class="col m12 s12">
					<div class="card-panel">
						<?php  
							require_once 'conexion.php';

							$insertarVenta = "INSERT INTO venta(
								fecha
							) 
							VALUES(
								'" . date('Y-m-d H:i:s') . "'
							)";
							$resultadoInsertarVenta = mysqli_query($conexion, $insertarVenta);

							$ventaInsertada = mysqli_insert_id($conexion);
							if ($resultadoInsertarVenta != null) {
								$insertarDetalleVenta = "INSERT INTO detalle_venta(
									id_venta,
									ingredientes,
									tamano,
									precio,
									cantidad,
									total
								) 
								VALUES(
									'" . $ventaInsertada . "',
									'" . obtenerIngredienteSeleccionado($ingrediente) . "',
									'" . ucwords(strtolower($tamano)) . "',
									'" . $precioFinalIngrediente . "',
									'" . $cantidad . "',
									'" . (($precioFinalIngrediente * $cantidad) + (($precioFinalIngrediente * $cantidad) * 0.16)) . "'
								)";

								$resultadoInsertarDetalleVenta = mysqli_query($conexion, $insertarDetalleVenta);

								if ($resultadoInsertarDetalleVenta != null) {
									echo 'Su orden fue recibida con éxito!';
								}
							} else {
								echo 'Ocurrio un problema, y no se completo su orden completamente <br>';
							}
						?>
					</div>

					<a href="index.php" class="btn light-green lighten-2">Regresar</a>
				</div>
			</div>		
		</div>				

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
		<script type="text/javascript" src="assets/js/custom.js"></script>
	</body>
</html>