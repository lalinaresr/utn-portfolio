<div class="container-fluid">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div class="table-responsive">
                        <table class="table table-bordered table-condensed table-hover table-centered" id="records-table" style="width: 100%;">
                            <thead>
                                <tr class="p">
                                    <th colspan="9">Historial de las plantas productoras</th>
                                </tr>
                                <tr class="p">
                                    <th>ID</th>
                                    <th>Planta <span class="glyphicon glyphicon-plus"></span></th>
                                    <th>Cantidad <span class="glyphicon glyphicon-plus"></span></th>
                                    <th>Planta <span class="glyphicon glyphicon-minus"></span></th>
                                    <th>Cantidad <span class="glyphicon glyphicon-minus"></span></th>
                                    <th>Planta <span class="glyphicon glyphicon-plus"></span> defectuosas</th>
                                    <th>Cantidad <span class="glyphicon glyphicon-plus"></span> defectuosas</th>
                                    <th>Planta <span class="glyphicon glyphicon-minus"></span> defectuosas</th>
                                    <th>Cantidad <span class="glyphicon glyphicon-minus"></span> defectuosas</th>
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