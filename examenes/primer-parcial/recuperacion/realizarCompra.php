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
								$tipoProducto = $_POST['tipo_producto'];
								$costoPrimerProducto = 0 ;
								$costoSegundoProducto = 0 ;
								$costoTercerProducto = 0 ;
								$cantidadPuma= ($_POST['cantidad_puma'] == null ? 0 : $_POST['cantidad_puma']);
								$cantidadNike= ($_POST['cantidad_nike'] == null ? 0 : $_POST['cantidad_nike']);
								$cantidadReebook= ($_POST['cantidad_reebook'] == null ? 0 : $_POST['cantidad_reebook']);
								$cantidadAdidas= ($_POST['cantidad_adidas'] == null ? 0 : $_POST['cantidad_adidas']);
								$primerDescuento=0;
								$segundoDescuento =0;
								$tercerDescuento=0;
								if(isset($_POST['casilla_puma'])){
										$primerProducto = "puma";
										if($tipoProducto == 'pants'){
											$costoPrimerProducto = 700 + (700 * .1) * $cantidadPuma ;
										}else if($tipoProducto == 'tenis'){
											$costoPrimerProducto = 800 + (800 * .1) * $cantidadPuma;
										}else if($tipoProducto == 'playera'){
											$costoPrimerProducto = 200 + (200 *.1) * $cantidadPuma;
										}else if($tipoProducto == 'short'){
											$costoPrimerProducto = 50 + (50 *.1) * $cantidadPuma;
										}
										$primerDescuento =$costoPrimerProducto;
								}else if(isset($_POST['casilla_nike'])){
									$primerProducto = "nike";
									if($tipoProducto == 'pants'){
											$costoPrimerProducto = 700 + (700 * .15) * $cantidadNike;
										}else if($tipoProducto == 'tenis'){
											$costoPrimerProducto = 800 + (800 *.15) * $cantidadNike;
										}else if($tipoProducto == 'playera'){
											$costoPrimerProducto = 200 + (200 *.15) * $cantidadNike;
										}else if($tipoProducto == 'short'){
											$costoPrimerProducto = 50 + (50 *.15) * $cantidadNike;
										}
										$primerDescuento =$costoPrimerProducto;
								}else if(isset($_POST['casilla_reebook'])){
									$primerProducto = "reebook";
									if($tipoProducto == 'pants'){
											$costoPrimerProducto = 700 + (700 * .2) * $cantidadReebook;
										}else if($tipoProducto == 'tenis'){
											$costoPrimerProducto = 800 + (800 *.2) * $cantidadReebook;
										}else if($tipoProducto == 'playera'){
											$costoPrimerProducto = 200 + (200 *.2) * $cantidadReebook;
										}else if($tipoProducto == 'short'){
											$costoPrimerProducto = 50 + (50 *.2) * $cantidadReebook;
										}
										$primerDescuento =$costoPrimerProducto;
								}else if(isset($_POST['casilla_adidas'])){
									$primerProducto = "adidas";
									if($tipoProducto == 'pants'){
											$costoPrimerProducto = 700 + (700 * .25) * $cantidadAdidas;
										}else if($tipoProducto == 'tenis'){
											$costoPrimerProducto = 800 + (800 *.25) * $cantidadAdidas;
										}else if($tipoProducto == 'playera'){
											$costoPrimerProducto = 200 + (200 *.25) * $cantidadAdidas;
										}else if($tipoProducto == 'short'){
											$costoPrimerProducto = 50 + (50 *.25) * $cantidadAdidas;
										}
										$primerDescuento =$costoPrimerProducto;
								}	
								if(isset($_POST['casilla_nike'])){
									$segundoProducto = "nike";
									if($tipoProducto == 'pants'){
												$costoSegundoProducto = 700 + (700 * .15) * $cantidadNike;
										}else if($tipoProducto == 'tenis'){
											$costoSegundoProducto = 800 + (800 *.15) * $cantidadNike;
										}else if($tipoProducto == 'playera'){
											$costoSegundoProducto = 200 + (200 *.15) * $cantidadNike;
										}else if($tipoProducto == 'short'){
											$costoSegundoProducto = 50 + (50 *.15) * $cantidadNike;
										}
										$segundoDescuento =$costoSegundoProducto;
								}else if(isset($_POST['casilla_reebook'])){
									$segundoProducto = "reebook";
									if($tipoProducto == 'pants'){
												$costoSegundoProducto = 700 + (700 * .2) * $cantidadReebook;
										}else if($tipoProducto == 'tenis'){
											$costoSegundoProducto = 800 + (800 *.2) * $cantidadReebook;
										}else if($tipoProducto == 'playera'){
											$costoSegundoProducto = 200 + (200 *.2) * $cantidadReebook;
										}else if($tipoProducto == 'short'){
											$costoSegundoProducto = 50 + (50 *.2) * $cantidadReebook;
										}
										$segundoDescuento =$costoSegundoProducto;
								}else if(isset($_POST['casilla_adidas'])){
									$segundoProducto = "adidas";
									if($tipoProducto == 'pants'){
												$costoSegundoProducto = 700 + (700 * .25) * $cantidadAdidas;
										}else if($tipoProducto == 'tenis'){
											$costoSegundoProducto = 800 + (800 *.25) * $cantidadAdidas;
										}else if($tipoProducto == 'playera'){
											$costoSegundoProducto = 200 + (200 *.25) * $cantidadAdidas;
										}else if($tipoProducto == 'short'){
											$costoSegundoProducto = 50 + (50 *.25) * $cantidadAdidas;
										}
										$segundoDescuento =$costoSegundoProducto;
								}
								if(isset($_POST['casilla_reebook'])){
									$tercerProducto = "reebook";
									if($tipoProducto == 'pants'){
												$costoTercerProducto = 700 + (700 * .2) * $cantidadReebook;
										}else if($tipoProducto == 'tenis'){
											$costoTercerProducto = 800 + (800 *.2) * $cantidadReebook;
										}else if($tipoProducto == 'playera'){
											$costoTercerProducto = 200 + (200 *.2) * $cantidadReebook;
										}else if($tipoProducto == 'short'){
											$costoTercerProducto = 50 + (50 *.2) * $cantidadReebook;
										}
										$tercerDescuento =$costoTercerProducto;
								}else if(isset($_POST['casilla_adidas'])){
									$tercerProducto = "adidas";
									if($tipoProducto == 'pants'){
												$costoTercerProducto = 700 + (700 * .25) * $cantidadAdidas;
										}else if($tipoProducto == 'tenis'){
											$costoTercerProducto = 800 + (800 *.25) * $cantidadAdidas;
										}else if($tipoProducto == 'playera'){
											$costoTercerProducto = 200 + (200 *.25) * $cantidadAdidas;
										}else if($tipoProducto == 'short'){
											$costoTercerProducto = 50 + (50 *.25) * $cantidadAdidas;
										}
										$tercerDescuento =$costoTercerProducto;
								}
								if($primerDescuento > $segundoDescuento && $primerDescuento > $tercerDescuento){
									$descuento = $primerDescuento;
								}else if($segundoDescuento > $primerDescuento&&$segundoDescuento > $tercerDescuento){
									$descuento = $segundoDescuento;
								}else if($tercerDescuento > $primerDescuento && $tercerDescuento > $segundoDescuento){
									$descuento = $tercerDescuento;
								}

								$pagoEfectivo=0;
								$pagoTarjeta=0;
								$totalMeses =0;
								$mensualidad = 0;
								$totalPagar =0;
								$interes =0;

								if($_POST['forma_pago'] == 'efectivo'){
									$pagoEfectivo = $costoPrimerProducto + $costoSegundoProducto + $costoTercerProducto - (($costoPrimerProducto + $costoSegundoProducto + $costoTercerProducto) * .05);	
									$totalPagar = $pagoEfectivo - $descuento;
								}else {
									if($_POST['tiempo_pagar'] == 3){
										$pagoTarjeta = $costoPrimerProducto + $costoSegundoProducto + $costoTercerProducto;	
										$totalMeses = 3;
										$interes= ($costoPrimerProducto + $costoSegundoProducto + $costoTercerProducto) * .1;
									}else if($_POST['tiempo_pagar'] == 6) {
										$pagoTarjeta = $costoPrimerProducto + $costoSegundoProducto + $costoTercerProducto;
										$totalMeses = 6;
										$interes= ($costoPrimerProducto + $costoSegundoProducto + $costoTercerProducto) * .15;		
									}else if($_POST['tiempo_pagar'] == 9) {
										$pagoTarjeta = $costoPrimerProducto + $costoSegundoProducto + $costoTercerProducto;
										$totalMeses = 9;
										$interes = ($costoPrimerProducto + $costoSegundoProducto + $costoTercerProducto) * .2;
									}
									$mensualidad = $pagoTarjeta / $totalMeses;	
									$totalPagar = ($pagoTarjeta + $interes) - $descuento;
								}
							?>

							<table class="table table-responsive table-bordered table-condensed" id="center-table">
							   	<tr bgcolor="#88BE4A">
							    	<th class="text-center tx-white" colspan="2">Verificar Compra</th>
							   	</tr>
							   	<tr>
							    	<td>Producto:</td>
							      	<td><?= ucwords(strtolower($tipoProducto)); ?></td>
							   	</tr>
							   	<tr>
							    	<td>Marca:</td>
							    	<td>Costo:</td>
							   	</tr>
							   	<tr>
							      	<td><?= (($primerProducto == null ? '' : $primerProducto) . '<br>' . ($segundoProducto == null ? '' : $segundoProducto) . '<br>' . $tercerProducto); ?></td>
							      	<td><?= ($costoPrimerProducto . '<br>' . $costoSegundoProducto . '<br>' . $costoTercerProducto); ?></td>							   		
							   	</tr>
							   	<tr>
							    	<td>Descuento:</td>
							      	<td>$<?= $descuento; ?></td>
							   	</tr>
							   	<tr>
							    	<td>Pago con Efectivo:</td>
							      	<td>$<?= $pagoEfectivo; ?></td>
							   	</tr>
							   	<tr>
							    	<td>Pago con Tarjeta:</td>
							      	<td>$<?= $pagoTarjeta; ?></td>
							   	</tr>
							   	<tr>
							    	<td>Total Meses:</td>
							      	<td><?= $totalMeses; ?></td>
							   	</tr>
							   	<tr>
							    	<td>Interés:</td>
							      	<td>$<?= $interes; ?></td>
							   	</tr>
							   	<tr>
							    	<td>Mensualidad:</td>
							      	<td>$<?= $mensualidad; ?></td>
							   	</tr>
							   	<tr>
							    	<td>Total a Pagar:</td>
							      	<td>$<?= $totalPagar; ?></td>
							   	</tr>
							</table>
		            	</div>
		            </div>
		            <a href="index.php" class="btn btn-default"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a>
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