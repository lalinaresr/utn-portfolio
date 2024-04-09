<!DOCTYPE html>
<html lang="">
	<head>
		<meta charset="utf-8">
		<meta http-equiv="X-UA-Compatible" content="IE=edge">
		<meta name="viewport" content="width=device-width, initial-scale=1">
		<title>Mostrar Datos</title>
		<link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
		<link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
		<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu">
		<link rel="stylesheet" type="text/css" href="assets/css/custom.css">
		<link rel="stylesheet" type="text/css" href="assets/css/styles.css">
	</head>
	<body>
		<div class="container">
			<div class="row">
				<div class="col-md-12">
					<div class="panel panel-default">
                  		<div class="panel-body">
							<table class="table table-responsive table-bordered">
							<?php 
								/**
								 * Verificamos que el valor del campo con name "datosPersonales" exista y no este vacio
								 * para poder entrar en este apartado y mostrar los datos que ingresamos en datos personales
								 */
								if (isset($_POST["datosPersonales"]) && 
								   !empty($_POST["datosPersonales"])) {		
									
									/**
									 * Variable donde se almacena el nombre completo de quien llene el formulario de datos personales
									 * @var String
									 */
									$nombre = $_POST['nombres'];

									/**
									 * Variable donde se almacena la fecha de nacimiento de quien llene el formulario de datos personales
									 * @var Date
									 */
									$fechaNacimiento = $_POST['fecha_nacimiento'];

									/**
									 * Variable donde se almacena la direccion de quien llene el formulario de datos personales
									 * @var String
									 */
									$direccion = $_POST['direccion'];

									/**
									 * Variable donde se almacena el sexo de quien llene el formulario de datos personales
									 * @var char
									 */
									$sexo = $_POST['sexo'];

									/**
									 * Variable donde se almacena el numero de telefono de quien llene el formulario de datos personales
									 * @var Integer
									 */
									$telefono = $_POST['telefono'];

									/**
									 * Variable donde se almacena el correo electronico de quien llene el formulario de datos personales
									 * @var [type]
									 */
									$correoElectronico = $_POST['correo_electronico'];
							?>					
							<tr>
								<th class="text-center" colspan="2">Datos Personales</th>
							</tr>
							<tr>							
								<th>Nombre</th>
								<td><?= $nombre; ?></td>
							</tr>
							<tr>
								<th>Fecha Nacimiento</th>
								<td><?= $fechaNacimiento; ?></td>
							</tr>
							<tr>	
								<th>Dirección</th>
								<td><?= $direccion; ?></td>
							</tr>
							<tr>	
								<th>Sexo</th>
								<td><?= $sexo; ?></td>
							</tr>
							<tr>	
								<th>Telefono</th>
								<td><?= $telefono; ?></td>
							</tr>
							<tr>	
								<th>Correo Electrónico</th>
								<td><?= $correoElectronico; ?></td>
							</tr>
							<?php
								/**
								 * Verificamos que el valor del campo con name "educacion" exista y no este vacio
								 * para poder entrar en este apartado y mostrar los datos que ingresamos en educacion
								 */
								} else if (isset($_POST["educacion"]) && 
								          !empty($_POST["educacion"])) {		

									/**
									 * Variable donde se almacena el bachillerato de quien llene el formulario de educacion
									 * @var String
									 */
								    $bachillerato = $_POST['bachillerato'];
							    	
							    	/**
									 * Variable donde se almacena el nivel superior de quien llene el formulario de educacion
									 * @var String
									 */
							    	$superior = $_POST['superior'];

							    	/**
									 * Variable donde se almacenan los valores de cursos de quien llene el formulario de educacion
									 * @var String[]
									 */
							    	$cursos = $_POST['cursos'];
							?>	
							<tr>
								<th class="text-center" colspan="2">Educación</th>
							</tr>
							<tr>
								<th>Bachillerato</th>
								<td><?= $bachillerato; ?></td>
							</tr>
							
							<tr>
								<th>Superior</th>
								<td><?= $superior; ?></td>
							</tr>
							
							<tr>
								<th>Cursos</th>
								<td><?php foreach($cursos as $curso){ echo $curso; ?> <br> <?php } ?></td>
							</tr>
							<?php 
								/**
								 * Verificamos que el valor del campo con name "experiencia" exista y no este vacio
								 * para poder entrar en este apartado y mostrar los datos que ingresamos en experiencia
								 */
								} else if (isset($_POST["experiencia"]) && 
								     	  !empty($_POST["experiencia"])) {	


									/**
									 * Variable donde se almacena la informacion del primer trabajo de quien llene el formulario de experiencia
									 * @var String
									 */
								    $primerTrabajo = $_POST['primer_trabajo'];
							    	
							    	/**
									 * Variable donde se almacena la informacion del segundo trabajo de quien llene el formulario de experiencia
									 * @var String
									 */
							    	$segundoTrabajo = $_POST['segundo_trabajo'];

							    	/**
									 * Variable donde se almacenan los valores de conocimientos de quien llene el formulario de experiencia
									 * @var String[]
									 */
							    	$conocimientos = $_POST['conocimientos'];
							?>	
							<tr>
								<th class="text-center" colspan="2">Experiencía</th>
							</tr>
							<tr>
								<th>Primer Trabajo</th>
								<td><?= $primerTrabajo; ?></td>
							</tr>
							
							<tr>
								<th>Segundo Trabajo</th>
								<td><?= $segundoTrabajo; ?></td>
							</tr>
							
							<tr>
								<th>Conocimientos</th>
								<td><?php foreach($conocimientos as $conocimiento){ echo $conocimiento; ?> <br> <?php } ?></td>
							</tr>
							<?php } ?>
							</table>
                  		</div>
                  	</div>
					
					<a href="index.html" class="btn btn-default"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a>
				</div>
			</div>
		</div>
		
		<script type="text/javascript" src="//code.jquery.com/jquery.js"></script>
		<script type="text/javascript" src="assets/js/bootstrap.min.js"></script>		
	</body>
</html>




