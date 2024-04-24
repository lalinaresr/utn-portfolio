jQuery(document).ready(function ($) {

    const SITE_URL = 'http://127.0.0.1:8000';
    const APP_URL = `${SITE_URL}/practicas/segundo-parcial/crud`;
    const STORE = `${APP_URL}/projects/store.php`;
    const FIND = `${APP_URL}/projects/find.php`;
    const UPDATE = `${APP_URL}/projects/update.php`;
    // const STORE_OP_UPDATE = `${APP_URL}/projects/store_or_update.php`;
    const DESTROY = `${APP_URL}/projects/destroy.php`;

    function message(title, text, icon) {
        const BS_SWAL = Swal.mixin({
            customClass: {
                confirmButton: "btn btn-primary",
                cancelButton: "btn btn-default"
            },
            buttonsStyling: false
        });

        BS_SWAL.fire({ title, text, icon });
    }

    let projects_table = new DataTable('#projects-table', {
        language: {
            url: 'https://cdn.datatables.net/plug-ins/2.0.5/i18n/es-ES.json',
        },
        lengthChange: false,
        layout: {
            topStart: {
                buttons: [
                    {
                        extend: 'excelHtml5',
                        className: 'btn btn-success',
                        text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i> XLSX',
                        exportOptions: {
                            columns: [0, 1, 3]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        className: 'btn btn-danger',
                        text: '<i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF',
                        exportOptions: {
                            columns: [0, 1, 3]
                        },
                        orientation: 'landscape',
                        pageSize: 'LEGAL',
                        download: 'open'
                    },
                    {
                        extend: 'csvHtml5',
                        className: 'btn btn-success',
                        text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i> CSV',
                        exportOptions: {
                            columns: [0, 1, 3]
                        }
                    }
                ]
            }
        }
    });
    projects_table.column('3').order('desc').draw();

    $("#store-form").on('submit', function (e) {
        e.preventDefault();

        let data = $(this).serialize();
        let type = $(this).attr('method');

        $.ajax({
            url: STORE,
            data,
            type,
            dataType: 'json',
            beforeSend: () => {
                $("#store-btn").attr('disabled', true);
                $("#store-btn").text('Procesando...');
            },
            success: function (response) {
                $("#store-btn").removeAttr('disabled');
                $("#store-btn").html('<span class="glyphicon glyphicon-floppy-disk"></span> Guardar');

                $("#create-modal").modal('hide');

                if (response.type == 'success') {
                    $("#store-form").trigger('reset');
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

        let key = $(this).data('key');
        let id = $(this).data('element');

        $("#edit-modal").modal('show');

        $.ajax({
            data: { id },
            url: FIND,
            type: 'POST',
            dataType: 'json',
            beforeSend: () => {
                $("#update-form [name=type]").val();
                $("#update-form [name=name]").val();
                $("#update-form [name=link]").val();
                $("#update-form [name=image]").val();
                $("#update-form [name=description]").val();
            },
            success: response => {
                $("#update-form [name=key]").val(key);
                $("#update-form [name=element]").val(id);
                $("#update-form [name=type]").val(response?.data.type_id);
                $("#update-form [name=name]").val(response?.data.name);
                $("#update-form [name=link]").val(response?.data.link);
                $("#update-form [name=image]").val(response?.data.image);
                $("#update-form [name=description]").val(response?.data.description);
            }
        });
    });

    $("#update-form").on('submit', function (e) {
        e.preventDefault();

        let type = $(this).attr('method');
        let data = $(this).serialize();
        let key = $("#update-form [name=key]").val();

        $.ajax({
            url: UPDATE,
            data,
            type,
            dataType: 'json',
            beforeSend: () => {
                $("#update-btn").attr('disabled', true);
                $("#update-btn").text('Procesando...');
            },
            success: response => {
                $("#update-btn").removeAttr('disabled');
                $("#update-btn").html('<span class="glyphicon glyphicon-refresh"></span> Actualizar');

                $("#edit-modal").modal('hide');

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

        let key = $(this).data('key');
        let id = $(this).data('element');

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
                    success: response => {
                        if (response.type == 'success') {
                            projects_table.row(key).remove().draw();
                            message('Éxito', 'El proyecto fue eliminado con éxito', 'success');
                        }
                    }
                });
            } else if (result.dismiss === Swal.DismissReason.cancel) {
                message('Recordatorio', 'Recuerda que eliminar un registro es una acción que no podrá deshacerse', 'info');
            }
        });
    });
});