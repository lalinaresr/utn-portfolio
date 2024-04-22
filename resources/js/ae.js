jQuery(document).ready(function ($) {

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-info",
            cancelButton: "btn btn-default"
        },
        buttonsStyling: false
    });

    $("#students-form").ajaxForm({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        dataType: 'json',
        beforeSend: function () {
            $("#btn-students-form").attr('disabled', true);
            $("#btn-students-form").html('Procesando <i class="fa fa-spinner fa-spin fa-fw"></i>');
        },
        success: function (response) {
            $("#btn-students-form").removeAttr('disabled');
            $("#btn-students-form").html('<i class="fa fa-fw fa-send"></i> Enviar');
            $("#students-modal").modal('hide');

            setTimeout(function () {
                swalWithBootstrapButtons.fire({
                    title: response.type == 'success' ? 'Éxito' : 'Oops',
                    text: response.text,
                    icon: response.type
                });
            }, 1000);
        }
    });

    $("#students-modal").on('hide.bs.modal', () => $("#students-form").trigger('reset'));

    $("#mothers-form").ajaxForm({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        dataType: 'json',
        beforeSend: function () {
            $("#btn-mothers-form").attr('disabled', true);
            $("#btn-mothers-form").html('Procesando <i class="fa fa-spinner fa-spin fa-fw"></i>');
        },
        success: function (response) {
            $("#btn-mothers-form").removeAttr('disabled');
            $("#btn-mothers-form").html('<i class="fa fa-fw fa-send"></i> Enviar');
            $("#mothers-modal").modal('hide');

            setTimeout(function () {
                swalWithBootstrapButtons.fire({
                    title: response.type == 'success' ? 'Éxito' : 'Oops',
                    text: response.text,
                    icon: response.type
                });
            }, 1000);
        }
    });

    $("#mothers-modal").on('hide.bs.modal', () => $("#mothers-form").trigger('reset'));

    $("#adults-form").ajaxForm({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        dataType: 'json',
        beforeSend: function () {
            $("#btn-adults-form").attr('disabled', true);
            $("#btn-adults-form").html('Procesando <i class="fa fa-spinner fa-spin fa-fw"></i>');
        },
        success: function (response) {
            $("#btn-adults-form").removeAttr('disabled');
            $("#btn-adults-form").html('<i class="fa fa-fw fa-send"></i> Enviar');
            $("#adults-modal").modal('hide');

            setTimeout(function () {
                swalWithBootstrapButtons.fire({
                    title: response.type == 'success' ? 'Éxito' : 'Oops',
                    text: response.text,
                    icon: response.type
                });
            }, 1000);
        }
    });

    $("#adults-modal").on('hide.bs.modal', () => $("#adults-form").trigger('reset'));
});