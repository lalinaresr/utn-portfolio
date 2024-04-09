<!DOCTYPE html>
<html lang="">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Tienda de Deportes</title>
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
               <a class="navbar-brand" href="#">Tienda de Deportes</a>
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
            <div class="col-xs-12 col-md-6 col-md-offset-3">
               <div class="panel panel-default">
                  <div class="panel-body opciones-marcas">
                     <h4 class="text-center"> Tienda de Deportes</h4><hr>
                     <form action="realizarCompra.php" method="post" class="form-horizontal">
                        <div class="form-group">
                           <label for="tipo_producto" class="col-sm-3 control-label">Producto:</label>
                           <div class="col-sm-9">
                              <label class="radio-inline"><input type="radio" name="tipo_producto" value="pants" required>Pants</label>
                              <label class="radio-inline"><input type="radio" name="tipo_producto" value="tenis">Tenis</label>
                              <label class="radio-inline"><input type="radio" name="tipo_producto" value="playera">Playera</label>
                              <label class="radio-inline"><input type="radio" name="tipo_producto" value="short">Short</label>
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label checkbox-inline"><input type="checkbox" name="casilla_puma" value="puma">Puma</label>
                           <div class="col-sm-9">
                              <select id="cantidad_puma" name="cantidad_puma" class="form-control">
                                 <option selected disabled value>Seleccione la cantidad</option>
                                 <?php for ($iPuma = 1; $iPuma <= 120 ; $iPuma++) { ?>
                                    <option value="<?= $iPuma; ?>"><?= $iPuma; ?></option>
                                 <?php } ?>
                              </select>                              
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label checkbox-inline"><input type="checkbox" name="casilla_nike" value="nike">Nike</label>
                           <div class="col-sm-9">
                              <select id="cantidad_nike" name="cantidad_nike" class="form-control">
                                 <option selected disabled value>Seleccione la cantidad</option>
                                 <?php for ($iNike = 1; $iNike <= 120 ; $iNike++) { ?>
                                    <option value="<?= $iNike; ?>"><?= $iNike; ?></option>
                                 <?php } ?>
                              </select>                              
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label checkbox-inline"><input type="checkbox" name="casilla_reebook" value="reebook">Reebook</label>
                           <div class="col-sm-9">
                              <select id="cantidad_reebook" name="cantidad_reebook" class="form-control">
                                 <option selected disabled value>Seleccione la cantidad</option>
                                 <?php for ($iReebook = 1; $iReebook <= 120 ; $iReebook++) { ?>
                                    <option value="<?= $iReebook; ?>"><?= $iReebook; ?></option>
                                 <?php } ?>
                              </select>                              
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label checkbox-inline"><input type="checkbox" name="casilla_adidas" value="adidas">Adidas</label>
                           <div class="col-sm-9">
                              <select id="cantidad_adidas" name="cantidad_adidas" class="form-control">
                                 <option selected disabled value>Seleccione la cantidad</option>
                                 <?php for ($iAdidas = 1; $iAdidas <= 120 ; $iAdidas++) { ?>
                                    <option value="<?= $iAdidas; ?>"><?= $iAdidas; ?></option>
                                 <?php } ?>
                              </select>                              
                           </div>
                        </div>
                        <div class="form-group">
                           <label class="col-sm-3 control-label">Forma de Pago:</label>
                           <div class="col-sm-9">
                              <label class="radio-inline"><input type="radio" name="forma_pago" value="efectivo" required>Efectivo</label>
                              <label class="radio-inline"><input type="radio" name="forma_pago" value="tarjeta">Tarjeta</label>                              
                           </div>
                        </div>
                        <div class="form-group pago-tarjeta">
                           <label class="col-sm-3 control-label">Tiempo a Pagar:</label>
                           <div class="col-sm-9">
                              <select id="tiempo_pagar" name="tiempo_pagar" class="form-control">
                                 <option value="3">3 Meses</option>
                                 <option value="6">6 Meses</option>
                                 <option value="9">9 Meses</option>
                              </select>                              
                           </div>
                        </div>
                        
                        <div class="form-group">
                           <div class="col-md-6 col-md-offset-3">
                              <button type="submit" class="btn btn-custom btn-checar-productos"><i class="fa fa-fw fa-send"></i> Enviar</button>
                           </div>
                        </div>
                     </form>
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
      <script type="text/javascript" src="assets/js/source.js"></script>		
   </body>
</html>