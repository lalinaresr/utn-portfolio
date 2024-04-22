<div class="container">
    <div class="row mt-20">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-responsive table-bordered table-condensed" id="center-table">
                        <tr bgcolor="#D9534F">
                            <th class="tx-white" colspan="11"><?= APP_NAME; ?></th>
                        </tr>                        
                        <?php include_once COMPONENTS_PATH . '/rv/sales-response.php'; ?>
                    </table>                    
                </div>
            </div>
            <a href="<?= APP_URL; ?>/PDF.php" class="btn btn-danger"><i class="fa fa-fw fa-file-pdf-o"></i> Exportar</a>
        </div>
    </div>
</div>