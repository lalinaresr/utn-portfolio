<form action="<?= APP_URL; ?>/response.php" method="POST" id="mothers-form">
    <div class="modal-body">
        <input type="hidden" name="mothers-form" value="1">
        <div class="form-group">
            <label for="status">Estado Civil:</label>
            <select id="status" name="status" class="form-control" required="true">
                <option disabled selected value>Seleccione su estado civil</option>
                <option value="soltera">Soltera</option>
                <option value="casada">Casada</option>
                <option value="viuda">Viuda</option>
                <option value="otro">Otro</option>
            </select>
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
            <label for="question">¿Cuenta con algún hijo menor de 18 años?</label>
            <select id="question" name="question" class="form-control" required="true">
                <option disabled selected value>Seleccione una opción</option>
                <option value="si">Si</option>
                <option value="no">No</option>
            </select>
        </div>
        <div class="form-group">
            <label for="age">Edad de su hijo:</label>
            <select id="age" name="age" class="form-control" required="true">
                <option disabled selected value>Seleccione la edad de su hijo menor de edad</option>
                <?php for ($i = 1; $i <= 30; $i++) : ?>
                    <option value="<?= $i; ?>"><?= $i; ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" id="btn-mothers-form" class="btn btn-default"><i class="fa fa-fw fa-send"></i> Enviar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>
    </div>
</form>