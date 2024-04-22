jQuery(document).ready(function ($) {

    let records_table = new DataTable('#records-table', {
        language: {
            url: 'https://cdn.datatables.net/plug-ins/2.0.5/i18n/es-ES.json',
        },
        lengthChange: false,
        layout: {
            topStart: {
                buttons: [
                    { "extend": 'excelHtml5', "text": '<i class="fa fa-file-excel-o" aria-hidden="true"></i> XLSX', "className": 'btn btn-success' },
                    { "extend": 'pdfHtml5', "text": '<i class="fa fa-file-pdf-o" aria-hidden="true"></i> PDF', "className": 'btn btn-danger' },
                    { "extend": 'csvHtml5', "text": '<i class="fa fa-file-excel-o" aria-hidden="true"></i> CSV', "className": 'btn btn-success' }
                ]
            }
        }
    });
    records_table.column('0').order('desc').draw();
});