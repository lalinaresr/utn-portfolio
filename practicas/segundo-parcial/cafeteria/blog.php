<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= APP_NAME; ?> | Blog</title>
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
                  <li><a href="<?= APP_URL; ?>blog.php" class="current">Noticias</a></li>
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
               <img src="<?= LAYOUTS_PATH; ?>/images/c/site/logo.png" alt="<?= APP_NAME; ?>"></a>
            </div>
            <h3 class="wow fadeIn">Para mí, el olor del café recién hecho es uno de los mayores inventos.</h3>
            <!--news-->
            <div class="news margin-top">
               <div class="new-grids">
                  <div class="col-md-6 new-grid">
                     <a href="#" class="mask">
                     <img src="<?= LAYOUTS_PATH; ?>/images/c/site/news1.jpg" class="zoom-img"></a>
                  </div>
                  <div class="col-md-6 new-grid1">
                     <h4>15.03.2018 .... <i class="fa fa-coffee"></i>   </h4>
                     <h5>News 1</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit.
                     </p>
                  </div>
                  <div class="col-md-6 new-grid1">
                     <h4>09.09.2017 .... <i class="fa fa-coffee"></i> </h4>
                     <h5>News 2</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit.
                     </p>
                  </div>
                  <div class="col-md-6 new-grid">
                     <a href="#" class="mask">
                     <img src="<?= LAYOUTS_PATH; ?>/images/c/site/news2.jpg" class="zoom-img"></a>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6 new-grid">
                     <a href="#" class="mask">
                     <img src="<?= LAYOUTS_PATH; ?>/images/c/site/news3.jpg" class="zoom-img"></a>
                  </div>
                  <div class="col-md-6 new-grid1">
                     <h4>25.07.2017 .... <i class="fa fa-coffee"></i> </h4>
                     <h5>News 3</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit.
                     </p>
                  </div>
                  <div class="col-md-6 new-grid1">
                     <h4>01.05.2017 .... <i class="fa fa-coffee"></i> </h4>
                     <h5>News 4</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit.
                     </p>
                  </div>
                  <div class="col-md-6 new-grid">
                     <a href="#" class="mask">
                     <img src="<?= LAYOUTS_PATH; ?>/images/c/site/news4.jpg" class="zoom-img"></a>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6 new-grid">
                     <a href="#" class="mask">
                     <img src="<?= LAYOUTS_PATH; ?>/images/c/site/news5.jpg" class="zoom-img"></a>
                  </div>
                  <div class="col-md-6 new-grid1">
                     <h4>5.07.2016 .... <i class="fa fa-coffee"></i> </h4>
                     <h5>News 5</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit.
                     </p>
                  </div>
                  <div class="clearfix"></div>
                  <div class="col-md-6 new-grid1">
                     <h4>11.10.2016 .... <i class="fa fa-coffee"></i> </h4>
                     <h5>News 6</h5>
                     <p>Lorem ipsum dolor sit amet, consectetur adipisicing elit, sed do eiusmod
                        tempor incididunt ut labore et dolore magna aliqua. Ut enim ad minim veniam,
                        quis nostrud exercitation ullamco laboris nisi ut aliquip ex ea commodo
                        consequat. Duis aute irure dolor in reprehenderit.
                     </p>
                  </div>
                  <div class="col-md-6 new-grid">
                     <a href="#" class="mask">
                     <img src="<?= LAYOUTS_PATH; ?>/images/c/site/news6.jpg" class="zoom-img"></a>
                  </div>
                  <div class="clearfix"></div>
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
      <script type="text/javascript" src="<?= LAYOUTS_PATH; ?>/js/libs/wow.js"></script>
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            new WOW().init();
         });
      </script>
   </body>
</html>