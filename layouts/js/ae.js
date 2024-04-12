jQuery(document).ready(function ($) {

    const swalWithBootstrapButtons = Swal.mixin({
        customClass: {
            confirmButton: "btn btn-info",
            cancelButton: "btn btn-default"
        },
        buttonsStyling: false
    });

    /*===============================================
    =            Apartado de Estudiantes            =
    ===============================================*/
    $("#estado_estudiante").on('change', function () {
        if ($("#estado_estudiante").val() == "Otro") {
            $("#calificacion").attr('disabled', true);
            $("#edad_estudiante").attr('disabled', true);
            $("#btn-solicitud-estudiante").attr('disabled', true);
        } else {
            $("#calificacion").removeAttr('disabled');
            $("#edad_estudiante").removeAttr('disabled');
            $("#btn-solicitud-estudiante").removeAttr('disabled');
        }
    });
    $("#form-apoyo-estudiantes").ajaxForm({
        url: $(this).attr('action'),
        method: 'post',
        dataType: 'json',
        beforeSend: function () {
            $("#btn-solicitud-estudiante").attr('disabled', true);
            $("#btn-solicitud-estudiante").html('<i class="fa fa-spinner fa-spin fa-fw"></i> Verificando');
        },
        success: function (response) {
            if (response['mensaje'] == "ErrorEstudiante") {
                swalWithBootstrapButtons.fire({
                    title: 'Oops',
                    text: 'Lo sentimos pero no fue acreditado para poder obtener el apoyo.',
                    icon: 'error'
                });
            } else {
                swalWithBootstrapButtons.fire({
                    title: 'Éxito',
                    text: `Felicidades ${response['nombreCompleto']}, has logrado obtener el apoyo de 1000 pesos mexicanos`,
                    icon: 'success'
                });
            }
            $("#btn-solicitud-estudiante").removeAttr('disabled');
            $("#btn-solicitud-estudiante").html('<i class="fa fa-fw fa-send"></i> Enviar');
        }
    });
    /*=====  End of Apartado de Estudiantes  ======*/

    /*===================================================
    =            Apartado de Madres Solteras            =
    ===================================================*/
    $("#estado_civil").on('change', function () {
        if ($("#estado_civil").val() == "Otro") {
            $("#estado_madre_soltera").attr('disabled', true);
            $("#hijo_menor_edad").attr('disabled', true);
            $("#edad_hijo").attr('disabled', true);
            $("#btn-solicitud-madre-soltera").attr('disabled', true);
        } else {
            $("#estado_madre_soltera").removeAttr('disabled');
            $("#hijo_menor_edad").removeAttr('disabled');
            $("#edad_hijo").removeAttr('disabled');
            $("#btn-solicitud-madre-soltera").removeAttr('disabled');
        }
    });
    $("#estado_madre_soltera").on('change', function () {
        if ($("#estado_madre_soltera").val() == "Otro") {
            $("#estado_civil").attr('disabled', true);
            $("#hijo_menor_edad").attr('disabled', true);
            $("#edad_hijo").attr('disabled', true);
            $("#btn-solicitud-madre-soltera").attr('disabled', true);
        } else {
            $("#estado_civil").removeAttr('disabled');
            $("#hijo_menor_edad").removeAttr('disabled');
            $("#edad_hijo").removeAttr('disabled');
            $("#btn-solicitud-madre-soltera").removeAttr('disabled');
        }
    });
    $("#hijo_menor_edad").on('change', function () {
        if ($("#hijo_menor_edad").val() == "No") {
            $("#estado_civil").attr('disabled', true);
            $("#estado_madre_soltera").attr('disabled', true);
            $("#edad_hijo").attr('disabled', true);
            $("#btn-solicitud-madre-soltera").attr('disabled', true);
        } else {
            $("#estado_civil").removeAttr('disabled');
            $("#estado_madre_soltera").removeAttr('disabled');
            $("#edad_hijo").removeAttr('disabled');
            $("#btn-solicitud-madre-soltera").removeAttr('disabled');
        }
    });
    $("#form-apoyo-madres-solteras").ajaxForm({
        url: $(this).attr('action'),
        method: 'post',
        beforeSend: function () {
            $("#btn-solicitud-madre-solteras").attr('disabled', true);
            $("#btn-solicitud-madre-solteras").html('<i class="fa fa-spinner fa-spin fa-fw"></i> Verificando');
        },
        success: function (response) {
            if (response == "ErrorMadreSoltera") {
                swalWithBootstrapButtons.fire({
                    title: 'Oops',
                    text: 'Lo sentimos pero no fue acreditada para poder obtener el apoyo.',
                    icon: 'error'
                });
            } else {
                swalWithBootstrapButtons.fire({
                    title: 'Éxito',
                    text: 'Felicidades has logrado obtener el apoyo de 1200 pesos mexicanos.',
                    icon: 'success'
                });
            }
            $("#btn-solicitud-madre-solteras").removeAttr('disabled');
            $("#btn-solicitud-madre-solteras").html('<i class="fa fa-fw fa-send"></i> Enviar');
        }
    });
    /*=====  End of Apartado de Madres Solteras  ======*/

    /*================================================
    =            Apartado Adultos Mayores            =
    ================================================*/
    $("#estado_adulto_mayor").on('change', function () {
        if ($("#estado_adulto_mayor").val() == "Otro") {
            $("#edad_adulto_mayor").attr('disabled', true);
            $("#btn-solicitud-adulto-mayor").attr('disabled', true);
        } else {
            $("#edad_adulto_mayor").removeAttr('disabled');
            $("#btn-solicitud-adulto-mayor").removeAttr('disabled');
        }
    });
    $("#form-apoyo-adultos-mayores").ajaxForm({
        url: $(this).attr('action'),
        method: 'post',
        beforeSend: function () {
            $("#btn-solicitud-adulto-mayor").attr('disabled', true);
            $("#btn-solicitud-adulto-mayor").html('<i class="fa fa-spinner fa-spin fa-fw"></i> Verificando');
        },
        success: function (response) {
            if (response == "ErrorAdultoMayor") {
                swalWithBootstrapButtons.fire({
                    title: 'Oops',
                    text: 'Lo sentimos pero no fue acreditado para poder obtener el apoyo.',
                    icon: 'error'
                });
            } else {
                swalWithBootstrapButtons.fire({
                    title: 'Éxito',
                    text: 'Felicidades has logrado obtener el apoyo de 900 pesos mexicanos.',
                    icon: 'success'
                });
            }
            $("#btn-solicitud-adulto-mayor").removeAttr('disabled');
            $("#btn-solicitud-adulto-mayor").html('<i class="fa fa-fw fa-send"></i> Enviar');
        }
    });
    /*=====  End of Apartado Adultos Mayores  ======*/
});