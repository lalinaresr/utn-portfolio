<form action="<?= APP_URL; ?>/response.php" method="POST" class="form-horizontal">
    <div class="form-group">
        <label for="number" class="col-sm-3 control-label">Número:</label>
        <div class="col-sm-8">
            <input type="number" id="number" name="number" class="form-control" required="true" min="1" step="1" autofocus>
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-3">
            <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-send"></i> Enviar</button>
        </div>
    </div>
</form>