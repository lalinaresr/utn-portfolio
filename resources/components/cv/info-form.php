<div id="infoTab" class="tab-pane fade in">
    <h4 class="text-center">Información personal</h4><hr>
    <form action="<?= APP_URL; ?>/show.php" method="POST" class="form-horizontal">
        <input type="hidden" name="info-tab" value="1">
        <div class="form-group">
            <label for="fullname" class="col-sm-3 control-label">Nombre completo:</label>
            <div class="col-sm-8">
                <input type="text" id="fullname" name="fullname" class="form-control" required="true" minlenght="5" maxlenght="20" autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <label for="birthday" class="col-sm-3 control-label">Fecha de nacimiento:</label>
            <div class="col-sm-8">
                <input type="date" id="birthday" name="birthday" class="form-control" required="true">
            </div>
        </div>
        <div class="form-group">
            <label for="address" class="col-sm-3 control-label">Dirección:</label>
            <div class="col-sm-8">
                <textarea id="address" name="address" class="form-control" required="true" minlenght="10" maxlenght="70"></textarea>
            </div>
        </div>
        <div class="form-group">
            <label class="col-sm-3 control-label">Sexo:</label>
            <div class="col-sm-8">
                <label class="radio-inline"><input type="radio" name="sex" value="M">M</label>
                <label class="radio-inline"><input type="radio" name="sex" value="F" required="true">F</label>
            </div>
        </div>
        <div class="form-group">
            <label for="phone" class="col-sm-3 control-label">Teléfono:</label>
            <div class="col-sm-8">
                <input type="tel" id="phone" name="phone" class="form-control" required="true">
            </div>
        </div>
        <div class="form-group">
            <label for="email" class="col-sm-3 control-label">Correo electrónico:</label>
            <div class="col-sm-8">
                <input type="email" id="email" name="email" class="form-control" required="true" minlenght="10" maxlenght="60" autocomplete="off">
            </div>
        </div>
        <div class="form-group">
            <div class="col-sm-offset-3 col-sm-10">
                <button type="submit" class="btn btn-primary"><i class="fa fa-fw fa-send"></i> Enviar</button>
                <button type="button" class="btn btn-default btn-back"><i class="fa fa-fw fa-times-circle"></i> Cancelar</button>
            </div>
        </div>
    </form>
</div>