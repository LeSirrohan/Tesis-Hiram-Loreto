var TableAdvanced = function () {

    var initTable = function () {
        var table = $('#reportes1');

        /* Table tools samples: https://www.datatables.net/release-datatables/extras/TableTools/ */

        /* Set tabletools buttons and button container */

        $.extend(true, $.fn.DataTable.TableTools.classes, {
            "container": "btn-group tabletools-btn-group pull-right",
            "buttons": {
                "normal": "btn btn-sm default",
                "disabled": "btn btn-sm default disabled"
            }
        });

        var oTable = table.dataTable({
        "processing": false,

            // Internationalisation. For more info refer to http://datatables.net/manual/i18n
            "paging":   true,
            "ordering": true,
            "info":     false,
            "searching":     true,
            "language": {
                "aria": {
                    "sortAscending": ": activate to sort column ascending",
                    "sortDescending": ": activate to sort column descending"
                },
                "emptyTable": "No hay datos disponibles en la tabla",
                "info": "Mostrando _START_ de _END_ de  _TOTAL_ registros",
                "infoEmpty": "No se encontraron registros",
                "infoFiltered": "(filtrados de _MAX_ total registros)",
                "lengthMenu": "Entradas _MENU_",
                "search": "Buscar:",
                "zeroRecords": "No se encontraron registros"
            },

            "ColumnDefs": [
                    { 'Sortable': false, 'Targets': [3] },
                    { "Searchable": false, "Targets": [ 3 ] },
                    { 'Sortable': false, 'Targets': [2] },
                    { "Searchable": false, "Targets": [ 2 ] },
                    { "Width": "8%", "Targets": [2] },
                    { "Width": "8%", "Targets": [3] }
                ],
            "lengthMenu": [
                [5,10, 15, 20, -1],
                [5,10, 15, 20, "Todo"] // change per page values here
            ],

            // set the initial value
            "pageLength": 10,
            "serverSide": true,
            "ajax": {
                    "url": "../../Control/listarReportes8.php" // ajax source
                },

                "order": [
                    [0, "desc"]
                ] // set first column as a default sort by asc
        });


    }

    return {

        //main function to initiate the module
        init: function () {

            if (!jQuery().dataTable) {
                return;
            }

            //ListarTabla();
            initTable();

        }

    };

}();
