<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Verificar Compra</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu">
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	</head>
	<body>
		<nav class="navbar navbar-default navbar-fixed-top">
		   	<div class="container">
		      	<div class="navbar-header">
		        	<!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
		            	<span class="sr-only">Toggle navigation</span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            	<span class="icon-bar"></span>
		            </button>-->
		         	<a class="navbar-brand" href="#">Tienda de Deportes</a>
		      	</div>
		      	<div id="navbar" class="collapse navbar-collapse">
		        	<!--<ul class="nav navbar-nav navbar-right">
		            	<li><a href="../../index.html"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a></li>
		            </ul>-->
		      	</div>
		   	</div>
		</nav>

		<div class="container">
		   	<div class="row mt-20">
		      	<div class="col-md-12">
		         	<div class="panel panel-default">
		            	<div class="panel-body">
							<?php  
								/**
								 * Variable tipoProducto donde se guarda el tipo de producto seleccionado por el usuario
								 * @var String
								 */
								$tipoProducto = $_POST['tipo_producto'];
								
								/**
								 * Variable marca donde se guarda la marca seleccionada por el usuario
								 * @var String
								 */
								$marca = $_POST['marca'];
								
								/**
								 * Variable cantidad donde se guarda la cantidad seleccionada por el usuario
								 * @var String
								 */
								$cantidad = $_POST['cantidad'];

								/**
								 * contiene el precio segun el tipo de producto
								 * @var integer
								 */
								$precioProductoFinal = 0;

								/**
								 * Funcion donde obtengo el precio del producto segun el tipo de producto seleccionado
								 * @param  $tipoProducto seleccionado por el usuario
								 * @return $precioProductoFinal contiene el precio segun el tipo de producto
								 */
								function precioProducto($tipoProducto){
								   	switch ($tipoProducto) {
								      	case "pants":
								         	$precioProductoFinal = 700;
								        break;
								      	case "tenis":
								        	$precioProductoFinal = 800;
								        break;
								      	case "playera":
								        	$precioProductoFinal = 200;
								        break;
								      	case "short":
								        	$precioProductoFinal = 150;
								        break;                            
								      	default:
								        	$precioProductoFinal = 0;
								   	}
								   	return $precioProductoFinal;
								}

								/**
								 * contiene el porcentaje extra que se agregara dependiendo la marca
								 * @var double
								 */
								$porcentajeMarcaFinal = 0;

								/**
								 * Funcion donde obtengo el porcentaje que se agregara dependiendo la marca seleccionada
								 * @param  $marca seleccionada por el usuario
								 * @return $porcentajeMarcaFinal contiene el porcentaje extra que se agregara dependiendo la marca
								 */
								function porcentajeMarca($marca){
								  	switch ($marca) {
								    	case "puma":
								      		$porcentajeMarcaFinal = 1.1;
								      	break;
								    	case "nike":
								      		$porcentajeMarcaFinal = 1.15;
								      	break;
								    	case "reebok":
								      		$porcentajeMarcaFinal = 1.2;
								      	break;
								    	case "adidas":
								      		$porcentajeMarcaFinal = 1.25;
								      	break;                            
								    	default:
								      		$porcentajeMarcaFinal = 0;
								  	} 
								  	return $porcentajeMarcaFinal;
								}

								/**
								 * contiene la cantidad final de productos a pagar
								 * @var integer
								 */
								$cantidadFinal = 0;

								/**
								 * Funcion donde se obtiene el numero total de productos a pagar dependiendo la cantidad ingresada 
								 * @param  $cantidad ingresada por el usuario
								 * @param  $tipoProducto seleccionado por el usuario
								 * @return $cantidadFinal la cantidad final de productos a pagar
								 */
								function esParImpar($cantidad, $tipoProducto){
									if($cantidad == 1){
								    	$cantidadFinal = 1;
								  	} else {
								    	if($cantidad % 2 == 0){
								      		$cantidadFinal = $cantidad * 0.75;
								    	} else {
								      		$cantidadFinal = ($cantidad * 0.75) + 1;
								    	}
								  	}
								  	return $cantidadFinal;
								}

								/**
								 * Variable subtotal guarda el precio del producto por la cantidad ingresada por el usuario y le suma el extra del porcentaje por marca
								 * @var double
								 * ((200 * 1.1) * 9) = 1980
								 */
								$subtotal = ((precioProducto($tipoProducto) * porcentajeMarca($marca)) * $cantidad);
								
								/**
								 * Variable descuento guarda el precio del producto por la cantidad calculada y le suma el extra del porcentaje por marca
								 * @var double
								 * ((200 * 1.1) * 7.75) = 1705
								 */
								$descuento = ((precioProducto($tipoProducto) * porcentajeMarca($marca)) * esParImpar($cantidad, $tipoProducto));
							?>
							<table class="table table-responsive table-bordered table-condensed" id="center-table">
							   	<tr bgcolor="#CE9514">
							    	<th class="text-center tx-white" colspan="2">Verificar Compra</th>
							   	</tr>
							   	<tr>
							    	<td colspan="2">
							    		<img src="assets/images/marcas/<?= $marca; ?>.png" class="img-responsive center-block" width="40%" title="<?= $marca; ?>">
							    	</td>
							   	</tr>
							   	<tr>
							    	<td>Marca:</td>
							      	<td><?= ucwords(strtolower($marca)); ?></td>
							   	</tr>
							   	<tr>
							    	<td>Precio:</td>
							      	<td>$<?= precioProducto($tipoProducto); ?></td>
							   	</tr>
							   	<tr>
							    	<td>Subtotal:</td>
							      	<td>$<?= $subtotal; ?></td>
							   	</tr>
							   	<tr>
							    	<td>Descuento:</td>
							      	<td>$<?= $subtotal - $descuento; ?></td>
							   	</tr>
							   	<tr>
							    	<td>Total:</td>
							      	<td>$<?= $descuento; ?></td>
							   	</tr>
							</table>
		            	</div>
		            </div>
		            <a href="index.html" class="btn btn-default"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a>
		        </div>
		    </div>
		</div>

		<footer class="footer">
		   	<div class="container">
		    	<p class="text-muted">© Todos los Derechos Reservados | Luis Linares 2018.</p>
		   	</div>
		</footer>

		<script type="text/javascript" src="//code.jquery.com/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script> 
	</body>
</html>