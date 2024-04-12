jQuery(document).ready(function ($) {

	const swalWithBootstrapButtons = Swal.mixin({
		customClass: {
			confirmButton: "btn btn-info",
			cancelButton: "btn btn-default"
		},
		buttonsStyling: false
	});

	var tabla_ventas = $('#tabla-ventas').DataTable({
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
					columns: [0, 1, 2, 3, 4, 5, 6]
				}
			},
			{
				extend: 'excel',
				text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i> .XLSX',
				className: 'btn btn-success',
				footer: true,
				exportOptions: {
					columns: [0, 1, 2, 3, 4, 5, 6]
				}
			},
			{
				extend: 'pdf',
				text: '<i class="fa fa-file-pdf-o" aria-hidden="true"></i> .PDF',
				className: 'btn btn-danger',
				footer: true,
				/* orientation: 'landscape', */
				exportOptions: {
					columns: [0, 1, 2, 3, 4, 5, 6]
				}
			},
			{
				extend: 'copy',
				text: '<i class="fa fa-copy" aria-hidden="true"></i> Copiar',
				className: 'btn btn-warning',
				exportOptions: {
					columns: [0, 1, 2, 3, 4, 5, 6]
				}
			}
		]
	});
	tabla_ventas.buttons().container().appendTo('.col-sm-6:eq(0)');

	/**
	 * [redireccionarVentas description]
	 * @return {[type]} [description]
	 */
	function redireccionarVentas() {
		location.href = "ventas.php";
	}

	$("#form-guardar").ajaxForm({
		url: $(this).attr('action'),
		method: 'post',
		beforeSend: function () {
			$("#btn-guardar").attr('disabled', true);
			$("#btn-guardar").html('<i class="fa fa-spinner fa-spin fa-fw"></i> Espere....');
		},
		success: function (response) {
			if (response == "Exito") {
				swalWithBootstrapButtons.fire({
					title: 'Éxito',
					text: 'Registro guardado con Éxito.',
					icon: 'success'
				});
				setTimeout(redireccionarVentas, 1500);
			} else if (response == "Fallido") {
				swalWithBootstrapButtons.fire({
					title: 'Oops',
					text: 'Lo sentimos pero ocurrió un error al guardar este registro.',
					icon: 'error'
				});
			} else if (response == "Existente") {
				swalWithBootstrapButtons.fire({
					title: 'Duplicado',
					text: 'Lo sentimos pero este registro ya existe.',
					icon: 'warning'
				});
			}
			$("#btn-guardar").removeAttr('disabled');
			$("#btn-guardar").html('<span class="glyphicon glyphicon-floppy-disk"></span> Guardar');
		}
	});

	$("#form-actualizar").ajaxForm({
		url: $(this).attr('action'),
		method: 'post',
		beforeSend: function () {
			$("#btn-actualizar").attr('disabled', true);
			$("#btn-actualizar").html('<i class="fa fa-spinner fa-spin fa-fw"></i> Espere....');
		},
		success: function (response) {
			if (response == "Exito") {
				swalWithBootstrapButtons.fire({
					title: 'Éxito',
					text: 'Registro actualizado con Éxito.',
					icon: 'success'
				});
				setTimeout(redireccionarVentas, 1500);
			} else if (response == "Fallido") {
				swalWithBootstrapButtons.fire({
					title: 'Oops',
					text: 'Lo sentimos pero ocurrió un error al actualizar este registro.',
					icon: 'error'
				});
			} else if (response == "Existente") {
				swalWithBootstrapButtons.fire({
					title: 'Duplicado',
					text: 'Lo sentimos pero este registro ya existe.',
					icon: 'warning'
				});
			}
			$("#btn-actualizar").removeAttr('disabled');
			$("#btn-actualizar").html('<span class="glyphicon glyphicon-refresh"></span> Actualizar');
		}
	});
});