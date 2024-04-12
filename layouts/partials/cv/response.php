<div class="col-md-12">
    <div class="panel panel-default">
        <div class="panel-body">
            <table class="table table-responsive table-bordered">
                <?php                
                    # Verificamos que el valor del campo con name "datosPersonales" exista y no este vacío
                    if (isset($_POST['info-tab'])) {
                        include_once COMPONENTS_PATH . '/cv/info-response.php';
                    # Verificamos que el valor del campo con name "educación" exista y no este vacío
                    } else if (isset($_POST['education-tab'])) {
                        include_once COMPONENTS_PATH . '/cv/education-response.php';
                    # Verificamos que el valor del campo con name "experiencia" exista y no este vacío
                    } else if (isset($_POST['experience-tab'])) {
                        include_once COMPONENTS_PATH . '/cv/experience-response.php';
                    }
                ?>                    
            </table>
        </div>
    </div>
    <a href="<?= APP_URL; ?>" class="btn btn-default"><i class="fa fa-fw fa-arrow-left"></i> Regresar</a>
</div>