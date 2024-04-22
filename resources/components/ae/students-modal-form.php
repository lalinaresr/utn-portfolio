<div class="modal fade" id="students-modal" tabindex="-1" role="dialog" aria-labelledby="myModalLabel">
    <div class="modal-dialog" role="document">
        <div class="modal-content">
            <div class="modal-header">
                <h4 class="modal-title text-center">Solicitud para estudiantes</h4>
            </div>
            <form action="<?= APP_URL; ?>/response.php" method="POST" id="students-form">
                <div class="modal-body">
                    <input type="hidden" name="students-form" value="1">
                    <div class="form-group">
                        <label for="fullname">Nombre completo: </label>
                        <input type="text" id="fullname" name="fullname" class="form-control" required="true" minlength="3" maxlength="100" autocomplete="off" autofocus>
                    </div>
                    <div class="form-group">
                        <label for="state">Estado residencial:</label>
                        <select id="state" name="state" class="form-control" required="true">
                            <option disabled selected value>Seleccione su estado</option>
                            <option value="edo-mex">Estado de México</option>
                            <option value="otro">Otro</option>
                        </select>
                    </div>
                    <div class="form-group">
                        <label for="score">Calificación: </label>
                        <input type="number" id="score" name="score" class="form-control" required="true" min=0 step=0.01 max=10>
                    </div>
                    <div class="form-group">
                        <label for="age">Edad:</label>
                        <select id="age" name="age" class="form-control" required="true">
                            <option disabled selected value>Seleccione su edad</option>
                            <?php for ($i = 5; $i <= 40; $i++) : ?>
                                <option value="<?= $i; ?>"><?= $i; ?></option>
                            <?php endfor; ?>
                        </select>
                    </div>
                </div>
                <div class="modal-footer">
                    <button type="submit" id="btn-students-form" class="btn btn-default"><i class="fa fa-fw fa-send"></i> Enviar</button>
                    <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>
                </div>
            </form>
        </div>
    </div>
</div>