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
                            <th class="text-center tx-white">Pedido</th>
                        </tr>
                        <?php include_once COMPONENTS_PATH . '/ir/list-response.php'; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>