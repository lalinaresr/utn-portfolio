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
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/owl.carousel.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/owl.theme.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/owl.transitions.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/cv.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/styles.css">
   </head>
   <body>
      <div class="container-fluid sr-only">
         <ul id="tabsMenu" class="nav nav-tabs">
            <li><a href="#divTabPantallazo" data-toggle="tab">Pantallazo</a></li>
            <li><a href="#divTabDatosPersonales" data-toggle="tab">Datos Personales</a></li>
            <li><a href="#divTabEducacion" data-toggle="tab">Educacion</a></li>
            <li><a href="#divTabExperiencia" data-toggle="tab">Experiencia</a></li>
         </ul>
      </div>

      <div class="container">
         <div class="row">
            <div class="col-md-4">
               <div class="panel panel-default">
                  <div class="panel-body text-center">
                     <div class="pv-lg">
                        <img src="<?= LAYOUTS_PATH; ?>/images/cv/perfil/4.jpg" class="center-block img-responsive img-circle img-thumbnail thumb180" alt="Luis Antonio Linares Ramírez">
                     </div>
                     <h3 class="m0 text-bold">Luis Antonio Linares Ramírez.</h3>
                     <div class="text-center">
                        <button id="btn-datos-personales" class="btn btn-primary btn-block"><i class="fa fa-fw fa-user"></i> Información</button>
                        <button id="btn-educacion" class="btn btn-info btn-block"><i class="fa fa-fw fa-graduation-cap "></i> Educación</button>
                        <button id="btn-experiencia" class="btn btn-warning btn-block"><i class="fa fa-fw fa-institution"></i> Experiencia</button>
                        <a href="<?= SITE_URL; ?>" class="btn btn-default btn-block"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a>
                     </div>
                     <div class="mv-lg mt-10">
                        <p class="text-center">© Derechos Reservados | Luis Linares 2018.</p>
                     </div>
                  </div>
               </div>
            </div>

            <div class="col-md-8">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <div id="divTabsPrincipal" class="tab-content">
                        <div id="divTabPantallazo" class="tab-pane fade in active">
                           <h4 class="text-center"> Bienvenido</h4>
                           <hr>
                           <div class="row pv-lg">
                              <div class="col-lg-10 col-lg-offset-1">
                                 <div id="jobs" class="owl-carousel owl-theme">                                  
                                    <div class="item"><img src="<?= LAYOUTS_PATH; ?>/images/cv/trabajos/3.jpg" class="img-responsive img-rounded"></div>
                                    <div class="item"><img src="<?= LAYOUTS_PATH; ?>/images/cv/trabajos/2.jpg" class="img-responsive img-rounded"></div>
                                    <div class="item"><img src="<?= LAYOUTS_PATH; ?>/images/cv/trabajos/1.jpg" class="img-responsive img-rounded"></div>
                                 </div>
                              </div>
                           </div>
                        </div>
                        
                        <!-- Datos Personales -->
                        <div id="divTabDatosPersonales" class="tab-pane fade in">
                           <h4 class="text-center"> Datos Personales</h4>
                           <hr>
                           <form action="show.php" method="post" id="form-datos-personales" class="form-horizontal">
                              <input type="hidden" name="datosPersonales" value="1">
                              <div class="form-group">
                                 <label for="nombres" class="col-sm-3 control-label">Nombre(s):</label>
                                 <div class="col-sm-8">
                                    <input type="text" id="nombres" name="nombres" class="form-control" required="true" minlenght="5" maxlenght="20" autocomplete="off">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="fecha_nacimiento" class="col-sm-3 control-label">Fecha Nacimiento:</label>
                                 <div class="col-sm-8">
                                    <input type="date" id="fecha_nacimiento" name="fecha_nacimiento" class="form-control" required="true">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="direccion" class="col-sm-3 control-label">Dirección:</label>
                                 <div class="col-sm-8">
                                    <textarea id="direccion" name="direccion" class="form-control" required="true" minlenght="10" maxlenght="70"></textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label class="col-sm-3 control-label">Sexo:</label>
                                 <div class="col-sm-8">
                                    <label class="radio-inline"><input type="radio" name="sexo" value="F" required="true" >F</label>
                                    <label class="radio-inline"><input type="radio" name="sexo" value="M">M</label>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="telefono" class="col-sm-3 control-label">Teléfono:</label>
                                 <div class="col-sm-8">
                                    <input type="number" id="telefono" name="telefono" class="form-control" required="true" minlenght="10" maxlenght="13">
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="correo_electronico" class="col-sm-3 control-label">Correo Electrónico:</label>
                                 <div class="col-sm-8">
                                    <input type="email" id="correo_electronico" name="correo_electronico" class="form-control" required="true" minlenght="10" maxlenght="60" autocomplete="off">
                                 </div>
                              </div>                              
                              <div class="form-group">
                                 <div class="col-sm-offset-3 col-sm-10">
                                    <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-send"></i> Enviar</button>
                                    <button type="button" class="btn btn-default btn-regresar-inicio"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>
                                 </div>
                              </div>                              
                           </form>
                        </div>
                        <!-- FIN Datos Personales -->

                        <!-- Educacion -->
                        <div id="divTabEducacion" class="tab-pane fade in">
                           <h4 class="text-center"> Educación</h4>
                           <hr>
                           <form action="show.php" method="post" id="form-educacion" class="form-horizontal">
                              <input type="hidden" name="educacion" value="1">
                              <div class="form-group">
                                 <label for="bachillerato" class="col-sm-3 control-label">Bachillerato:</label>
                                 <div class="col-sm-8">
                                    <textarea id="bachillerato" name="bachillerato" class="form-control" required="true" minlenght="5" maxlenght="70"></textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="superior" class="col-sm-3 control-label">Superior:</label>
                                 <div class="col-sm-8">
                                    <textarea id="superior" name="superior" class="form-control" required="true" minlenght="5" maxlenght="70"></textarea>
                                 </div>
                              </div>
                              <div class="form-group opciones-cursos">
                                 <label class="col-sm-3 control-label">Cursos:</label>
                                 <div class="col-sm-8">
                                    <label class="checkbox-inline"><input type="checkbox" name="cursos[]" value="Java" required>Java</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="cursos[]" value="PHP" required>PHP</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="cursos[]" value="Python" required>Phyton</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="cursos[]" value="Ruby" required>Ruby</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="cursos[]" value="Otros" required>Otros</label>
                                 </div>
                              </div>   

                              <div class="form-group">
                                 <div class="col-sm-offset-3 col-sm-10">
                                    <button type="submit" class="btn btn-info btn-checar-educacion"><i class="fa fa-fw fa-send"></i> Enviar</button>
                                    <button type="button" class="btn btn-default btn-regresar-inicio"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <!-- FIN Educacion -->

                        <!-- Experiencía -->
                        <div id="divTabExperiencia" class="tab-pane fade in">
                           <h4 class="text-center"> Experiencía</h4>
                           <hr>
                           <form action="show.php" method="post" id="form-experiencia" class="form-horizontal">
                              <input type="hidden" name="experiencia" value="1">
                              <div class="form-group">
                                 <label for="primer_trabajo" class="col-sm-3 control-label">Primer Trabajo:</label>
                                 <div class="col-sm-8">
                                    <textarea id="primer_trabajo" name="primer_trabajo" class="form-control" required="true" minlenght="5" maxlenght="70"></textarea>
                                 </div>
                              </div>
                              <div class="form-group">
                                 <label for="segundo_trabajo" class="col-sm-3 control-label">Segundo Trabajo:</label>
                                 <div class="col-sm-8">
                                    <textarea id="segundo_trabajo" name="segundo_trabajo" class="form-control" required="true" minlenght="5" maxlenght="70"></textarea>
                                 </div>
                              </div>
                              <div class="form-group opciones-conocimientos">
                                 <label class="col-sm-3 control-label">Conocimientos:</label>
                                 <div class="col-sm-8">
                                    <label class="checkbox-inline"><input type="checkbox" name="conocimientos[]" value="Java" required>Java</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="conocimientos[]" value="PHP" required>PHP</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="conocimientos[]" value="Python" required>Phyton</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="conocimientos[]" value="Ruby" required>Ruby</label>
                                    <label class="checkbox-inline"><input type="checkbox" name="conocimientos[]" value="Otros" required>Otros</label>
                                 </div>
                              </div>   

                              <div class="form-group">
                                 <div class="col-sm-offset-3 col-sm-10">
                                    <button type="submit" class="btn btn-warning btn-checar-experiencia"><i class="fa fa-fw fa-send"></i> Enviar</button>
                                    <button type="button" class="btn btn-default btn-regresar-inicio"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>
                                 </div>
                              </div>
                           </form>
                        </div>
                        <!-- FIN Experiencía -->
                     </div>
                  </div>
               </div>
            </div>
         </div>
      </div>

      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/jquery.min.js"></script>
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/owl.carousel.min.js"></script>     
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/cv.js"></script>		
   </body>
</html>