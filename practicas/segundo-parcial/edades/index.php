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
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/e.css">
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
                     <h4 class="text-center">Usuarios</h4><hr>
                     <?php  
                        /**
                         * Variable en donde se guarda un conjunto de registros 
                         * arreglo
                         */
                        $amigos = array(
                           array('nombre' => 'Edgar', 'tel' => '12345', 'edad' => 20),
                           array('nombre' => 'Miguel', 'tel' => '12345', 'edad' => 18),
                           array('nombre' => 'Brenda', 'tel' => '12345', 'edad' => 23),
                           array('nombre' => 'Rosa', 'tel' => '12345', 'edad' => 22),
                        );

                        $sumaEdades = 0;
                        for ($i = 0; $i < count($amigos); $i++) {
                           $sumaEdades = $sumaEdades + $amigos[$i]['edad'];                        
                     ?>
                     <button class="btn btn-custom btn-block" style="cursor: default;"><?= $amigos[$i]['nombre']; ?> tiene <?= $amigos[$i]['edad']; ?> años de edad.</button>   
                     <?php } ?>
                     <hr><h5 class="text-center">La suma de las edades es: <?= $sumaEdades; ?></h5>
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