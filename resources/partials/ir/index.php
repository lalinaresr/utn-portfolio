<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-hover table-centered">
                        <thead>
                            <tr class="ir">
                                <th colspan="4"><?= APP_NAME; ?></th>
                            </tr>
                            <tr class="ir">
                                <th>Folio</th>
                                <th>Nombre</th>
                                <th>Existencias</th>
                                <th>Pedido</th>
                            </tr>
                        </thead>
                        <?php include_once COMPONENTS_PATH . '/ir/response.php'; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>