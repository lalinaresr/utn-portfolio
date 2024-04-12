<?php require_once 'config.php'; ?>

<!DOCTYPE html>
<html lang="es">
   <head>
      <meta charset="utf-8">
      <meta http-equiv="X-UA-Compatible" content="IE=edge">
      <meta name="viewport" content="width=device-width, initial-scale=1">
      <title><?= APP_NAME; ?> | Resultados</title>
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/bootstrap.min.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/libs/font-awesome.min.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/ac.css">
      <link rel="stylesheet" type="text/css" href="<?= LAYOUTS_PATH; ?>/css/styles.css">
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
               <a class="navbar-brand" href="<?= APP_URL; ?>"><?= APP_NAME; ?></a>
            </div>
            <div id="navbar" class="collapse navbar-collapse">
               <!--<ul class="nav navbar-nav navbar-right">
                  <li><a href="#"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a></li>
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
                         * Variable modelo donde se guarda el carro seleccionado por el usuario
                         * @var String
                         */
                        $modelo = $_POST['modelo'];

                        /**
                         * Variable color donde se guarda el color del carro seleccionado por el usuario
                         * @var String
                         */
                        $color = $_POST['color'];

                        /**
                         * Variable version donde se guarda la version seleccionada por el usuario
                         * @var String
                         */
                        $version = $_POST['version'];

                        /**
                         * Variable plan pago donde se guarda el metodo a pagar seleccionado por el usuario
                         * @var String
                         */
                        $planPago = $_POST['plan_pago'];

                        /**
                         * contiene el precio segun el modelo del carro
                         * @var integer
                         */
                        $precioModelo = 0;

                        /**
                         * Funcion donde obtengo el precio del carro segun el modelo seleccionado
                         * @param  $modelo seleccionado por el usuario
                         * @return $precioModelo contiene el precio segun el modelo del carro
                         */
                        function precioModelo($modelo){
                           switch ($modelo) {
                              case "M2":
                                 $precioModelo = 250000;
                                 break;
                              case "M3":
                                 $precioModelo = 320000;
                                 break;
                              case "M5":
                                 $precioModelo = 400000;
                                 break;
                              case "M6":
                                 $precioModelo = 500000;
                                 break;
                              case "CXR":
                                 $precioModelo = 700000;
                                 break;                             
                              default:
                                 $precioModelo = 0;
                                 break;
                           }
                           return $precioModelo;
                        }

                        /**
                         * contiene el valor del carro normalmente pero ya con el porcentaje adicional
                         * @var integer
                         */
                        $totalPagarVersion = 0;

                        /**
                         * Funcion donde se obtiene el valor agregandole el costo extra por ser equipado o de lujo el carro
                         * @param  $version se pasa esta variable para saber que tipo de carro es
                         * @param  $modelo  esta variable es la que utiliza la funcion precioModelo esto con el fin de obtener el precio del carro segun su modelo y asi poder sumarle el 5 o 10 %
                         * @return $totalPagarVersion contiene el valor del carro normalmente pero ya con el porcentaje adicional
                         */
                        function totalPagarDependeVersion($version, $modelo){
                           switch ($version) {
                              case "equipado":
                                 $totalPagarVersion = precioModelo($modelo) * 1.05;
                                 break;
                              case "lujo":
                                 $totalPagarVersion = precioModelo($modelo) * 1.1;
                                 break;                              
                              default:
                                 $totalPagarVersion = precioModelo($modelo);
                                 break;
                           }
                           return $totalPagarVersion;
                        }

                        /**
                         * contiene el valor final de pago ya con los porcentajes depende del tiempo a pagar
                         * @var integer
                         */
                        $totalPagarPlanPago = 0;

                        /**
                         * Funcion en donde se calcula un porcentaje adicional sobre el valor natural + el porcentaje del tipo de version
                         * @param  [type] $planPago contiene el valor de como va a pagar el carro y cuanto se le incrementara en su monto final
                         * @param  $version se pasa esta variable para saber que tipo de carro es
                         * @param  $modelo  esta variable es la que utiliza la funcion precioModelo esto con el fin de obtener el precio del carro segun su modelo y asi poder hacerle el cargo
                         * @return $totalPagarPlanPago contiene el valor final de pago ya con los porcentajes depende del tiempo a pagar
                         */
                        function totalPagarDependePlanPago($planPago, $version, $modelo){
                           switch ($planPago) {
                              case 12:
                                 $totalPagarPlanPago = totalPagarDependeVersion($version, $modelo) * 1.025;
                                 break;
                              case 24:
                                 $totalPagarPlanPago = totalPagarDependeVersion($version, $modelo) * 1.032;
                                 break;
                              case 36:
                                 $totalPagarPlanPago = totalPagarDependeVersion($version, $modelo) * 1.04;
                                 break;
                              case 48:
                                 $totalPagarPlanPago = totalPagarDependeVersion($version, $modelo) * 1.052;
                                 break;                              
                              default:
                                 $totalPagarPlanPago = 0;
                                 break;
                           }
                           return $totalPagarPlanPago;
                        }

                     ?>
                     <table class="table table-responsive table-bordered table-condensed" id="center-table">
                        <tr bgcolor="#D0033D">
                           <th class="text-center tx-white" colspan="2">Verificar Compra</th>
                        </tr>
                        <tr>
                           <td colspan="2">
                            <img src="<?= LAYOUTS_PATH; ?>/images/ac/<?= $modelo; ?>.jpg" class="img-responsive center-block" width="40%" title="<?= $modelo; ?>">
                          </td>
                        </tr>
                        <tr>
                           <td>Modelo:</td>
                           <td><?= $modelo; ?></td>
                        </tr>
                        <tr>
                           <td>Color:</td>
                           <td><?= $color; ?></td>
                        </tr>
                        <tr>
                           <td>Versión:</td>
                           <td><?= ucwords(strtolower($version)); ?></td>
                        </tr>
                        <tr>
                           <td>Forma de Pago:</td>
                           <td><?= ($planPago == 0) ? 'De Contado' : $planPago . ' Meses' ; ?></td>
                        </tr>
                        <tr>
                           <td>Total a Pagar:</td>
                           <td>$<?= ($planPago == 0) ? totalPagarDependeVersion($version, $modelo): totalPagarDependePlanPago($planPago, $version, $modelo) ; ?></td>
                        </tr>
                        <tr>
                           <td>Mensualidad:</td>
                           <td>$<?= ($planPago == 0) ? '0' : totalPagarDependePlanPago($planPago, $version, $modelo) / $planPago ; ?></td>
                        </tr>
                        <tr>
                           <td>Enganche:</td>
                           <td>$<?= ($planPago == 0) ? '0' : totalPagarDependePlanPago($planPago, $version, $modelo) * 1.2 ; ?></td>
                        </tr>
                     </table>
                  </div>
               </div>
               <a href="<?= APP_URL; ?>" class="btn btn-default"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a>
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