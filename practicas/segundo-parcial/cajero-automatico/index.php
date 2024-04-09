<!DOCTYPE html>
<html lang="">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Cajero Automático</title>
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
               <a class="navbar-brand" href="#">Cajero Automático</a>
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
                        <tr bgcolor="#2D5A7C">
                           <th class="text-center tx-white" colspan="10">Transacciones</th>
                        </tr>
                        <tr bgcolor="#2D5A7C">
                           <th class="text-center tx-white">Folio</th>
                           <th class="text-center tx-white">Fecha</th>
                           <th class="text-center tx-white">Tipo Movimiento</th>
                           <th class="text-center tx-white">Cantidad</th>
                           <th class="text-center tx-white">Saldo</th>
                        </tr>
                        <?php 
                           $transacciones = array(
                              array('folio' => 1, 'fecha' => '05/02/2018', 'tipo_movimiento' => 'D', 'cantidad' => 1000),
                              array('folio' => 2, 'fecha' => '05/02/2018', 'tipo_movimiento' => 'R', 'cantidad' => 500),
                              array('folio' => 3, 'fecha' => '06/02/2018', 'tipo_movimiento' => 'D', 'cantidad' => 10000),
                              array('folio' => 4, 'fecha' => '06/02/2018', 'tipo_movimiento' => 'D', 'cantidad' => 10000),
                              array('folio' => 5, 'fecha' => '07/02/2018', 'tipo_movimiento' => 'R', 'cantidad' => 15000)
                           );
                           
                           $saldoFinal = 0;
                           $tipoMovimiento = "";
                           for($i = 0; $i < count($transacciones); $i++){
                              if(strcmp($transacciones[$i]['tipo_movimiento'], 'D') == 0) {
                           $saldoFinal = $saldoFinal + $transacciones[$i]['cantidad']; 
                           /* $saldoFinal = $transacciones[$i]['saldo'] + $transacciones[$i]['cantidad']; */
                           $tipoMovimiento = "Depósito";
                           } else if(strcmp($transacciones[$i]['tipo_movimiento'], 'R') == 0) {
                           $saldoFinal = $saldoFinal - $transacciones[$i]['cantidad'];
                           /* $saldoFinal = $transacciones[$i]['saldo'] - $transacciones[$i]['cantidad']; */
                           $tipoMovimiento = "Retiro";
                           }
                        ?>
                        <tr>
                           <td><?= $transacciones[$i]['folio']; ?></td>
                           <td><?= $transacciones[$i]['fecha']; ?></td>
                           <td><?= $tipoMovimiento; ?></td>
                           <td>$<?= $transacciones[$i]['cantidad']; ?></td>
                           <td>$<?= $saldoFinal; ?></td>
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
            <p class="text-muted">© Todos los Derechos Reservados | Luis Linares 2018.</p>
         </div>
      </footer>
      <script type="text/javascript" src="assets/js/jquery.min.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>     
   </body>
</html>