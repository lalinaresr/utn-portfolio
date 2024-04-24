<input type="hidden" name="key"><input type="hidden" name="element">
<div class="col-md-6">
    <div class="form-group">
        <label for="type">Tipo:</label>
        <select name="type" id="type" class="form-control" required>
            <option disabled value selected>Seleccione tipo de proyecto</option>
            <?php foreach ($types as $type) : ?>
                <option value="<?= $type['id']; ?>"><?= $type['name']; ?></option>
            <?php endforeach; ?>
        </select>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="name">Nombre:</label>
        <input type="text" id="name" name="name" class="form-control" required minlength="5" maxlength="50" autocomplete="off">
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="link">Enlace:</label>
        <input type="url" id="link" name="link" class="form-control" required>
    </div>
</div>
<div class="col-md-6">
    <div class="form-group">
        <label for="image">Imagen:</label>
        <input type="text" id="image" name="image" class="form-control" required>
    </div>
</div>
<div class="col-md-12">
    <div class="form-group">
        <label for="description">Descripción:</label>
        <textarea id="description" name="description" class="form-control" required minlength="10" rows="5"></textarea>
    </div>
</div>