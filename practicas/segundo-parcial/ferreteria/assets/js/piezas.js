jQuery(document).ready(function($) {
	
	var tabla_piezas = $('#tabla-piezas').DataTable({
	    lengthChange: false,
	    language: {
	        sProcessing: "Procesando...",
	        sLengthMenu: "Mostrar _MENU_ registros",
	        sZeroRecords: "No se encontraron resultados",
	        sEmptyTable: "Ningún dato disponible en esta tabla",
	        sInfo: "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
	        sInfoEmpty: "Mostrando registros del 0 al 0 de un total de 0 registros",
	        sInfoFiltered: "(filtrado de un total de _MAX_ registros)",
	        sInfoPostFix: "",
	        sSearch: "Buscar:",
	        sUrl: "",
	        sInfoThousands: ",",
	        sLoadingRecords: "Cargando...",
	        oPaginate: {
	            sFirst: "Primero",
	            sLast: "Último",
	            sNext: "Siguiente",
	            sPrevious: "Anterior"
	        },
	        oAria: {
	            sSortAscending: ": Activar para ordenar la columna de manera ascendente",
	            sSortDescending: ": Activar para ordenar la columna de manera descendente"
	        }
	    },
	    buttons: [
	        {
	            extend: 'csv',
	            text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i> .CSV',
	            className: 'btn btn-success',
	            footer: true,
	            exportOptions: {
	                columns: [0, 1, 2, 3, 4, 5]
	            }
	        },
	        {
	            extend: 'excel',
	            text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i> .XLSX',
	            className: 'btn btn-success',
	            footer: true,
	            exportOptions: {
	                columns: [0, 1, 2, 3, 4, 5]
	            }
	        },
	        {
	            extend: 'pdf',
	            text: '<i class="fa fa-file-pdf-o" aria-hidden="true"></i> .PDF',
	            className: 'btn btn-danger',
	            footer: true,
	            /* orientation: 'landscape', */
	            exportOptions: {
	                columns: [0, 1, 2, 3, 4, 5]
	            }
	        },
	        {
	            extend: 'copy',
	            text: '<i class="fa fa-copy" aria-hidden="true"></i> Copiar',
	            className: 'btn btn-warning',
	            exportOptions: {
	                columns: [0, 1, 2, 3, 4, 5]
	            }
	        } 
	    ]
	});
	tabla_piezas.buttons().container().appendTo('#exportar-piezas .col-sm-6:eq(0)');

	/**
	 * [redireccionarPiezas description]
	 * @return {[type]} [description]
	 */
	function redireccionarPiezas() {
	    location.href="piezas.php";
	}

	$("#form-guardar").ajaxForm({
		url: $(this).attr('action'),
		method: 'post',
		beforeSend: function(){
			$("#btn-guardar").attr('disabled', true);
			$("#btn-guardar").html('<i class="fa fa-spinner fa-spin fa-fw"></i> Espere....');
		},
		success: function(response){
			if (response == "Exito") {
				swal({
					position: 'top-end',
				  	type: 'success',
				  	title: 'Registro guardado con Éxito.',
				  	showConfirmButton: false,
				  	timer: 1500
				});		
				setTimeout(redireccionarPiezas, 1500);		
			} else if (response == "Fallido") {
				swal({
					position: 'top-end',
				  	type: 'error',
				  	title: 'Lo sentimos pero ocurrió un error al guardar este registro.',
				  	showConfirmButton: false,
				  	timer: 1500
				});			
			} else if (response == "Existente") {
				swal({
					position: 'top-end',
				  	type: 'warning',
				  	title: 'Lo sentimos pero este registro ya existe.',
				  	showConfirmButton: false,
				  	timer: 1500
				});			
			}
			$("#btn-guardar").removeAttr('disabled');
			$("#btn-guardar").html('<span class="glyphicon glyphicon-floppy-disk"></span> Guardar');
		}
	});	

	$("#form-actualizar").ajaxForm({
		url: $(this).attr('action'),
		method: 'post',
		beforeSend: function(){
			$("#btn-actualizar").attr('disabled', true);
			$("#btn-actualizar").html('<i class="fa fa-spinner fa-spin fa-fw"></i> Espere....');
		},
		success: function(response){
			if (response == "Exito") {
				swal({
					position: 'top-end',
				  	type: 'success',
				  	title: 'Registro actualizado con Éxito.',
				  	showConfirmButton: false,
				  	timer: 1500
				});				
				setTimeout(redireccionarPiezas, 1500);		
			} else if (response == "Fallido") {
				swal({
					position: 'top-end',
				  	type: 'error',
				  	title: 'Lo sentimos pero ocurrió un error al actualizar este registro.',
				  	showConfirmButton: false,
				  	timer: 1500
				});			
			} else if (response == "Existente") {
				swal({
					position: 'top-end',
				  	type: 'warning',
				  	title: 'Lo sentimos pero este registro ya existe.',
				  	showConfirmButton: false,
				  	timer: 1500
				});			
			}
			$("#btn-actualizar").removeAttr('disabled');
			$("#btn-actualizar").html('<span class="glyphicon glyphicon-refresh"></span> Actualizar');
		}
	});

	$(".btn-eliminar").click(function(event){
		var pieza_id = $(this).attr('id');

		swal({
			title: '¿Eliminar la pieza No. ' + pieza_id  + ' ?',
			text: "Tu no podrás revertir esta acción!",
			type: 'warning',
			showCancelButton: true,
			confirmButtonColor: '#5BC0DE',
			cancelButtonColor: '#D9534F',
			confirmButtonText: '<span class="glyphicon glyphicon-trash"></span> Si, Eliminar',
			cancelButtonText: '<span class="glyphicon glyphicon-remove-circle"></span> Cancelar',
			confirmButtonClass: 'btn btn-info',
			cancelButtonClass: 'btn btn-danger',
			buttonsStyling: false,
		  	reverseButtons: true
		}).then((result) => {
		  	if (result.value) {
			    $.ajax({
			    	data: {id: pieza_id },
			    	url: 'piezas/eliminar.php',
			    	type: 'post',
			    	success: function(response){
			    		if (response == "Exito") {
			    			swal({
			    				position: 'top-end',
			    			  	type: 'success',
			    			  	title: 'Registro eliminado con Éxito.',
			    			  	showConfirmButton: false,
			    			  	timer: 1500
			    			});
			    			setTimeout(redireccionarPiezas, 1500);		
			    		} else if (response == "Fallido") {
			    			swal({
			    				position: 'top-end',
			    			  	type: 'error',
			    			  	title: 'Lo sentimos pero ocurrió un error al eliminar este registro.',
			    			  	showConfirmButton: false,
			    			  	timer: 1500
			    			});
			    		} else {

			    		}
			    	}
			    });
		  	} else if (
		    	// Read more about handling dismissals
		    	result.dismiss === swal.DismissReason.cancel
		  	) {
			    swal(
			    	'Recordatorio',
			      	'Al eliminar algún registro no habrá manera de recuperarlo de esta acción.',
			      	'info'
			    );	
		  	}
		});		
	});
});