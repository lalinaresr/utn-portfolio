<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Pizzería</title>
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
						<form action="realizarCompra.php" method="post">
							<div class="input-field">
								<select id="tamano" name="tamano" class="validate" required="true">
									<option disabled selected value>Seleccione el tamaño</option>
									<option value="grande">Grande $90</option>
									<option value="mediana">Mediana $70</option>
									<option value="chica">Chica $40</option>
								</select>
								<label for="tamano">Tamaño</label>
							</div>
							<div class="input-field mt-5">
								<select id="ingredientes" name="ingredientes" class="validate" required="">
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
								<label for="ingredientes">Ingredientes</label>
							</div>
							<div class="input-field">
					        	<input type="text" id="cantidad" name="cantidad" class="validate" required="" min="0" max="1000" step="1.0">
					          	<label for="cantidad">Cantidad:</label>
					        </div>

					        <button type="submit" class="btn light-green lighten-2">Comprar</button>
						</form>
					</div>
				</div>
			</div>		
		</div>				

		<script type="text/javascript" src="assets/js/jquery.min.js"></script>
		<script type="text/javascript" src="assets/js/materialize.min.js"></script>
		<script type="text/javascript" src="assets/js/custom.js"></script>
	</body>
</html>