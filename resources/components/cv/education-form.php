<form action="<?= APP_URL; ?>/response.php" method="POST" class="form-horizontal">
    <input type="hidden" name="education-tab" value="1">
    <div class="form-group">
        <label for="preparatory" class="col-sm-3 control-label">Preparatoria:</label>
        <div class="col-sm-8">
            <textarea id="preparatory" name="preparatory" class="form-control" required="true" minlenght="5" maxlenght="70"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="university" class="col-sm-3 control-label">Universidad:</label>
        <div class="col-sm-8">
            <textarea id="university" name="university" class="form-control" required="true" minlenght="5" maxlenght="70"></textarea>
        </div>
    </div>
    <div class="form-group courses">
        <label class="col-sm-3 control-label">Cursos:</label>
        <div class="col-sm-8">
            <label class="checkbox-inline"><input type="checkbox" name="courses[]" value="PHP" required>PHP</label>
            <label class="checkbox-inline"><input type="checkbox" name="courses[]" value="Java" required>Java</label>
            <label class="checkbox-inline"><input type="checkbox" name="courses[]" value="Python" required>Phyton</label>
            <label class="checkbox-inline"><input type="checkbox" name="courses[]" value="JavaScript" required>JavaScript</label>
            <label class="checkbox-inline"><input type="checkbox" name="courses[]" value="Ruby" required>Ruby</label>
            <label class="checkbox-inline"><input type="checkbox" name="courses[]" value="Otro" required>Otro</label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-10">
            <button type="submit" class="btn btn-info btn-education-tab"><i class="fa fa-fw fa-send"></i> Enviar</button>
            <button type="button" class="btn btn-default btn-back"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>
        </div>
    </div>
</form>