<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-bordered table-condensed table-centered">
                        <tr class="rv">
                            <th colspan="11"><?= APP_NAME; ?></th>
                        </tr>                        
                        <?php include_once COMPONENTS_PATH . '/rv/sales-response.php'; ?>
                    </table>                    
                </div>
            </div>
            <a href="<?= APP_URL; ?>/PDF.php" class="btn btn-danger"><i class="fa fa-fw fa-file-pdf-o"></i> Exportar</a>
        </div>
    </div>
</div>