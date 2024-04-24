<div class="container">
    <div class="row mt-4">
        <div class="col-sm-12 col-md-12 col-lg-12">
            <div class="panel panel-default">
                <div class="panel-heading">
                    <h3 class="panel-title">Listado</h3>
                </div>
                <div class="panel-body">
                    <table id="projects-table" class="table table-bordered table-condensed table-hover table-centered" style="width:100%">
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
                    <a href="#" class="btn btn-default" data-toggle="modal" data-target="#create-modal"><span class="glyphicon glyphicon-plus"></span> Crear</a>
                </div>
            </div>
        </div>
    </div>
</div>