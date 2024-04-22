<div class="container">
    <div class="row mt-20">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-responsive table-bordered table-condensed table-centered">
                        <thead>
                            <tr bgcolor="#2D5A7C">
                                <th class="tx-white" colspan="2"><span class="glyphicon glyphicon-exclamation-sign"></span> Detalles de su pedido</th>
                            </tr>
                        </thead>
                        <?php include_once COMPONENTS_PATH . '/pi/order-response.php'; ?>
                    </table>
                    <a href="<?= APP_URL; ?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>