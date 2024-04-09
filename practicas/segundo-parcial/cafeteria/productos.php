<?php session_start(); ?>
<!DOCTYPE html>
<html lang="">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Cafetería | Productos</title>
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/animate.css">
      <!--<link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu">-->
      <link rel="stylesheet" type="text/css" href="http://fonts.googleapis.com/css?family=Open+Sans:400,600,700">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Yanone+Kaffeesatz:400,700,300">
      <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
      <link rel="stylesheet" type="text/css" href="assets/css/styles.css">
   </head>
   <body>
      <div class="banner-inner">
         <div class="container">
            <div class="head-nav">
               <span class="menu"></span>
               <ul>
                  <li><a href="index.html">Inicio</a></li>
                  <li><a href="historia.html">Historia</a></li>
                  <li><a href="productos.php" class="current">Productos</a></li>
                  <li><a href="galeria.html">Galería</a></li>
                  <li><a href="noticias.html">Noticias</a></li>
                  <li><a href="contacto.html">Contacto</a></li>
               </ul>
            </div>
            <script type="text/javascript">
               $( "span.menu" ).click(function() {
                  $( ".head-nav ul" ).slideToggle(300, function() { });
               });
            </script>
            <!--<div class="logo wow fadeIn">
               <a href="#">
               <img src="assets/images/site/logo.png" alt="cafetería"></a>
               </div>
               <h3 class="wow fadeIn">Para mí, el olor del café recién hecho es uno de los mayores inventos.</h3>
               <div class="col-md-12"> 
               <img src="assets/images/site/menu.jpg" class="menu-picture1" alt="">
               </div>-->
            <section class="wow fadeIn">
               <div class="row">
                  <div class="col-lg-10 col-lg-offset-1">
                     <h4 class="wow fadeIn tx-white mb-20">Selecciona tus bebidas <span>.... <i class="fa fa-coffee"></i></span></h4>
                     <hr>
                     <form method="post" action="<?= $_SERVER['PHP_SELF']; ?>">
                        <?php  
                           $productos = array(
                              array('id' => 1, 'nombre' => 'Cafe Capuchino', 'imagen' => 'assets/images/productos/1.png', 'precio' => 50),
                              array('id' => 2, 'nombre' => 'Chocolate', 'imagen' => 'assets/images/productos/2.png', 'precio' => 25),
                              array('id' => 3, 'nombre' => 'Malteada de Fresa', 'imagen' => 'assets/images/productos/3.png', 'precio' => 30)
                           );
                           
                           for ($f = 0; $f < count($productos); $f++) {
                           ?>                        
                        <div class="col-xs-12 col-sm-12 col-md-4">
                           <div class="panel panel-default">
                              <div class="panel-heading bg-custom">
                                 <h4 class="panel-title tx-white"><?= $productos[$f]['nombre']; ?></h4>
                              </div>
                              <div class="panel-body">
                                 <label class="btn btn-warning">
                                 <img src="<?= $productos[$f]['imagen']; ?>" alt="<?= $productos[$f]['nombre']; ?>" class="img-responsive img-thumbnail img-check" style="height: 245px;">
                                 <input type="checkbox" name="bebida[]" class="hidden" value="<?= $productos[$f]['nombre']; ?>">                                    
                                 </label>                                                                  
                              </div>
                              <div class="panel-footer bg-primary">
                                 <a href="#" class="btn btn-primary">Precio: $<?= $productos[$f]['precio']; ?></a>
                              </div>
                           </div>
                           <input type="hidden" name="precio[]" value="<?= $productos[$f]['precio']; ?>">
                           <div class="form-group">
                              <select name="cantidad[]" class="form-control">
                                 <?php for ($g = 0; $g <=6 ; $g++) { ?>
                                 <option value="<?= $g; ?>"><?= $g; ?></option>
                                 <?php } ?>
                              </select>
                           </div>
                        </div>
                        <?php } ?>
                        <div class="col-xs-12 col-sm-12 col-md-4 col-md-offset-4">
                           <button type="submit" class="btn main-btn">Generar Compra</button>
                        </div>
                     </form>
                  </div>
               </div>
            </section>
            <?php
               if (isset($_POST['bebida'])) {
                  $bebida = $_POST['bebida'];
                  $precio = $_POST['precio'];
                  $cantidad = $_POST['cantidad'];
               
                  $i = 0;
                  $j = 0;
                  $acumulador = 0;
               
                  $bebidas = array();             
                  $precios = array();             
                  $cantidades = array();              
            ?>
            <section class="wow fadeIn">
               <div class="row mt-40">
                  <div class="col-lg-10 col-lg-offset-1">
                     <div class="panel panel-primary">
                        <div class="panel-body">
                           <table class="table table-responsive table-bordered table-condensed">
                              <tr bgcolor="#ae895c">
                                 <th class="text-center tx-white" colspan="4">Detalle Venta</th>
                              </tr>
                              <tr>
                                 <td>Producto</td>
                                 <td>Precio</td>
                                 <td>Cantidad</td>
                                 <td>Total</td>
                              </tr>
                              <?php while ($i < count($bebida)) { ?>
                              <tr>
                                 <td><?= $bebida[$i]; ?></td>
                                 <?php 
                                    $bebidas[] = $bebida[$i]; 
                                    while($cantidad[$j]==0){ 
                                       $j++; 
                                    } 
                                    $precios[] = $precio[$j]; 
                                    $cantidades[] = $cantidad[$j]; 
                                    ?>                                 
                                 <td>$<?= $precio[$j]; ?></td>
                                 <td><?= $cantidad[$j]; ?></td>
                                 <td>$<?= $precio[$j] * $cantidad[$j]; ?></td>
                              </tr>
                              <?php 
                                 $acumulador = $acumulador + ($precio[$j] * $cantidad[$j]); 
                                 
                                 $i++; 
                                 $j++; 
                                 }
                              ?>                                 
                              <tr>
                                 <td colspan="3">Total a Pagar</td>
                                 <td>$<?= $acumulador; ?></td>
                              </tr>
                           </table>
                        </div>
                     </div>
                     <?php
                        $compra = array(
                         'bebidas' => $bebidas,
                         'precios' => $precios,
                         'cantidades' => $cantidades
                        );
                        
                        $_SESSION['compra'] = $compra;
                     ?>
                     <a href="imprimirPago.php" class="btn main-btn" target="_blank">Generar Boleta</a>
                  </div>
               </div>
            </section>
            <?php } ?>
         </div>
         <div class="sociallist-inner">
            <a href="#"><i class="fa fa-facebook"></i></a>
            <a href="#" class="icon"><i class="fa fa-twitter"></i></a>
            <a href="#" class="icon"><i class="fa fa-instagram"></i></a>
            <small class="copyright">&copy; Todos los Derechos Reservados | Luis Linares 2018.</small>
         </div>
      </div>
      <script type="text/javascript" src="//code.jquery.com/jquery-1.11.1.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>     
      <script type="text/javascript" src="assets/js/opera.js"></script>     
      <script type="text/javascript" src="assets/js/wow.js"></script>     
      <script type="text/javascript">
         jQuery(document).ready(function($) {
            new WOW().init();
         });
      </script>
   </body>
</html>