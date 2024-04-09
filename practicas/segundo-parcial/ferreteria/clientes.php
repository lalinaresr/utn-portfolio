<!DOCTYPE html>
<html lang="">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title>Ferretería | Clientes</title>
      <link rel="stylesheet" type="text/css" href="assets/css/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/1.10.16/css/dataTables.bootstrap.min.css"></link>
      <link rel="stylesheet" type="text/css" href="https://cdn.datatables.net/buttons/1.3.1/css/buttons.bootstrap.min.css"></link>
      <link rel="stylesheet" type="text/css" href="assets/css/font-awesome.min.css">
      <!--<link rel="stylesheet" type="text/css" href="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.9.2/sweetalert2.min.css">-->
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
               <a href="index.php" class="navbar-brand">Ferretería</a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
               <ul class="nav navbar-nav">
                  <li><a href="index.php"><i class="fa fa-fw fa-home"></i> Inicio</a></li>
                  <li class="active"><a href="clientes.php"><i class="fa fa-fw fa-user"></i> Clientes</a></li>
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
      <div class="container">
         <div class="row mt-20">
            <div class="col-xs-12 col-sm-12 col-md-12">
               <div class="panel panel-default">
                  <div class="panel-body">
                     <h4 class="text-center"> Gestión de Clientes</h4>
                     <hr>
                     <?php  
                        /* $conexion = mysqli_connect('localhost', 'root', '12345678', 'ferreteria'); */
                        $conexion = mysqli_connect('localhost', 'root', 'root', 'ferreteria');
                        
                        if (mysqli_connect_errno()) {
                        	echo 'Error al conectar con MySQL ' . mysqli_connect_error();
                        }
                        $consultaListar = "SELECT * FROM clientes";
                        $resultadosListado = mysqli_query($conexion, $consultaListar);
                     ?>
                     <div id="exportar-clientes">
                        <table class="table table-hover table-bordered" id="tabla-clientes">
                           <thead>
                              <tr>
                                 <th>ID</th>
                                 <th>Nombre</th>
                                 <th>Teléfono</th>
                                 <th>Correo Electrónico</th>
                                 <th></th>
                              </tr>
                           </thead>
                           <tbody>
                              <?php /* while($fila = mysqli_fetch_array($resultadosListado, MYSQL_ASSOC)){ */ ?>
                              <?php while($fila = mysqli_fetch_assoc($resultadosListado)){ ?>
                              <tr>
                                 <td><?= $fila['cliente_id']; ?></td>
                                 <td><?= $fila['nombres']; ?></td>
                                 <td><?= $fila['telefono']; ?></td>
                                 <td><?= $fila['correo']; ?></td>
                                 <td>
                                    <a class="btn btn-warning btn-editar" data-toggle="modal" href='#actualizar-cliente-<?= $fila['cliente_id']; ?>'><span class="glyphicon glyphicon-pencil"></span></a>
                                    <button class="btn btn-danger btn-eliminar" id="<?= $fila['cliente_id']; ?>"><span class="glyphicon glyphicon-trash"></span></button>
                                 </td>
                              </tr>
                              <!-- Formulario para actualizar datos -->
                              <div class="modal fade" id="actualizar-cliente-<?= $fila['cliente_id']; ?>">
                                 <div class="modal-dialog">
                                    <div class="modal-content">
                                       <div class="modal-header bg-custom">
                                          <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                                          <h4 class="modal-title text-center"> Actualizar Cliente</h4>
                                       </div>
                                       <form action="clientes/actualizar.php" method="post" id="form-actualizar">
                                          <div class="modal-body">
                                             <div class="form-group">
                                                <label>ID:</label>
                                                <input type="text" id="id" name="id" value="<?= $fila['cliente_id']; ?>" class="form-control" readonly="">
                                             </div>
                                             <div class="form-group">
                                                <label>Nombre:</label>
                                                <input type="text" id="nombres" name="nombres" value="<?= $fila['nombres']; ?>" class="form-control" required="true" minlength="3" maxlength="45" autocomplete="off">
                                             </div>
                                             <div class="form-group">
                                                <label>Teléfono:</label>
                                                <input type="number" id="telefono" name="telefono" value="<?= $fila['telefono']; ?>" class="form-control" required="true" minlength="3" maxlength="45" autocomplete="off">
                                             </div>
                                             <div class="form-group">
                                                <label>Correo Electrónico:</label>
                                                <input type="email" id="correo_electronico" name="correo_electronico" value="<?= $fila['correo']; ?>" class="form-control" required="true" minlength="12" maxlength="50" autocomplete="off">
                                             </div>
                                          </div>
                                          <div class="modal-footer bg-custom">
                                             <button type="submit" class="btn btn-custom" id="btn-actualizar"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
                                             <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
                                          </div>
                                       </form>
                                    </div>
                                 </div>
                              </div>
                              <!-- FIN Formulario para actualizar datos -->
                              <?php } ?>		
                           </tbody>
                        </table>
                     </div>
                  </div>
               </div>

               <!-- Formulario para insertar datos -->
               <a href='#agregar-cliente' class="btn btn-custom" data-toggle="modal"><span class="glyphicon glyphicon-new-window"></span> Agregar Cliente</a>
               <div class="modal fade" id="agregar-cliente">
                  <div class="modal-dialog">
                     <div class="modal-content">
                        <div class="modal-header bg-custom">
                           <button type="button" class="close" data-dismiss="modal" aria-hidden="true">&times;</button>
                           <h4 class="modal-title text-center">Agregar Cliente</h4>
                        </div>
                        <form action="clientes/guardar.php" method="post" id="form-guardar">
                           <div class="modal-body">
                              <div class="form-group">
                                 <label>Nombre:</label>
                                 <input type="text" id="nombres" name="nombres" class="form-control" required="true" minlength="3" maxlength="45" autocomplete="off">
                              </div>
                              <div class="form-group">
                                 <label>Teléfono:</label>
                                 <input type="number" id="telefono" name="telefono" class="form-control" required="true" minlength="3" maxlength="45" autocomplete="off">
                              </div>
                              <div class="form-group">
                                 <label>Correo Electrónico:</label>
                                 <input type="email" id="correo_electronico" name="correo_electronico" class="form-control" required="true" minlength="12" maxlength="50" autocomplete="off">
                              </div>
                           </div>
                           <div class="modal-footer bg-custom">
                              <button type="submit" class="btn btn-custom" id="btn-guardar"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
                              <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cancelar</button>
                           </div>
                        </form>
                     </div>
                  </div>
               </div>
               <!-- FIN Formulario para insertar datos -->
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
      <script type="text/javascript" src="assets/js/jquery.form.min.js"></script>	
      <!--<script type="text/javascript" src="https://cdnjs.cloudflare.com/ajax/libs/limonte-sweetalert2/7.9.2/sweetalert2.min.js"></script>-->
      <script type="text/javascript" src="https://unpkg.com/sweetalert2@7.13.0/dist/sweetalert2.all.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/jquery.dataTables.min.js"></script>
      <script type="text/javascript" src="https://cdn.datatables.net/1.10.16/js/dataTables.bootstrap.min.js"></script>  
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/dataTables.buttons.min.js"></script>        
      <script type="text/javascript" src="https://cdn.datatables.net/buttons/1.3.1/js/buttons.bootstrap.min.js"></script>        
      <script type="text/javascript" src="//cdnjs.cloudflare.com/ajax/libs/jszip/3.1.3/jszip.min.js"></script>        
      <script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/pdfmake.min.js"></script>        
      <script type="text/javascript" src="//cdn.rawgit.com/bpampuch/pdfmake/0.1.27/build/vfs_fonts.js"></script>        
      <script type="text/javascript" src="//cdn.datatables.net/buttons/1.3.1/js/buttons.html5.min.js"></script>        
      <script type="text/javascript" src="//cdn.datatables.net/buttons/1.3.1/js/buttons.print.min.js"></script>        
      <script type="text/javascript" src="//cdn.datatables.net/buttons/1.3.1/js/buttons.colVis.min.js"></script>
      <script type="text/javascript" src="assets/js/clientes.js"></script>		
   </body>
</html>