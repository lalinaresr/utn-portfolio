<form action="<?= APP_URL; ?>/response.php" method="POST" class="form-horizontal">
    <div class="form-group">
        <label for="type" class="col-sm-2 control-label">Productos:</label>
        <div class="col-sm-10">
            <label class="radio-inline" title="<?= '$' . number_format(800, 2); ?>">
                <input type="radio" name="type" value="tenis">Tenis
            </label>
            <label class="radio-inline" title="<?= '$' . number_format(700, 2); ?>">
                <input type="radio" name="type" value="pants" required>Pants
            </label>
            <label class="radio-inline" title="<?= '$' . number_format(200, 2); ?>">
                <input type="radio" name="type" value="playera">Playera
            </label>
            <label class="radio-inline" title="<?= '$' . number_format(150, 2); ?>">
                <input type="radio" name="type" value="short">Short
            </label>
        </div>
    </div>
    <div class="form-group">
        <label for="brand" class="col-sm-2 control-label">Marca:</label>
        <div class="col-sm-10">
            <select id="brand" name="brand" class="form-control" required="true">
                <option disabled selected value>Seleccione marca</option>
                <option value="puma">Puma (+10%)</option>
                <option value="nike">Nike (+15%)</option>
                <option value="reebok">Reebok (+20%)</option>
                <option value="adidas">Adidas (+25%)</option>
            </select>
        </div>
    </div>
    <div class="form-group">
        <label for="amount" class="col-sm-2 control-label">Cantidad:</label>
        <div class="col-sm-10">
            <input type="number" id="amount" name="amount" class="form-control" required="true" min="0" step="1" autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-2">
            <button type="submit" class="btn btn-custom"><i class="fa fa-fw fa-send"></i> Enviar</button>
        </div>
    </div>
</form>