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
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/i.css">
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
                           <label for="inmobiliaria" class="col-sm-3 control-label">Inmobiliaria:</label>
                           <div class="col-sm-9">
                              <label class="radio-inline"><input type="radio" name="inmobiliaria" value="America" required>América</label>
                              <label class="radio-inline"><input type="radio" name="inmobiliaria" value="Asia">Asia</label>
                              <label class="radio-inline"><input type="radio" name="inmobiliaria" value="Europa">Europa</label>
                              <label class="radio-inline"><input type="radio" name="inmobiliaria" value="Oceania">Oceanía</label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="anios_pagar" class="col-sm-3 control-label">Años a Pagar:</label>
                           <div class="col-sm-9">
                              <select id="anios_pagar" name="anios_pagar" class="form-control" required="true">
                                 <option disabled selected value>Seleccione los años a pagar</option>
                                 <option value="10">10 Años</option>                                 
                                 <option value="20">20 Años</option>                                 
                                 <option value="30">30 Años</option>                                 
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="enganche" class="col-sm-3 control-label">Enganche:</label>
                           <div class="col-sm-9">
                              <input type="number" id="enganche" name="enganche" class="form-control" required="true" min=0 step=0.01>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="sueldo" class="col-sm-3 control-label">Sueldo:</label>
                           <div class="col-sm-9">
                              <input type="number" id="sueldo" name="sueldo" class="form-control" required="true" min=0 step=0.01>
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