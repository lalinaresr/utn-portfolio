<div class="container">
    <div class="row mt-30">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-primary">
                <div class="panel-heading">
                    <h3 class="panel-title"><?= APP_NAME; ?> | Listado</h3>
                </div>
                <div class="panel-body">
                    <table id="projects-table" class="table table-bordered table-responsive table-hover">
                        <thead>
                            <tr>
                                <th>Tipo</th>
                                <th>Nombre</th>
                                <th>Descripción</th>
                                <th>Fecha de registro</th>
                                <th>&nbsp;</th>
                            </tr>
                        </thead>
                        <?php include_once COMPONENTS_PATH . '/crud/index.php'; ?>
                    </table>
                </div>
                <div class="panel-footer">
                    <a href="#" class="btn btn-primary" data-toggle="modal" data-target="#form-crud-store"><span class="glyphicon glyphicon-plus"></span> Crear</a>
                </div>
            </div>
        </div>
    </div>
</div>