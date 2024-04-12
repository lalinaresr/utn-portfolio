<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="es">

<head>
   <meta charset="utf-8">
   <meta http-equiv="X-UA-Compatible" content="IE=edge">
   <meta name="viewport" content="width=device-width, initial-scale=1">
   <title><?= APP_NAME; ?> | Galería</title>
   <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/bootstrap.min.css">
   <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/touchTouch.css">
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
               <li><a href="<?= APP_URL; ?>gallery.php" class="current">Galería</a></li>
               <li><a href="<?= APP_URL; ?>blog.php">Noticias</a></li>
               <li><a href="<?= APP_URL; ?>contact.php">Contacto</a></li>
            </ul>
         </div>
         <script type="text/javascript">
            $("span.menu").click(function() {
               $(".head-nav ul").slideToggle(300, function() {});
            });
         </script>
         <div class="logo wow fadeIn">
            <a href="#">
               <img src="<?= LAYOUTS_PATH; ?>/images/c/site/logo.png" alt="<?= APP_NAME; ?>"></a>
         </div>
         <h3 class="wow fadeIn">Para mí, el olor del café recién hecho es uno de los mayores inventos.</h3>
         <div class="margin-top"></div>
         <div id="photos">
            <div class="thumbs">
               <a href="<?= LAYOUTS_PATH; ?>/images/c/site/photo1.jpg">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/photo1.jpg">
               </a>
            </div>
            <div class="thumbs">
               <a href="<?= LAYOUTS_PATH; ?>/images/c/site/photo2.jpg">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/photo2.jpg">
               </a>
            </div>
            <div class="thumbs">
               <a href="<?= LAYOUTS_PATH; ?>/images/c/site/coffee.gif">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/coffee.gif">
               </a>
            </div>
            <div class="thumbs">
               <a href="<?= LAYOUTS_PATH; ?>/images/c/site/photo3.jpg">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/photo3.jpg">
               </a>
            </div>
            <div class="thumbs">
               <a href="<?= LAYOUTS_PATH; ?>/images/c/site/photo4.jpg">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/photo4.jpg">
               </a>
            </div>
            <div class="thumbs">
               <a href="<?= LAYOUTS_PATH; ?>/images/c/site/photo5.jpg">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/photo5.jpg">
               </a>
            </div>
            <div class="thumbs">
               <a href="<?= LAYOUTS_PATH; ?>/images/c/site/photo6.jpg">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/photo6.jpg">
               </a>
            </div>
            <div class="thumbs">
               <a href="<?= LAYOUTS_PATH; ?>/images/c/site/photo7.jpg">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/photo7.jpg">
               </a>
            </div>
            <div class="thumbs">
               <a href="<?= LAYOUTS_PATH; ?>/images/c/site/photo8.gif">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/photo8.gif">
               </a>
            </div>
            <div class="thumbs">
               <a href="<?= LAYOUTS_PATH; ?>/images/c/site/photo9.jpg">
                  <img src="<?= LAYOUTS_PATH; ?>/images/c/site/photo9.jpg">
               </a>
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
   <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/touchTouch.jquery.js"></script>
   <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/masonry.js"></script>
   <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/c.js"></script>
   <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/wow.js"></script>
   <script type="text/javascript">
      jQuery(document).ready(function($) {
         new WOW().init();
      });
   </script>
</body>

</html>