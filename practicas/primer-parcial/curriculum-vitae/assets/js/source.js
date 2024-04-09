jQuery(document).ready(function($){

	$("#mis-trabajos").owlCarousel({
	 	/* navigation : true, */
	    slideSpeed : 300,
	    paginationSpeed : 400,
	    singleItem:true
	 
	    // "singleItem:true" is a shortcut for:
	    // items : 1, 
	    // itemsDesktop : false,
	    // itemsDesktopSmall : false,
	    // itemsTablet: false,
	    // itemsMobile : false	 
	});

	$("#btn-datos-personales").on('click', function(event){
		event.preventDefault();

		$('#tabsMenu a[href="#divTabDatosPersonales"]').tab('show');
	});
	$("#btn-educacion").on('click', function(event){
		event.preventDefault();

		$('#tabsMenu a[href="#divTabEducacion"]').tab('show');
	});
	$('.btn-checar-educacion').click(function() {
		var requiredCheckboxes = $('.opciones-cursos :checkbox[required]');
	    requiredCheckboxes.change(function(){
	        if(requiredCheckboxes.is(':checked')) {
	            requiredCheckboxes.removeAttr('required');
	        } else {
	            requiredCheckboxes.attr('required', 'required');
	        }
	    });
	});
	$("#btn-experiencia").on('click', function(event){
		event.preventDefault();

		$('#tabsMenu a[href="#divTabExperiencia"]').tab('show');
	});
	$('.btn-checar-experiencia').click(function() {
		var requiredCheckboxes = $('.opciones-conocimientos :checkbox[required]');
	    requiredCheckboxes.change(function(){
	        if(requiredCheckboxes.is(':checked')) {
	            requiredCheckboxes.removeAttr('required');
	        } else {
	            requiredCheckboxes.attr('required', 'required');
	        }
	    });
	});
	$(".btn-regresar-inicio").on('click', function(event){
		event.preventDefault();

		$('#tabsMenu a[href="#divTabPantallazo"]').tab('show');
	});
});