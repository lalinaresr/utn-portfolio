<!DOCTYPE html>
<html lang="">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Apoyos Económicos</title>
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.9.2/sweetalert2.min.css">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu">
      <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
      <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
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
               <a class="navbar-brand" href="#">Estado de México</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="../../../index.html"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a></li>
               </ul>
            </div>
         </div>
      </nav>
      <div class="jumbotron">
         <div class="container">
            <div class="row">
               <div class="col-md-8">
                  <img src="assets/images/gobierno/edo.png" class="img-responsive"/>
               </div>
               <div class="col-md-4">
                  <img src="assets/images/gobierno/sedesol.png" class="img-responsive"/>
               </div>
            </div>
         </div>
      </div>
      <div class="container-fluid">
         <div class="row">
            <div class="col-sm-12 col-lg-4">
               <img class="img-circle center-block" src="assets/images/apoyos/estudiantes.png" alt="Apoyo a Estudiantes" width="140" height="140">
               <h2 class="text-center">Apoyo a Estudiantes.</h2>
               <p class="text-center">La convocatoria es para niñas, niños y jóvenes que habiten en el Estado de México los cuales  deben tener un promedio superior a 8.5 y ser menores de 18 años para poder ser elegido.</p>
               <p class="text-center">
                  <a href="#apoyo-estudiantes" class="btn btn-primary" data-toggle="modal">Llenar Solicitud <i class="fa fa-fw fa-external-link"></i></a>
               </p>
            </div>
            <div class="col-sm-12 col-lg-4">
               <img class="img-circle center-block" src="assets/images/apoyos/madres.png" alt="Apoyo a Madres Solteras" width="140" height="140">
               <h2 class="text-center">Apoyo a Madres Solteras.</h2>
               <p class="text-center">La convocatoria es para todas las madres solteras que habiten en el Estado de México las cuales deben ser solteras, y tener mínimo un hijo menor a 18 años de edad.</p>
               <p class="text-center">
                  <a href="#apoyo-madres-solteras" class="btn btn-primary" data-toggle="modal">Llenar Solicitud <i class="fa fa-fw fa-external-link"></i></a>
               </p>
            </div>
            <div class="col-sm-12 col-lg-4">
               <img class="img-circle center-block" src="assets/images/apoyos/adultos.png" alt="Apoyo a Adultos Mayores" width="140" height="140">
               <h2 class="text-center">Apoyo a Adultos Mayores.</h2>
               <p class="text-center">La convocatoria es para todos los adultos mayores hombres o mujeres, pero que habiten en el Estado de México además deben tener más de 70 años para poder ser elegido.</p>
               <p class="text-center">
                  <a href="#apoyo-adultos-mayores" class="btn btn-primary" data-toggle="modal">Llenar Solicitud <i class="fa fa-fw fa-external-link"></i></a>
               </p>
            </div>
         </div>
         <hr>
         <footer>
            <p class="text-center">&copy; Todos los Derechos Reservados del Estado de México 2018.</p>
         </footer>
      </div>

      <!-- Formulario para Apoyo a Estudiantes -->
      <div class="modal fade" id="apoyo-estudiantes" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><i class="fa fa-fw fa-times-circle"></i></button>
                  <h4 class="modal-title text-center">Llenar Solicitud Estudiantes</h4>
               </div>
               <form method="post" action="resultados.php" id="form-apoyo-estudiantes">
                  <div class="modal-body">
                     <input type="hidden" name="estudiante" value="1">
                     <div class="form-group">
                        <label>Nombre Completo: </label>
                        <input type="text" id="nombre_completo" name="nombre_completo" class="form-control" required="true" minlength="3" maxlength="50" autocomplete="off">
                     </div>
                     <div class="form-group">
                        <label>Estado: </label>
                        <select id="estado_estudiante" name="estado_estudiante" class="form-control" required="true">
                           <option disabled selected value>Seleccione su estado</option>
                           <option value="EdoMex">Estado de México</option>
                           <option value="Otro">Otro</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Calificación: </label>
                        <input type="number" id="calificacion" name="calificacion" class="form-control" required="true" min=0 step=0.01 max=10>
                     </div>
                     <div class="form-group">
                        <label>Edad: </label>
                        <select id="edad_estudiante" name="edad_estudiante" class="form-control" required="true">
                           <option disabled selected value>Seleccione su edad</option>
                           <?php for($i = 5; $i <= 130; $i++){ ?>                    
                              <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                           <?php }  ?>
                        </select>
                     </div>
                  </div>
                  <div class="modal-footer bg-primary">
                     <button type="submit" id="btn-solicitud-estudiante" class="btn btn-default"><i class="fa fa-fw fa-send"></i> Enviar</button>
                     <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>               
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- FIN Formulario para Apoyo a Estudiantes -->

      <!-- Formulario para Apoyo a Madres Solteras -->
      <div class="modal fade" id="apoyo-madres-solteras" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title text-center">Llenar Solicitud Madres Solteras</h4>
               </div>
               <form method="post" action="resultados.php" id="form-apoyo-madres-solteras">
                  <div class="modal-body">
                     <input type="hidden" name="madre" value="1">
                     <!--<div class="form-group">
                        <label>Sexo: </label>
                        <select id="sexo" name="sexo" class="form-control" required="true">
                           <option value="Mujer">Mujer</option>
                        </select>
                     </div>-->
                     <div class="form-group">
                        <label>Estado Civil: </label>
                        <select id="estado_civil" name="estado_civil" class="form-control" required="true">
                           <option disabled selected value>Seleccione su estado civil</option>
                           <option value="Soltera">Soltera</option>
                           <option value="Otro">Otro</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Estado: </label>
                        <select id="estado_madre_soltera" name="estado_madre_soltera" class="form-control" required="true">
                           <option disabled selected value>Seleccione su estado</option>
                           <option value="EdoMex">Estado de México</option>
                           <option value="Otro">Otro</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Cuenta con algún hijo menor de 18 años: </label>
                        <select id="hijo_menor_edad" name="hijo_menor_edad" class="form-control" required="true">
                           <option disabled selected value>Seleccione una opción</option>
                           <option value="Si">Si</option>
                           <option value="No">No</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Edad del Hijo: </label>
                        <select id="edad_hijo" name="edad_hijo" class="form-control" required="true">
                           <option disabled selected value>Seleccione la edad de su hijo menor de edad</option>
                           <?php for($i=1; $i<=130; $i++){ ?>                    
                           <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                           <?php }  ?>
                        </select>
                     </div>
                  </div>
                  <div class="modal-footer bg-primary">
                     <button type="submit" id="btn-solicitud-madre-soltera" class="btn btn-default"><i class="fa fa-fw fa-send"></i> Enviar</button>
                     <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>               
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- FIN Formulario para Apoyo a Madres Solteras -->
      
      <!-- Formulario para Apoyo a Adultos Mayores -->
      <div class="modal fade" id="apoyo-adultos-mayores" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
         <div class="modal-dialog" role="document">
            <div class="modal-content">
               <div class="modal-header bg-primary">
                  <button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
                  <h4 class="modal-title text-center">Llenar Solicitud Adultos Mayores</h4>
               </div>
               <form method="post" action="resultados.php" id="form-apoyo-adultos-mayores">
                  <div class="modal-body">
                     <input type="hidden" name="adulto" value="1">
                     <div class="form-group">
                        <label>Estado: </label>
                        <select id="estado_adulto_mayor" name="estado_adulto_mayor" class="form-control" required="true">
                           <option disabled selected value>Seleccione su estado</option>
                           <option value="EdoMex">Estado de México</option>
                           <option value="Otro">Otro</option>
                        </select>
                     </div>
                     <div class="form-group">
                        <label>Edad: </label>
                        <select id="edad_adulto_mayor" name="edad_adulto_mayor" class="form-control" required="true">
                           <option disabled selected value>Seleccione su edad</option>
                           <?php for($i=5; $i<=130; $i++){ ?>                    
                           <option value="<?php echo $i; ?>"><?php echo $i; ?></option>
                           <?php }  ?>
                        </select>
                     </div>
                  </div>
                  <div class="modal-footer bg-primary">
                     <button type="submit" id="btn-solicitud-adulto-mayor" class="btn btn-default"><i class="fa fa-fw fa-send"></i> Enviar</button>
                     <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>               
                  </div>
               </form>
            </div>
         </div>
      </div>
      <!-- FIN Formulario para Apoyo a Adultos Mayores -->


      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/jquery.form.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>     
      <script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.9.2/sweetalert2.min.js"></script>     
      <script type="text/javascript" src="assets/js/source.js"></script>     
   </body>
</html>