<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= APP_NAME; ?> | Contacto</title>
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/animate.css">
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/c.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/styles.css">
   </head>
   <body>
      <div class="banner-inner">
         <div class="container">
            <div class="head-nav">
               <span class="menu"></span>
               <ul>
                  <li><a href="<?= APP_URL; ?>">Inicio</a></li>
                  <li><a href="<?= APP_URL; ?>history.php">Historia</a></li>
                  <li><a href="<?= APP_URL; ?>products.php">Productos</a></li>
                  <li><a href="<?= APP_URL; ?>gallery.php">Galería</a></li>
                  <li><a href="<?= APP_URL; ?>blog.php">Noticias</a></li>
                  <li><a href="<?= APP_URL; ?>contact.php" class="current">Contacto</a></li>
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
               <img src="<?= LAYOUTS_PATH; ?>/images/c/site/logo.png" alt="<?= APP_NAME; ?>"></a>
            </div>
            <h3 class="wow fadeIn">Para mí, el olor del café recién hecho es uno de los mayores inventos.</h3>
            <div class="contact margin-top">
               <!--<div class="col-md-6 contact-grid">
                  <a href="#" class="mask">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/contact.jpg" class="zoom-img" alt=""></a>
               </div>-->
               <div class="col-md-12 contact-grid1">
                  <h5> Contáctanos .... <i class="fa fa-coffee"></i></h5>
                  <h5>Tel: 5560708090
                     <span>Calle Leibnitz 117 Local 4, Anzures, 11590 Miguel Hidalgo, CDMX.</span>
                  </h5>
                  <p class="text-center">
                     Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                     tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                     quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                     consequat. Duis aute irure dolor in reprehenderit in voluptate velit esse
                     cillum dolore eu fugiat nulla pariatur. Excepteur sint occaecat cupidatat non
                     proident, sunt in culpa qui officia deserunt mollit anim id est laborum.
                  </p>
                  <h5>¡Esperamos verte pronto!</h5>
                  <div id="map-canvas"></div>
               </div>
            </div>
         </div>
         <div class="sociallist-inner">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#" class="icon"><i class="fa fa-twitter"></i></a>
            <a href="#" class="icon"><i class="fa fa-instagram"></i></a>
            <small class="copyright">© Derechos Reservados | <a href="<?= SITE_URL; ?>">Luis Linares</a> 2018.</small>
         </div>
      </div>
      
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/jquery.min.js"></script>
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/bootstrap.min.js"></script>
      <script type="text/javascript" src="https://maps.googleapis.com/maps/api/js?v=3.exp"></script>
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/c_contact.js"></script>
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/wow.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            new WOW().init();
         });
      </script>
   </body>
</html>