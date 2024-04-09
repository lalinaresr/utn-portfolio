jQuery(document).ready(function($) {

	// Comprobar cuando cambia un checkbox
	/* $('input[type=checkbox]').on('change', function() {
	    if ($(this).is(':checked') ) {
	        $("#cantidad_" + $(this).val()).attr('required', 'true');
	        //alert("Checkbox " + $(this).prop("id") +  " (" + $(this).val() + ") => Seleccionado");
	    } else {
	        $("#cantidad_" + $(this).val()).removeAttr('required');
	        $("#cantidad_" + $(this).val()).val('');
	        //alert("Checkbox " + $(this).prop("id") +  " (" + $(this).val() + ") => Deseleccionado");
	    }
	});

	$('.btn-checar-productos').click(function() {
		var requiredCheckboxes = $('.opciones-marcas :checkbox[required]');
	    requiredCheckboxes.change(function(){
	        if(requiredCheckboxes.is(':checked')) {
	            requiredCheckboxes.removeAttr('required');
	        } else {
	            requiredCheckboxes.attr('required', 'required');
	        }
	    });
	}); */

	/*$("#forma_pago").on('change', function(){
		if ($(this).val() == "tarjeta") {
			$(".pago-tarjeta").removeClass('hidden');
		} else {
			$(".pago-tarjeta").addClass('hidden')
		}
	});*/
});