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
		         	<a class="navbar-brand" href="#">Inmobiliaria</a>
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
								 * Variable inmobiliaria donde se guarda el continente seleccionado por el usuario
								 * @var String
								 */
								$inmobiliaria = $_POST['inmobiliaria'];
								
								/**
								 * Variable años a pagar donde se guarda los años a pagar seleccionados por el usuario
								 * @var Integer
								 */
								$anios_pagar = $_POST['anios_pagar'];
								
								/**
								 * Variable enganche donde se guarda la enganche ingresado por el usuario
								 * @var Double
								 */
								$enganche = $_POST['enganche'];

								/**
								 * Variable sueldo donde se guarda la sueldo ingresado por el usuario
								 * @var Double
								 */
								$sueldo = $_POST['sueldo'];

								$costo = 0;
								$interes = 0;
								$extra = 0;
								$total = 0;
								$mensualidad = 0;
								$sueldoFinal = 0;


								switch ($inmobiliaria) {
								    case "America":
										$costo = $costo + 500000;
								        break;
								    case "Asia":
								        $costo = $costo + 600000;
								        break;
								    case "Europa":
								        $costo = $costo + 800000;
								        break;
									case "Oceania":
								        $costo = $costo + 1000000;
								        break;	
									default:
										// code...
										break;
								}

								switch ($anios_pagar) {
								    case 10:
										$interes = $costo * 0.015;
								        break;
								    case 20:
								        $interes = $costo * 0.032;
								        break;
									case 30:
								        $interes = $costo * 0.05;
								        break;
								    default:
								    	// code...
								    	break;
								}

								$extra = $costo * 0.10;
								$total = $costo + ($interes - $enganche);
								$mensualidad = $total / ($anios_pagar * 12);
								$sueldoFinal = $sueldo * 0.30;								

								if($enganche < $extra) {
							?>
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Lo sentimos!</strong> El enganche no es lo suficiente ....
							</div>
							<?php } else if($sueldoFinal > $mensualidad){ ?>
								<table class="table table-responsive table-bordered table-condensed" id="center-table">
								   	<tr bgcolor="#47BBA4">
								    	<th class="text-center tx-white" colspan="2">Verificar Compra</th>
								   	</tr>
								   	<tr>
								    	<td>Inmobiliaria:</td>
								      	<td><?= $inmobiliaria; ?></td>
								   	</tr>
								   	<tr>
								    	<td>Costo:</td>
								      	<td>$<?= $costo; ?></td>
								   	</tr>
								   	<tr>
								    	<td>Años a Pagar:</td>
								      	<td><?= $anios_pagar; ?></td>
								   	</tr>
								   	<tr>
								    	<td>Interés:</td>
								      	<td>$<?= $interes; ?></td>
								   	</tr>
								   	<tr>
								    	<td>Enganche Mínimo:</td>
								      	<td>$<?= $extra; ?></td>
								   	</tr>
								   	<tr>
								    	<td>Tu Enganche:</td>
								      	<td>$<?= $enganche; ?></td>
								   	</tr>
								   	<tr>
								    	<td>Total a Pagar:</td>
								      	<td>$<?= $total; ?></td>
								   	</tr>
								   	<tr>
								    	<td>Mensualidad:</td>
								      	<td>$<?= $mensualidad; ?></td>
								   	</tr>
								   	<tr>
								    	<td>Sueldo:</td>
								      	<td>$<?= $sueldo; ?></td>
								   	</tr>
								   	<tr>
								    	<td>Sueldo 30% Mensual:</td>
								      	<td>$<?= $sueldoFinal; ?></td>
								   	</tr>
								</table>
							<?php } else { ?>							
							<div class="alert alert-danger">
								<button type="button" class="close" data-dismiss="alert" aria-hidden="true">&times;</button>
								<strong>Lo sentimos!</strong> No eres apto para obtener el credito ...
							</div>
							<?php } ?>							
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