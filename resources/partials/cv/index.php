<?php include_once PARTIALS_PATH . '/cv/tabs.php'; ?>
<div class="container">
    <div class="row mt-4">
        <div class="col-xs-12 col-sm-12 col-md-4 col-lg-4">
            <?php include_once PARTIALS_PATH . '/cv/sidebar.php'; ?>
        </div>
        <div class="col-xs-12 col-sm-12 col-md-8 col-lg-8">
            <div class="panel panel-default">
                <div class="panel-body">
                    <div id="main-tabs" class="tab-content">
                        <div id="main-tab" class="tab-pane fade in active">
                            <h3 class="text-center">¡Empieza a crear tu <?= APP_NAME; ?>!</h3>
                            <hr>
                            <?php include_once COMPONENTS_PATH . '/cv/main-screen.php'; ?>
                        </div>
                        <div id="info-tab" class="tab-pane fade in">
                            <h4 class="text-center">Información personal</h4>
                            <hr>
                            <?php include_once COMPONENTS_PATH . '/cv/info-form.php'; ?>
                        </div>
                        <div id="education-tab" class="tab-pane fade in">
                            <h4 class="text-center">Educación</h4>
                            <hr>
                            <?php include_once COMPONENTS_PATH . '/cv/education-form.php'; ?>
                        </div>
                        <div id="experience-tab" class="tab-pane fade in">
                            <h4 class="text-center">Experiencia</h4>
                            <hr>
                            <?php include_once COMPONENTS_PATH . '/cv/experience-form.php'; ?>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>