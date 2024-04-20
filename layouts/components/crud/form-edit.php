<form id="form-update" method="POST">
    <input type="hidden" name="key">
    <input type="hidden" name="element">
    <div class="modal-body">
        <div class="row">            
            <?php include COMPONENTS_PATH . '/crud/form.php'; ?>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="btn-update"><span class="glyphicon glyphicon-refresh"></span> Actualizar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cerrar</button>
    </div>
</form>