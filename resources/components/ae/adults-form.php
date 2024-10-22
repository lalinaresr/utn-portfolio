<form action="<?= APP_URL; ?>/response.php" method="POST" id="adults-form">
    <div class="modal-body">
        <input type="hidden" name="adults-form" value="1">
        <div class="form-group">
            <label for="state">Estado residencial:</label>
            <select id="state" name="state" class="form-control" required="true">
                <option disabled selected value>Seleccione su estado</option>
                <option value="edo-mex">Estado de México</option>
                <option value="otro">Otro</option>
            </select>
        </div>
        <div class="form-group">
            <label for="age">Edad:</label>
            <select id="age" name="age" class="form-control" required="true">
                <option disabled selected value>Seleccione su edad</option>
                <?php for ($i = 50; $i <= 110; $i++) : ?>
                    <option value="<?= $i; ?>"><?= $i; ?></option>
                <?php endfor; ?>
            </select>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" id="btn-adults-form" class="btn btn-default"><i class="fa fa-fw fa-send"></i> Enviar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>
    </div>
</form>