<div class="container">
    <div class="row mt-20">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-responsive table-bordered table-condensed" id="center-table">
                        <tr bgcolor="#2D5A7C">
                            <th class="tx-white" colspan="10">Transacciones</th>
                        </tr>
                        <tr bgcolor="#2D5A7C">
                            <th class="tx-white">Folio</th>
                            <th class="tx-white">Fecha</th>
                            <th class="tx-white">Tipo de movimiento</th>
                            <th class="tx-white">Saldo</th>
                            <th class="tx-white">Cantidad</th>
                        </tr>
                        <?php include_once COMPONENTS_PATH . '/ca/atm-response.php'; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>