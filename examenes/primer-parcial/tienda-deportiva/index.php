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
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/td.css">
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
                           <label for="tipo_producto" class="col-sm-2 control-label">Producto:</label>
                           <div class="col-sm-10">
                              <label class="radio-inline"><input type="radio" name="tipo_producto" value="pants" required>Pants $700</label>
                              <label class="radio-inline"><input type="radio" name="tipo_producto" value="tenis">Tenis $800</label>
                              <label class="radio-inline"><input type="radio" name="tipo_producto" value="playera">Playera $200</label>
                              <label class="radio-inline"><input type="radio" name="tipo_producto" value="short">Short $150</label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="marca" class="col-sm-2 control-label">Marca:</label>
                           <div class="col-sm-10">
                              <select id="marca" name="marca" class="form-control" required="true">
                                 <option disabled selected value>Seleccione marca</option>
                                 <option value="puma">Puma 10%</option>
                                 <option value="nike">Nike 15%</option>
                                 <option value="reebok">Reebok 20%</option>
                                 <option value="adidas">Adidas 25%</option>
                              </select>
                           </div>
                        </div>
                        <div class="form-group">
                           <label for="cantidad" class="col-sm-2 control-label">Cantidad:</label>
                           <div class="col-sm-10">
                              <input type="number" id="cantidad" name="cantidad" class="form-control" required="true" min=0 step=0.01>
                           </div>
                        </div>
                        <div class="form-group">
                           <div class="col-md-6 col-md-offset-2">
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