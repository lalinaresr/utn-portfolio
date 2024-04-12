<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
	<meta charset="utf-8">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">
	<meta name="viewport" content="width=device-width, initial-scale=1">
	<title><?= APP_NAME; ?></title>
	<link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/bootstrap.min.css">
	<link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/font-awesome.min.css">
	<link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/p.css">
	<link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/styles.css">
</head>

<body>
	<nav class="navbar navbar-default navbar-fixed-top">
		<div class="container">
			<div class="navbar-header">
				<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
					<span class="sr-only">Toggle navigation</span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
					<span class="icon-bar"></span>
				</button>
				<a class="navbar-brand" href="<?= APP_URL; ?>"><?= APP_NAME; ?></a>
			</div>
			<div id="navbar" class="collapse navbar-collapse">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="<?= SITE_URL; ?>"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a></li>
				</ul>
			</div>
		</div>
	</nav>

	<div class="container">
		<div class="row mt-20">
			<div class="col-md-12">
				<div class="panel panel-default">
					<div class="panel-body">
						<form action="comprar.php" method="post">
							<div class="form-group">
								<label for="tamano">Tamaño</label>
								<select id="tamano" name="tamano" class="form-control" required="true">
									<option disabled selected value>Seleccione el tamaño</option>
									<option value="grande">Grande $90</option>
									<option value="mediana">Mediana $70</option>
									<option value="chica">Chica $40</option>
								</select>
							</div>
							<div class="form-group">
								<label for="ingredientes">Ingredientes</label>
								<select id="ingredientes" name="ingredientes" class="form-control" required="">
									<option disabled selected value>Seleccione su especialidad</option>
									<optgroup label="Sencillas">
										<option value="S1">Hawaiana</option>
										<option value="S2">Peperoni</option>
										<option value="S3">Carnes Frias</option>
									</optgroup>
									<optgroup label="Especiales">
										<option value="E1">Mexicana</option>
										<option value="E2">Suprema</option>
										<option value="E3">Tres Quesos</option>
									</optgroup>
								</select>
							</div>
							<div class="form-group">
								<label for="cantidad">Cantidad:</label>
								<input type="text" id="cantidad" name="cantidad" class="form-control" required="" min="0" max="1000" step="1.0">
							</div>

							<button type="submit" class="btn btn-primary">Comprar</button>
						</form>
					</div>
				</div>
			</div>
		</div>
	</div>
	
	<script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/jquery.min.js"></script>
    <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/bootstrap.min.js"></script>
</body>

</html>