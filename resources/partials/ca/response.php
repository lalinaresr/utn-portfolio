<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-centered">
                        <tr class="ca">
                            <th colspan="10">Transacciones</th>
                        </tr>
                        <tr class="ca">
                            <th>Folio</th>
                            <th>Fecha</th>
                            <th>Tipo de movimiento</th>
                            <th>Saldo</th>
                            <th>Cantidad</th>
                        </tr>
                        <?php include_once COMPONENTS_PATH . '/ca/atm-response.php'; ?>
                    </table>
                </div>
            </div>
        </div>
    </div>
</div>