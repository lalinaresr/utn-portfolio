<div class="container">
    <div class="row mt-20">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <?php if (count($plants) > 0) : ?>
                        <div class="table-responsive">
                            <table class="table table-bordered table-condensed table-hover table-centered">
                                <thead>
                                    <tr bgcolor="#2D5A7C">
                                        <th class="tx-white" colspan="10">Gestión de <?= APP_NAME; ?></th>
                                    </tr>
                                    <tr bgcolor="#2D5A7C">
                                        <th class="tx-white">Planta</th>
                                        <th class="tx-white">Unidades producidas</th>
                                        <th class="tx-white">Unidades defectuosas</th>
                                        <th class="tx-white">% defectuosas</th>
                                    </tr>
                                </thead>
                                <?php include_once COMPONENTS_PATH . '/p/plants-table.php'; ?>
                            </table>
                        </div>
                        <a href="<?= APP_URL; ?>/records.php" class="btn btn-primary" target="_blank"><span class="glyphicon glyphicon-list"></span> Ver historial</a>
                    <?php else : ?>
                        <div class="alert alert-info">
                            <strong>¡Aviso!</strong> No se encontraron plantas productoras para mostrar en estos momentos
                        </div>
                    <?php endif; ?>
                    <a href="<?= APP_URL; ?>/refresh.php" class="btn btn-primary" target="_blank"><span class="glyphicon glyphicon-refresh"></span> Inicializar</a>
                </div>
            </div>
        </div>
    </div>
</div>