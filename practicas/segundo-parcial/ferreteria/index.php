<!DOCTYPE html>
<html lang="">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ferretería</title>
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"></link>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.bootstrap.min.css"></link>
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
      <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.9.2/sweetalert2.min.css">-->
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu">
      <link rel="stylesheet" type="text/css" href="assets/css/carousel.css">
      <link rel="stylesheet" type="text/css" href="assets/css/carousel_images.css">
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
               <a class="navbar-brand" href="#">Ferretería</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li><a href="clientes.php"><i class="fa fa-fw fa-user"></i> Clientes</a></li>
                  <li><a href="piezas.php"><i class="fa fa-fw fa-wrench"></i> Piezas</a></li>
                  <!--<li><a href="inventario.php"><i class="fa fa-fw fa-database"></i> Inventario</a></li>-->
                  <li><a href="ventas.php"><i class="fa fa-fw fa-credit-card"></i> Ventas</a></li>
               </ul>
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="../../../index.html"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a></li>
               </ul>
            </div>
         </div>
      </nav>
      
      <div id="carousel-example-generic" class="carousel slide" data-ride="carousel">
         <ol class="carousel-indicators">
            <li data-target="#carousel-example-generic" data-slide-to="0" class="active"></li>
            <li data-target="#carousel-example-generic" data-slide-to="1"></li>
            <li data-target="#carousel-example-generic" data-slide-to="2"></li>
         </ol>
         <div class="carousel-inner" role="listbox">
            <div class="item active">
               <div class="fill-image firstImage"></div>
               <div class="carousel-caption">
                  <h2><br>Catálogo de clientes</h2>
                  <p>Administre su Catálogo de clientes.</p>
                  <a href="clientes.php" class="btn btn-custom"><i class="fa fa-fw fa-arrow-right"></i></a>
               </div>               
            </div>
            <div class="item">
               <div class="fill-image secondImage"></div>
               <div class="carousel-caption">
                  <h2><br>Catálogo de piezas</h2>
                  <p>Administre su Catálogo de piezas.</p>
                  <a href="piezas.php" class="btn btn-custom"><i class="fa fa-fw fa-arrow-right"></i></a>
               </div>               
            </div> 
            <!--<div class="item">
               <div class="fill-image fourImage"></div>
               <div class="carousel-caption">
                  <h2><br>Catálogo de inventario</h2>
                  <p>Administre su Catálogo de inventario.</p>
                  <a href="inventario.php" class="btn btn-custom"><i class="fa fa-fw fa-arrow-right"></i></a>
               </div>               
            </div>-->
            <div class="item">
               <div class="fill-image thirdImage"></div>
               <div class="carousel-caption">
                  <h2><br>Catálogo de ventas</h2>
                  <p>Administre su Catálogo de ventas.</p>
                  <a href="ventas.php" class="btn btn-custom"><i class="fa fa-fw fa-arrow-right"></i></a>
               </div>               
            </div>            
         </div>         
         <a class="left carousel-control" href="#carousel-example-generic" role="button" data-slide="prev">
            <span class="glyphicon glyphicon-chevron-left" aria-hidden="true"></span>
            <!--<span class="carousel-control-prev-icon" aria-hidden="true"></span> -->
            <span class="sr-only">Previous</span>
         </a>
         <a class="right carousel-control" href="#carousel-example-generic" role="button" data-slide="next">
            <span class="glyphicon glyphicon-chevron-right" aria-hidden="true"></span>
            <!--<span class="carousel-control-next-icon" aria-hidden="true"></span> -->
            <span class="sr-only">Next</span>
         </a>
      </div>
      
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>     
   </body>
</html>