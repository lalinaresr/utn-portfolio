<div class="container-fluid">
    <div class="row mt-20">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed table-hover table-centered" id="records-table" style="width: 100%;">
                            <thead>
                                <tr bgcolor="#2D5A7C">
                                    <th class="tx-white" colspan="9">Historial de las plantas productoras</th>
                                </tr>
                                <tr bgcolor="#2D5A7C">
                                    <th class="tx-white">ID</th>
                                    <th class="tx-white">Planta <span class="glyphicon glyphicon-plus"></span></th>
                                    <th class="tx-white">Cantidad <span class="glyphicon glyphicon-plus"></span></th>
                                    <th class="tx-white">Planta <span class="glyphicon glyphicon-minus"></span></th>
                                    <th class="tx-white">Cantidad <span class="glyphicon glyphicon-minus"></span></th>
                                    <th class="tx-white">Planta <span class="glyphicon glyphicon-plus"></span> defectuosas</th>
                                    <th class="tx-white">Cantidad <span class="glyphicon glyphicon-plus"></span> defectuosas</th>
                                    <th class="tx-white">Planta <span class="glyphicon glyphicon-minus"></span> defectuosas</th>
                                    <th class="tx-white">Cantidad <span class="glyphicon glyphicon-minus"></span> defectuosas</th>
                                </tr>
                            </thead>
                            <?php include_once COMPONENTS_PATH . '/p/records-table.php'; ?>
                        </table>
                    </div>
                    <a href="<?= APP_URL; ?>" class="btn btn-default"><span class="glyphicon glyphicon-arrow-left"></span> Regresar</a>
                </div>
            </div>
        </div>
    </div>
</div>