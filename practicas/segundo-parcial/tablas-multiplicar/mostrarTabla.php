<!DOCTYPE html>
<html lang="">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Mostrar Resultados</title>
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
               <!--<button type="button" class="navbar-toggle collapsed" data-toggle="collapse" data-target="#navbar" aria-expanded="false" aria-controls="navbar">
               <span class="sr-only">Toggle navigation</span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               <span class="icon-bar"></span>
               </button>-->
               <a class="navbar-brand" href="#">Tablas de Multiplicar</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
               <!--<ul class="nav navbar-nav navbar-right">
                  <li><a href="../../index.html"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a></li>
               </ul>-->
            </div>
         </div>
      </nav>

      <div class="container">
         <div class="row mt-20">
            <div class="col-md-12">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <?php 
                        /**
                         * Variable donde se almacena el numero que haya ingresado el usuario
                         * @var double
                         */
                        $numero = $_POST['numero'];
                     ?>
                     <table class="table table-responsive table-bordered table-condensed" id="center-table">
                        <tr bgcolor="#337ab7">
                           <th class="text-center tx-white" colspan="4">Cálculos</th>
                           <th class="text-center tx-white">Resultados</th>
                        </tr>                        
                           <?php for($i = 1; $i <= 10; $i++){ ?>
                              <tr class="<?= ($i % 2 == 0) ? "success" : "danger"; ?>" >
                                 <td><?= $i; ?></td>
                                 <td>*</td>
                                 <td><?= $numero; ?></td>
                                 <td>=</td>
                                 <td><?= ($numero * $i) ?></td>
                              </tr>
                           <?php } ?>                          
                     </table>
                  </div>
               </div>
               <a href="index.html" class="btn btn-default"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a>
            </div>
         </div>
      </div>

      <footer class="footer">
         <div class="container">
            <p class="text-muted">© Todos los Derechos Reservados | Luis Linares 2018.</p>
         </div>
      </footer>

      <script type="text/javascript" src="//code.jquery.com/jquery.js"></script>
      <script type="text/javascript" src="assets/js/bootstrap.min.js"></script>		
   </body>
</html>