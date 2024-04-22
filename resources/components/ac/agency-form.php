<form action="<?= APP_URL; ?>/response.php" method="POST" class="form-horizontal">
    <div class="form-group">
        <label for="model" class="col-sm-3 control-label">Modelo:</label>
        <div class="col-sm-8">
            <label class="radio-inline" title="<?= '$' . number_format(250000, 2); ?>">
                <input type="radio" name="model" value="M2" required>M2
            </label>
            <label class="radio-inline" title="<?= '$' . number_format(320000, 2); ?>">
                <input type="radio" name="model" value="M3">M3
            </label>
            <label class="radio-inline" title="<?= '$' . number_format(400000, 2); ?>">
                <input type="radio" name="model" value="M5">M5
            </label>
            <label class="radio-inline" title="<?= '$' . number_format(500000, 2); ?>">
                <input type="radio" name="model" value="M6">M6
            </label>
            <label class="radio-inline" title="<?= '$' . number_format(700000, 2); ?>">
                <input type="radio" name="model" value="CXR">CX-R
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="color" class="col-sm-3 control-label">Color:</label>
        <div class="col-sm-8">
            <select id="color" name="color" class="form-control" required="true">
                <option disabled selected value>Seleccione el color</option>
                <option value="rojo">Rojo</option>
                <option value="verde">Verde</option>
                <option value="azul">Azul</option>
                <option value="negro">Negro</option>
                <option value="blanco">Blanco</option>
                <option value="gris">Gris</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="version" class="col-sm-3 control-label">Versión:</label>
        <div class="col-sm-8">
            <select id="version" name="version" class="form-control" required="true">
                <option disabled selected value>Seleccione la versión</option>
                <option value="basico">Básico</option>
                <option value="equipado">Equipado</option>
                <option value="lujo">Lujo</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="payment_plan" class="col-sm-3 control-label">Plan de pago:</label>
        <div class="col-sm-8">
            <select id="payment_plan" name="payment_plan" class="form-control" required="true">
                <option disabled selected value>Seleccione el plan de pago</option>
                <option value="0">Contado</option>
                <option value="12">12 Meses</option>
                <option value="24">24 Meses</option>
                <option value="36">36 Meses</option>
                <option value="48">48 Meses</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-custom"><i class="fa fa-fw fa-send"></i> Enviar</button>
        </div>
    </div>
</form>