jQuery(document).ready(function ($) {

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

    $("#students-form").ajaxForm({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        dataType: 'json',
        beforeSend: () => {
            $("#btn-students-form").attr('disabled', true);
            $("#btn-students-form").html('Procesando <i class="fa fa-spinner fa-spin fa-fw"></i>');
        },
        success: response => {
            $("#btn-students-form").removeAttr('disabled');
            $("#btn-students-form").html('<i class="fa fa-fw fa-send"></i> Enviar');
            $("#students-modal").modal('hide');

            setTimeout(() => message((response.type == 'success' ? 'Éxito' : 'Oops'), response.text, response.type), 1000);
        }
    });

    $("#students-modal").on('hide.bs.modal', () => $("#students-form").trigger('reset'));

    $("#mothers-form").ajaxForm({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        dataType: 'json',
        beforeSend: () => {
            $("#btn-mothers-form").attr('disabled', true);
            $("#btn-mothers-form").html('Procesando <i class="fa fa-spinner fa-spin fa-fw"></i>');
        },
        success: response => {
            $("#btn-mothers-form").removeAttr('disabled');
            $("#btn-mothers-form").html('<i class="fa fa-fw fa-send"></i> Enviar');
            $("#mothers-modal").modal('hide');

            setTimeout(() => message((response.type == 'success' ? 'Éxito' : 'Oops'), response.text, response.type), 1000);
        }
    });

    $("#mothers-modal").on('hide.bs.modal', () => $("#mothers-form").trigger('reset'));

    $("#adults-form").ajaxForm({
        url: $(this).attr('action'),
        type: $(this).attr('method'),
        dataType: 'json',
        beforeSend: () => {
            $("#btn-adults-form").attr('disabled', true);
            $("#btn-adults-form").html('Procesando <i class="fa fa-spinner fa-spin fa-fw"></i>');
        },
        success: response => {
            $("#btn-adults-form").removeAttr('disabled');
            $("#btn-adults-form").html('<i class="fa fa-fw fa-send"></i> Enviar');
            $("#adults-modal").modal('hide');

            setTimeout(() => message((response.type == 'success' ? 'Éxito' : 'Oops'), response.text, response.type), 1000);
        }
    });

    $("#adults-modal").on('hide.bs.modal', () => $("#adults-form").trigger('reset'));
});