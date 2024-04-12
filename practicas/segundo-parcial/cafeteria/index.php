<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= APP_NAME; ?> | Inicio</title>
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/c.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/styles.css">
   </head>
   <body>
      <div class="banner">
         <div class="container">
            <div class="head-nav">
               <span class="menu"></span>
               <ul>
                  <li><a href="<?= APP_URL; ?>" class="current">Inicio</a></li>
                  <li><a href="<?= APP_URL; ?>history.php">Historia</a></li>
                  <li><a href="<?= APP_URL; ?>products.php">Productos</a></li>
                  <li><a href="<?= APP_URL; ?>gallery.php">Galería</a></li>
                  <li><a href="<?= APP_URL; ?>blog.php">Noticias</a></li>
                  <li><a href="<?= APP_URL; ?>contact.php">Contacto</a></li>
               </ul>
            </div>
            <script type="text/javascript">
               $( "span.menu" ).click(function() {
                  $( ".head-nav ul" ).slideToggle(300, function() {
                  });
               });
            </script>
            <div class="logo wow fadeIn">
               <a href="#">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/logo.png" alt="<?= APP_NAME; ?>">
               </a>
            </div>
            <div class="banner-info wow fadeIn">
               <h1>¡Bienvenido a la mejor cafetería de México!</h1>
               <h2>Horario:
                  <span>Lun - Vie: 7am - 9pm.</span>
                  <span>Sab - Dom: 8am - 7pm.</span>
                  <span>Calle Leibnitz 117 Local 4, Anzures, 11590 Miguel Hidalgo, CDMX.</span>
               </h2>
               <!-- <a href="products.php" class="btn main-btn"><span class="glyphicon glyphicon-list-alt"></span> Ver Productos</a> -->
               <div class="sociallist-home">
                  <a href="#"><i class="fa fa-facebook"></i></a>
                  <a href="#" class="icon"><i class="fa fa-twitter"></i></a>
                  <a href="#" class="icon"><i class="fa fa-instagram"></i></a>
                  <small class="copyright">© Derechos Reservados | <a href="<?= SITE_URL; ?>">Luis Linares</a> 2018.</small>
               </div>
            </div>
         </div>
      </div>

      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/jquery.min.js"></script>
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/bootstrap.min.js"></script>
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/wow.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            new WOW().init();
         });
      </script>
   </body>
</html>