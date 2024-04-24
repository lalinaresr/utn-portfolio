<form action="<?= APP_URL; ?>/response.php" method="POST" class="form-horizontal">
    <input type="hidden" name="experience-tab" value="1">
    <div class="form-group">
        <label for="first_job" class="col-sm-3 control-label">Primer empleo:</label>
        <div class="col-sm-8">
            <textarea id="first_job" name="first_job" class="form-control" required="true" minlenght="5" maxlenght="70"></textarea>
        </div>
    </div>
    <div class="form-group">
        <label for="last_job" class="col-sm-3 control-label">Último empleo:</label>
        <div class="col-sm-8">
            <textarea id="last_job" name="last_job" class="form-control" required="true" minlenght="5" maxlenght="70"></textarea>
        </div>
    </div>
    <div class="form-group knowledges">
        <label class="col-sm-3 control-label">Conocimientos:</label>
        <div class="col-sm-8">
            <label class="checkbox-inline"><input type="checkbox" name="knowledges[]" value="PHP" required>PHP</label>
            <label class="checkbox-inline"><input type="checkbox" name="knowledges[]" value="Java" required>Java</label>
            <label class="checkbox-inline"><input type="checkbox" name="knowledges[]" value="Python" required>Phyton</label>
            <label class="checkbox-inline"><input type="checkbox" name="knowledges[]" value="JavaScript" required>JavaScript</label>
            <label class="checkbox-inline"><input type="checkbox" name="knowledges[]" value="Ruby" required>Ruby</label>
            <label class="checkbox-inline"><input type="checkbox" name="knowledges[]" value="Otro" required>Otro</label>
        </div>
    </div>
    <div class="form-group">
        <div class="col-sm-offset-3 col-sm-10">
            <button type="submit" class="btn btn-warning btn-experience-tab"><i class="fa fa-fw fa-send"></i> Enviar</button>
            <button type="button" class="btn btn-default btn-back"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>
        </div>
    </div>
</form>