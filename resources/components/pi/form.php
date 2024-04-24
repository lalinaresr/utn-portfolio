<form action="<?= APP_URL; ?>/order.php" method="POST">
    <div class="form-group">
        <label for="size">Tamaño:</label>
        <select id="size" name="size" class="form-control" required>
            <option disabled selected value>Seleccione el tamaño</option>
            <option value="grande">Grande $90</option>
            <option value="mediana">Mediana $70</option>
            <option value="chica">Chica $40</option>
        </select>
    </div>
    <div class="form-group">
        <label for="type">Tipo:</label>
        <select id="type" name="type" class="form-control" required="">
            <option disabled selected value>Seleccione el tipo de pizza</option>
            <optgroup label="Sencillas">
                <option value="S1">Hawaiana</option>
                <option value="S2">Pepperoni</option>
                <option value="S3">Carnes frías</option>
            </optgroup>
            <optgroup label="Especiales">
                <option value="E1">Mexicana</option>
                <option value="E2">Suprema</option>
                <option value="E3">Tres quesos</option>
            </optgroup>
        </select>
    </div>
    <div class="form-group">
        <label for="amount">Cantidad:</label>
        <input type="number" id="amount" name="amount" class="form-control" required min="0" max="50" step="1">
    </div>
    <button type="submit" class="btn btn-success"><span class="glyphicon glyphicon-send"></span> Ordenar</button>
</form>