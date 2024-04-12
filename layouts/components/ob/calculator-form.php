<form action="<?= APP_URL; ?>/show.php" method="POST" class="form-horizontal">
    <div class="form-group">
        <label for="first" class="col-sm-4 control-label">Primer número:</label>
        <div class="col-sm-8">
            <input type="number" id="first" name="first" class="form-control" required="true" min=0 step=0.01 autocomplete="off" autofocus>
        </div>
    </div>
    <div class="form-group">
        <label for="second" class="col-sm-4 control-label">Segundo número:</label>
        <div class="col-sm-8">
            <input type="number" id="second" name="second" class="form-control" required="true" min=0 step=0.01 autocomplete="off">
        </div>
    </div>
    <div class="form-group">
        <div class="col-md-6 col-md-offset-4">
            <button type="submit" class="btn btn-info"><i class="fa fa-fw fa-send"></i> Enviar</button>
        </div>
    </div>
</form>