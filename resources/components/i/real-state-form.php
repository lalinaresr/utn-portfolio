<form action="<?= APP_URL; ?>/show.php" method="POST" class="form-horizontal">
    <div class="form-group">
        <label for="continent" class="col-sm-4 control-label">Continente:</label>
        <div class="col-sm-8">
            <label class="radio-inline" title="<?= '$' . number_format(500000, 2); ?>">
                <input type="radio" name="continent" value="america" required>América
            </label>
            <label class="radio-inline" title="<?= '$' . number_format(600000, 2); ?>">
                <input type="radio" name="continent" value="asia">Asia
            </label>
            <label class="radio-inline" title="<?= '$' . number_format(800000, 2); ?>">
                <input type="radio" name="continent" value="europa">Europa
            </label>
            <label class="radio-inline" title="<?= '$' . number_format(1000000, 2); ?>">
                <input type="radio" name="continent" value="oceania">Oceanía
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="years_to_pay" class="col-sm-4 control-label">Años a pagar:</label>
        <div class="col-sm-8">
            <select id="years_to_pay" name="years_to_pay" class="form-control" required="true">
                <option disabled selected value>Seleccione los años a pagar</option>
                <option value="10">10 años</option>
                <option value="20">20 años</option>
                <option value="30">30 años</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="hitch" class="col-sm-4 control-label">Enganche:</label>
        <div class="col-sm-8">
            <input type="number" id="hitch" name="hitch" class="form-control" required="true" min="0" step="0.01">
        </div>
    </div>
    <div class="form-group">
        <label for="salary" class="col-sm-4 control-label">Sueldo mensual:</label>
        <div class="col-sm-8">
            <input type="number" id="salary" name="salary" class="form-control" required="true" min="0" step="0.01">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-8 col-md-offset-4">
            <button type="submit" class="btn btn-custom"><i class="fa fa-fw fa-send"></i> Enviar</button>
        </div>
    </div>
</form>