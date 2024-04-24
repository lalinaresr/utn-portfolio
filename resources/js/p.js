jQuery(document).ready(function ($) {

    let records_table = new DataTable('#records-table', {
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
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    },
                    {
                        extend: 'pdfHtml5',
                        className: 'btn btn-danger',
                        text: '<i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                        },
                        orientation: 'portrait',
                        pageSize: 'LEGAL',
                        download: 'open'
                    },
                    {
                        extend: 'csvHtml5',
                        className: 'btn btn-success',
                        text: '<i class="fa fa-file-excel-o" aria-hidden="true"></i> CSV',
                        exportOptions: {
                            columns: [0, 1, 2, 3, 4, 5, 6, 7, 8]
                        }
                    }
                ]
            }
        }
    });
    records_table.column('0').order('desc').draw();
});