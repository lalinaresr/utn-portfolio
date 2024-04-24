<form id="store-form" method="POST">
    <div class="modal-body">
        <div class="row">
            <?php include COMPONENTS_PATH . '/crud/form.php'; ?>
        </div>
    </div>
    <div class="modal-footer">
        <button type="submit" class="btn btn-primary" id="store-btn"><span class="glyphicon glyphicon-floppy-disk"></span> Guardar</button>
        <button type="button" class="btn btn-default" data-dismiss="modal"><span class="glyphicon glyphicon-remove-circle"></span> Cerrar</button>
    </div>
</form>