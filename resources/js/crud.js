jQuery(document).ready(function ($) {

    const SITE_URL = 'http://127.0.0.1:8000';
    const APP_URL = `${SITE_URL}/practicas/segundo-parcial/crud`;
    const STORE = `${APP_URL}/projects/store.php`;
    const FIND = `${APP_URL}/projects/find.php`;
    const UPDATE = `${APP_URL}/projects/update.php`;
    const DESTROY = `${APP_URL}/projects/destroy.php`;

    function message(title, text, icon) {
        Swal.fire({ title, text, icon });
    }

    let projects_table = new DataTable('#projects-table', {
        language: {
            url: 'https://cdn.datatables.net/plug-ins/2.0.5/i18n/es-ES.json',
        },
        lengthChange: false,
        layout: {
            topStart: {
                buttons: [
                    { "extend": 'excelHtml5', "text": '<i class="fa fa-file-excel-o" aria-hidden="true"></i> XLSX', "className": 'btn btn-success' },
                    { "extend": 'csvHtml5', "text": '<i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF', "className": 'btn btn-danger' },
                    { "extend": 'pdfHtml5', "text": '<i class="fa fa-file-excel-o" aria-hidden="true"></i> CSV', "className": 'btn btn-success' }
                ]
            }
        }
    });
    projects_table.column('3').order('desc').draw();

    $("#form-store").on('submit', function (e) {
        e.preventDefault();

        let data = $(this).serialize();
        let type = $(this).attr('method');

        $.ajax({
            url: STORE,
            data,
            type,
            dataType: 'json',
            beforeSend: () => {
                $("#btn-store").attr('disabled', true);
                $("#btn-store").text('Procesando...');
            }, success: function (response) {
                $("#btn-store").removeAttr('disabled');
                $("#btn-store").html('<span class="glyphicon glyphicon-floppy-disk"></span> Guardar');

                $("#form-crud-store").modal('hide');

                if (response.type == 'success') {
                    $("#form-store").trigger('reset');
                    projects_table.row.add([
                        response?.data.type,
                        response?.data.name,
                        response?.data.description.substring(0, 70) + '...',
                        response?.data.created_at,
                        `<button class="btn btn-sm btn-warning btn-edit" data-key="${projects_table.rows().count()}" data-element=${response?.data.id}>
                            <span class="glyphicon glyphicon-pencil"></span> Editar
                        </button>
                        <button class="btn btn-sm btn-danger btn-delete" data-key="${projects_table.rows().count()}" data-element=${response?.data.id}>
                            <span class="glyphicon glyphicon-trash"></span> Eliminar
                        </button>`
                    ]).draw();

                    message('Éxito', 'El proyecto fue creado con éxito', 'success');
                } else {
                    message('Duplicidad', 'El proyecto que intenta guardar ya existe en nuestros registros', 'warning');
                }
            }
        });
    });

    $("#projects-table").on('click', '.btn-edit', function (e) {
        e.preventDefault();

        let id = $(this).data('element');
        let key = $(this).data('key');

        $("#form-crud-update").modal('show');

        $.ajax({
            data: { id },
            url: FIND,
            type: 'POST',
            dataType: 'json',
            beforeSend: () => {
                $("#form-update [name=type]").val('...');
                $("#form-update [name=name]").val('...');
                $("#form-update [name=link]").val('...');
                $("#form-update [name=image]").val('...');
                $("#form-update [name=description]").val('...');
            },
            success: function (response) {
                $("#form-update [name=key]").val(key);
                $("#form-update [name=element]").val(response?.data.id);
                $("#form-update [name=type]").val(response?.data.type_id);
                $("#form-update [name=name]").val(response?.data.name);
                $("#form-update [name=link]").val(response?.data.link);
                $("#form-update [name=image]").val(response?.data.image);
                $("#form-update [name=description]").val(response?.data.description);
            }
        });
    });

    $("#form-update").on('submit', function (e) {
        e.preventDefault();

        let data = $(this).serialize();
        let type = $(this).attr('method');
        let key = $("form-update [name=key]").val();

        $.ajax({
            url: UPDATE,
            data,
            type,
            dataType: 'json',
            beforeSend: () => {
                $("#btn-update").attr('disabled', true);
                $("#btn-update").text('Procesando...');
            }, success: function (response) {
                $("#btn-update").removeAttr('disabled');
                $("#btn-update").html('<span class="glyphicon glyphicon-refresh"></span> Actualizar');

                $("#form-crud-update").modal('hide');

                if (response.type == 'success') {
                    projects_table.row(key).data([
                        response?.data.type,
                        response?.data.name,
                        response?.data.description.substring(0, 70) + '...',
                        response?.data.created_at,
                        `<button class="btn btn-sm btn-warning btn-edit" data-key="${key}" data-element=${response?.data.id}>
                            <span class="glyphicon glyphicon-pencil"></span> Editar
                        </button>
                        <button class="btn btn-sm btn-danger btn-delete" data-key="${key}" data-element=${response?.data.id}>
                            <span class="glyphicon glyphicon-trash"></span> Eliminar
                        </button>`
                    ]).draw();

                    message('Éxito', 'El proyecto fue actualizado con éxito', 'success');
                } else {
                    message('Duplicidad', 'El proyecto que intenta actualizar ya existe en nuestros registros', 'warning');
                }
            }
        });
    });

    $("#projects-table").on('click', '.btn-delete', function (e) {
        e.preventDefault();

        let id = $(this).data('element');
        let key = $(this).data('key');

        Swal.fire({
            title: '¿Estas segur@?',
            text: '¡No podrás revertir esta acción!',
            icon: 'question',
            showCancelButton: true,
            confirmButtonText: '<span class="glyphicon glyphicon-trash"></span> Si, eliminar',
            cancelButtonText: '<span class="glyphicon glyphicon-remove-circle"></span> Cancelar',
            reverseButtons: true
        }).then(result => {
            if (result.isConfirmed) {
                $.ajax({
                    data: { id },
                    url: DESTROY,
                    type: 'POST',
                    dataType: 'json',
                    success: function (response) {
                        if (response.type == 'success') {
                            projects_table
                                .row(key)
                                .remove()
                                .draw();

                            message('Éxito', 'El proyecto fue eliminado con éxito', 'success');
                        }
                    }
                });
            } else if (
                result.dismiss === Swal.DismissReason.cancel
            ) {
                Swal.fire({
                    title: 'Recordatorio',
                    text: 'Recuerda que eliminar un registro es una acción que no podrá deshacerse',
                    icon: 'info'
                });
            }
        });
    });
});