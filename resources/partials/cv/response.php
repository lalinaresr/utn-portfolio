<div class="container">
    <div class="row mt-4">
        <div class="col-md-12">
            <div class="panel panel-default">
                <div class="panel-body">
                    <table class="table table-bordered table-centered">
                        <?php
                            # Verificamos que el campo con name "info-tab" exista y no sea nulo
                            if (isset($_POST['info-tab'])) {
                                include_once COMPONENTS_PATH . '/cv/info-response.php';
                            # Verificamos que el campo con name "education-tab" exista y no sea nulo
                            } else if (isset($_POST['education-tab'])) {
                                include_once COMPONENTS_PATH . '/cv/education-response.php';
                            # Verificamos que el campo con name "experience-tab" exista y no sea nulo
                            } else if (isset($_POST['experience-tab'])) {
                                include_once COMPONENTS_PATH . '/cv/experience-response.php';
                            }
                        ?>
                    </table>
                </div>
            </div>
            <a href="<?= APP_URL; ?>" class="btn btn-default"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a>
        </div>
    </div>
</div>