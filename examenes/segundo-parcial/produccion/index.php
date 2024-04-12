<?php require_once 'config.php'; ?>
<?php $conexion = mysqli_connect(CONNECTION['HOSTNAME'], CONNECTION['USERNAME'], CONNECTION['PASSWORD'], CONNECTION['DATABASE'], CONNECTION['PORT'], CONNECTION['SOCKET']); ?>

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
                     <table class="table table-responsive table-bordered table-condensed" id="center-table">
                        <tr bgcolor="#2D5A7C">
                           <th class="text-center tx-white" colspan="10">Gestión de Plantas</th>
                        </tr>
                        <tr bgcolor="#2D5A7C">
                           <th class="text-center tx-white">ID</th>
                           <th class="text-center tx-white">Planta</th>
                           <th class="text-center tx-white">Unidades Producidas</th>
                           <th class="text-center tx-white">Unidades Defectuosas</th>
                           <th class="text-center tx-white">% Defectuosas</th>
                        </tr>
                        <?php							
							if (mysqli_connect_errno()) {
								echo 'Error al conectar con MySQL ' . mysqli_connect_error();
							}
							$consultaListarPlantas = "SELECT * FROM plantas";
							$resultadosListadoPlantas = mysqli_query($conexion, $consultaListarPlantas);
							
							$produccionMayor = 0;
							$productorMayor = "";
														
							$productorMayorDefectuosas = "";
							$produccionMayorDefectuosas = "";
							$productorMenorDefectuosas = "";
							$produccionMenorDefectuosas = 99999;
							
							$produccionMenor = 99999;
							$productorMenor = "";
							
							$porcentajeDefectuosas = 0;
							
							while($fila = mysqli_fetch_array($resultadosListadoPlantas, MYSQLI_ASSOC)){
							/* while($fila = mysqli_fetch_assoc($resultadosListadoPlantas)){ */
								
								$unidadesProducidas = $fila['unidades_producidas'];
								
								if($unidadesProducidas >= $produccionMayor) {
									$produccionMayor = $unidadesProducidas;
									$productorMayor = $fila['planta']; 
								}
								if($produccionMenor > $unidadesProducidas){
									$produccionMenor = $unidadesProducidas;
									$productorMenor = $fila['planta']; 
								}								
								
								$porcentajeDefectuosas = (($fila['unidades_defectuosas'] * 100) / $fila['unidades_producidas']);
								
								if($porcentajeDefectuosas >= $produccionMayorDefectuosas) {
									$produccionMayorDefectuosas = $porcentajeDefectuosas;
									$productorMayorDefectuosas = $fila['planta']; 
								} else if($produccionMenorDefectuosas > $porcentajeDefectuosas){
									$produccionMenorDefectuosas = $porcentajeDefectuosas;
									$productorMenorDefectuosas = $fila['planta']; 
								}
						?>
						<tr>
							<td><?= $fila['id_planta']; ?></td>
                            <td><?= $fila['planta']; ?></td>
                            <td><?= $fila['unidades_producidas']; ?></td>
                            <td><?= $fila['unidades_defectuosas']; ?></td>
							<td><?= number_format($porcentajeDefectuosas, 2); ?> %</td>
                        </tr>
                        <?php } ?>                       
                     </table>
					 <h4>La mayor producción fue de <?= $produccionMayor; ?> hecha por <?= $productorMayor; ?>.</h4>
                     <h4>La menor producción fue de <?= $produccionMenor; ?> hecha por <?= $productorMenor; ?>.</h4>
					 
					 <hr>
					 
					 <h4>La mayor producción de defectuosas fue de <?= number_format($produccionMayorDefectuosas, 2); ?> hecha por <?= $productorMayorDefectuosas; ?>.</h4>
                     <h4>La menor producción de defectuosas fue de <?= number_format($produccionMenorDefectuosas, 2);; ?> hecha por <?= $productorMenorDefectuosas; ?>.</h4>
                  </div>
				  
				  <?php
					if (mysqli_connect_errno()) {
						echo 'Error al conectar con MySQL ' . mysqli_connect_error();
					}					
					
					$insertarResultados = "INSERT INTO resultados(
						planta_mayor_produccion, 
						cantidad_mayor_produccion, 
						planta_menor_produccion,
						cantidad_menor_produccion, 
						planta_mayor_defecto, 
						cantidad_mayor_defecto, 
						planta_menor_defecto, 
						cantidad_menor_defecto 
					) 
					VALUES(
					'" . $productorMayor . "' , 
					'" . $produccionMayor . "' , 
					'" . $productorMenor . "' ,
					'" . $produccionMenor . "' , 
					'" . $productorMayorDefectuosas . "' , 
					'" . $produccionMayorDefectuosas . "' , 
					'" . $productorMenorDefectuosas . "' , 
					'" . $productorMenorDefectuosas . "'				
					)";
					$resultadoInsertarResultados = mysqli_query($conexion, $insertarResultados);
					
					$resultadosInsertados = mysqli_insert_id($conexion);
					if ($resultadoInsertarResultados != null) {
						echo 'Los Datos fueron registrados con exito <br>';
					} else {
						echo 'Ocurrió un problema, y no pudo ser insertado nada <br>';
					} 
					
					
						$consultaListarResultados = "SELECT * FROM resultados WHERE id_resultados =  '" . $resultadosInsertados  . "'";
						$resultadoListadoResultados = mysqli_query($conexion, $consultaListarResultados);

						$filaEncontrada = mysqli_fetch_row($resultadoListadoResultados);							
					?>
				
					<tr>
							<td><?= $filaEncontrada[1]; ?></td>
							<td><?= $filaEncontrada[2]; ?></td>
							<td><?= $filaEncontrada[3]; ?></td>
							<td><?= $filaEncontrada[4]; ?></td>
							<td><?= $filaEncontrada[5]; ?></td>
							<td><?= $filaEncontrada[6]; ?></td>
							<td><?= $filaEncontrada[7]; ?></td>
							<td><?= $filaEncontrada[8]; ?></td>
                        </tr>
				
				
               </div>
            </div>
         </div>
      </div>
      <footer class="footer">
         <div class="container">
            <p class="text-muted">© Derechos Reservados | Luis Linares 2018.</p>
         </div>
      </footer>
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/jquery.min.js"></script>
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/bootstrap.min.js"></script>
   </body>
</html>