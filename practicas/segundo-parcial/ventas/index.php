<!DOCTYPE html>
<html lang="">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ventas</title>
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="https://fonts.googleapis.com/css?family=Ubuntu">
      <link rel="stylesheet" type="text/css" href="assets/css/custom.css">
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
               <a class="navbar-brand" href="#">Ventas</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
               <ul class="nav navbar-nav navbar-right">
                  <li><a href="../../../index.php"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a></li>
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
                        <tr bgcolor="#D9534F">
                           <th class="text-center tx-white" colspan="10">Ventas</th>
                        </tr>
                        <tr bgcolor="#D9534F">
                           <th class="text-center tx-white">Folio</th>
                           <th class="text-center tx-white">Nombre</th>
                           <th class="text-center tx-white">Semana 1</th>
                           <th class="text-center tx-white">Semana 2</th>
                           <th class="text-center tx-white">Semana 3</th>
                           <th class="text-center tx-white">Semana 4</th>
                           <th class="text-center tx-white">Comision 2%</th>
                           <th class="text-center tx-white">Sueldo B.</th>
                           <th class="text-center tx-white">Seguro 3%</th>
                           <th class="text-center tx-white">Total</th>
                        </tr>
                        <?php 
                           $ventas = array(
                              array('folio' => 1, 'nombre' => 'Edgar', 'semana_1' => 5000, 'semana_2' => 8000, 'semana_3' => 7000, 'semana_4' => 5000, 'sueldo' => 2000),
                              array('folio' => 2, 'nombre' => 'Brenda', 'semana_1' => 7000, 'semana_2' =>3000, 'semana_3' => 8000, 'semana_4' => 2000, 'sueldo' => 2200),
                              array('folio' => 3, 'nombre' => 'Miguel', 'semana_1' => 5000, 'semana_2' => 10000, 'semana_3' => 4000, 'semana_4' => 3000, 'sueldo' => 1800),
                              array('folio' => 4, 'nombre' => 'Rosa', 'semana_1' => 3000, 'semana_2' => 2500, 'semana_3' => 5500, 'semana_4' => 9000, 'sueldo' => 2000),
                              array('folio' => 5, 'nombre' => 'Sandy', 'semana_1' => 5500, 'semana_2' => 2000, 'semana_3' => 3000, 'semana_4' => 4000, 'sueldo' => 2100)
                           );
                           
                           $totalVentasSemana = 0;
                           $totalSemanaUno = 0;
                           $totalSemanaDos = 0;
                           $totalSemanaTres = 0;
                           $totalSemanaCuatro = 0;
                           $totalComisiones = 0;
                           $totalSueldos = 0;
                           $totalSeguros = 0;
                           $totalFinal = 0;
                           $ventaMayor = 0;
                           $vendedorMayor = "";
                           $ventaMenor = 999999;
                           $vendedorMenor = "";
                           for($i = 0; $i < count($ventas); $i++){
                              $totalVentasSemana = $ventas[$i]['semana_1'] + $ventas[$i]['semana_2'] + $ventas[$i]['semana_3'] + $ventas[$i]['semana_4'];
                              $totalSemanaUno = $totalSemanaUno + $ventas[$i]['semana_1'];
                              $totalSemanaDos = $totalSemanaDos + $ventas[$i]['semana_2'];
                              $totalSemanaTres = $totalSemanaTres + $ventas[$i]['semana_3'];
                              $totalSemanaCuatro = $totalSemanaCuatro + $ventas[$i]['semana_4'];
                              $totalComisiones = $totalComisiones + ($totalVentasSemana * 0.02);
                              $totalSueldos = $totalSueldos + $ventas[$i]['sueldo'];
                              $totalSeguros = $totalSeguros + ((($totalVentasSemana * 0.02) + $ventas[$i]['sueldo']) * 0.03);
                              $totalFinal = $totalFinal + ($totalVentasSemana + ($totalVentasSemana * 0.02) + $ventas[$i]['sueldo'] +  ((($totalVentasSemana * 0.02) + $ventas[$i]['sueldo']) * 0.03)); 
                           
                              if($totalVentasSemana >= $ventaMayor) {
                                 /* $ventaMayor = $ventaMayor . $totalVentasSemana . ', ';
                                 $vendedorMayor = $vendedorMayor . $ventas[$i]['nombre'] . ' y '; */
                                 $ventaMayor = $totalVentasSemana;
                                 $vendedorMayor = $ventas[$i]['nombre']; 
                              } else if($ventaMenor > $totalVentasSemana){
                           $ventaMenor = $totalVentasSemana;
                           $vendedorMenor = $ventas[$i]['nombre']; 
                           }
                        ?>
                        <tr>
                           <td><?= $ventas[$i]['folio']; ?></td>
                           <td><?= $ventas[$i]['nombre']; ?></td>
                           <td>$<?= $ventas[$i]['semana_1']; ?></td>
                           <td>$<?= $ventas[$i]['semana_2']; ?></td>
                           <td>$<?= $ventas[$i]['semana_3']; ?></td>
                           <td>$<?= $ventas[$i]['semana_4']; ?></td>
                           <td>$<?= $totalVentasSemana * 0.02; ?></td>
                           <td>$<?= $ventas[$i]['sueldo']; ?></td>
                           <td>$<?= ((($totalVentasSemana * 0.02) + $ventas[$i]['sueldo']) * 0.03) ; ?></td>
                           <td>$<?= $totalVentasSemana + ($totalVentasSemana * 0.02) + $ventas[$i]['sueldo'] +  ((($totalVentasSemana * 0.02) + $ventas[$i]['sueldo']) * 0.03);  ?></td>
                        </tr>
                        <?php } ?>  
                        <tr>
                           <td colspan="2">Total:</td>
                           <td>$<?= $totalSemanaUno; ?></td>
                           <td>$<?= $totalSemanaDos; ?></td>
                           <td>$<?= $totalSemanaTres; ?></td>
                           <td>$<?= $totalSemanaCuatro; ?></td>
                           <td>$<?= $totalComisiones; ?></td>
                           <td>$<?= $totalSueldos; ?></td>
                           <td>$<?= $totalSeguros; ?></td>
                           <td>$<?= $totalFinal; ?></td>
                        </tr>
                     </table>
                     <h4>La mayor venta fue de $<?= /* substr( $ventaMayor , 1, -2); */ $ventaMayor; ?> hecha por <?= /* substr( $vendedorMayor , 0 , -3); */ $vendedorMayor; ?>.</h4>
                     <h4>La menor venta fue de $<?= /* substr( $ventaMenor , 1, -2); */ $ventaMenor; ?> hecha por <?= /* substr( $ventaMenor , 0 , -3); */ $vendedorMenor; ?>.</h4>
                  </div>
               </div>
               <a href="convertirPDF.php" class="btn btn-danger"><i class="fa fa-fw fa-file-pdf-o"></i> Convertir PDF</a>
            </div>
         </div>
      </div>
      <footer class="footer">
         <div class="container">
            <p class="text-muted">© Todos los Derechos Reservados | Luis Linares 2018.</p>
         </div>
      </footer>
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>     
   </body>
</html>