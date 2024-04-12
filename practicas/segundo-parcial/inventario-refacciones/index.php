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
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/ir.css">
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
            <div class="col-md-12">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <table class="table table-responsive table-bordered table-condensed" id="center-table">
                        <tr bgcolor="#014ED8">
                           <th class="text-center tx-white" colspan="4"><?= APP_NAME; ?></th>
                        </tr>
                        <tr bgcolor="#014ED8">
                           <th class="text-center tx-white">Folio</th>
                           <th class="text-center tx-white">Nombre</th>
                           <th class="text-center tx-white">Existencia</th>
                           <th class="text-center tx-white">Reorden</th>
                        </tr>
                        <?php 
                           /**
                            * Variable donde se almacena un conjunto de registros
                            * arreglo
                            */
                           $inventario = array(
                              array('folio' => 1, 'nombre' => 'Balatas', 'existencia' => 100, 'reorden' => 40),
                              array('folio' => 2, 'nombre' => 'Bujía', 'existencia' => 50, 'reorden' => 100),
                              array('folio' => 3, 'nombre' => 'Filtros', 'existencia' => 20, 'reorden' => 30),
                              array('folio' => 4, 'nombre' => 'Aceite', 'existencia' => 50, 'reorden' => 45),
                              array('folio' => 5, 'nombre' => 'Anticongelante', 'existencia' => 50, 'reorden' => 48)
                           );
                           
                           for($i = 0; $i < count($inventario); $i++){
                           
                              $primerAmarillo = $inventario[$i]['reorden'] - 5 ;
                              $segundoAmarillo = $inventario[$i]['reorden'] + 5 ;
                              $rojo = $inventario[$i]['reorden'] - 6 ;
                              $verde = $inventario[$i]['reorden'] + 6 ;
                           
                              $colorFila = "";
                              if($verde < $inventario[$i]['existencia']) {
                                 $colorFila = "449D44";
                              } else if($rojo > $inventario[$i]['existencia']) {
                                 $colorFila = "D9534F";
                              } else if(in_array($inventario[$i]['existencia'], range($primerAmarillo, $segundoAmarillo))) {
                                 $colorFila = "F1DD2E";
                              }
                        ?>
                        <tr bgcolor="#<?= $colorFila; ?>">
                           <td><?= $inventario[$i]['folio']; ?></td>
                           <td><?= $inventario[$i]['nombre']; ?></td>
                           <td><?= $inventario[$i]['existencia']; ?></td>
                           <td><?= $inventario[$i]['reorden']; ?></td>
                        </tr>
                        <?php } ?>                          
                     </table>
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