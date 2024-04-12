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
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/ac.css">
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
            <div class="col-xs-12 col-md-6 col-md-offset-3">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <h4 class="text-center"><?= APP_NAME; ?></h4><hr>
                     <form action="show.php" method="post" class="form-horizontal">
                        <div class="form-group">
                           <label for="modelo" class="col-sm-3 control-label">Modelo:</label>
                           <div class="col-sm-8">
                              <label class="radio-inline"><input type="radio" name="modelo" value="M2" required>M2</label>
                              <label class="radio-inline"><input type="radio" name="modelo" value="M3">M3</label>
                              <label class="radio-inline"><input type="radio" name="modelo" value="M5">M5</label>
                              <label class="radio-inline"><input type="radio" name="modelo" value="M6">M6</label>
                              <label class="radio-inline"><input type="radio" name="modelo" value="CXR">CX-R</label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="color" class="col-sm-3 control-label">Color:</label>
                           <div class="col-sm-8">
                              <select id="color" name="color" class="form-control" required="true">
                                 <option disabled selected value>Seleccione el color</option>
                                 <option value="Rojo">Rojo</option>
                                 <option value="Verde">Verde</option>
                                 <option value="Azul">Azul</option>
                                 <option value="Negro">Negro</option>
                                 <option value="Blanco">Blanco</option>
                                 <option value="Gris">Gris</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="version" class="col-sm-3 control-label">Versión:</label>
                           <div class="col-sm-8">
                              <select id="version" name="version" class="form-control" required="true">
                                 <option disabled selected value>Seleccione la versión</option>
                                 <option value="básico">Básico</option>
                                 <option value="equipado">Equipado</option>
                                 <option value="lujo">Lujo</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="plan_pago" class="col-sm-3 control-label">Plan de Pago:</label>
                           <div class="col-sm-8">
                              <select id="plan_pago" name="plan_pago" class="form-control" required="true">
                                 <option disabled selected value>Seleccione el plan de pago</option>
                                 <option value="0">Contado</option>
                                 <option value="12">12 Meses</option>
                                 <option value="24">24 Meses</option>
                                 <option value="36">36 Meses</option>
                                 <option value="48">48 Meses</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-6 col-md-offset-3">
                              <button type="submit" class="btn btn-custom"><i class="fa fa-fw fa-send"></i> Enviar</button>
                           </div>
                        </div>
                     </form>
                  </div>
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