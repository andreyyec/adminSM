$(function(){

	var dataTable,
	row = '#dataTable tbody tr',
	modal = '#action-modal',
	modalTitle = $(modal).find('.modal-title'),
	modalActionbtn = $(modal).find('.btn-action');

	function initDataTable(response){
		dataTable = $('#dataTable').dataTable({
        	"columnDefs": [
			    { "visible": false, "targets": 0 },
			    { className: "text-center", "targets": 5 }
			],
            "data": response,
            "language": {
			    "sProcessing":     "Procesando...",
			    "sLengthMenu":     "Mostrar _MENU_ registros",
			    "sZeroRecords":    "No se encontraron resultados",
			    "sEmptyTable":     "Ningún dato disponible en esta tabla",
			    "sInfo":           "Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros",
			    "sInfoEmpty":      "Mostrando registros del 0 al 0 de un total de 0 registros",
			    "sInfoFiltered":   "(filtrado de un total de _MAX_ registros)",
			    "sInfoPostFix":    "",
			    "sSearch":         "Buscar:",
			    "sUrl":            "",
			    "sInfoThousands":  ",",
			    "sLoadingRecords": "Cargando...",
			    "oPaginate": {
			        "sFirst":    "Primero",
			        "sLast":     "Último",
			        "sNext":     "Siguiente",
			        "sPrevious": "Anterior"
			    },
			    "oAria": {
			        "sSortAscending":  ": Activar para ordenar la columna de manera ascendente",
			        "sSortDescending": ": Activar para ordenar la columna de manera descendente"
			    }
			}
        }).api();
	}

	function resetModal(){

	}

	function initModalAdd(){

	}

	function initModalEdit(data){
		$(modalTitle).html('Actualizar Póliza');
		$(modalActionbtn).html('<i class="fa fa-edit"></i> Actualizar')
						 .addClass('btn-primary');
		$(modal).modal('show');
	}

	function initModalDelete(){

	}

	function addDataTableListeners(){
		$(row).on( 'click', '.btn-edit', function () {
			var currentRow = $(this).closest('tr'),
			rowData = dataTable.row(currentRow).data();

			initModalEdit(rowData);

		});

		$(row).on( 'click', '.btn-delete', function () {
			var currentRow = $(this).closest('tr'),
			rowData = dataTable.row(currentRow).data();

	    	console.log('delete '+dataTable.row(currentRow).data());
		});
	}

	$(document).ready(function() {		
		$.ajax({ 
	        url: '/rest/getpolicies',
	        dataType : "json",
	        success: function(response) {
	            initDataTable(response);
	            addDataTableListeners();
	        }
	    });
	});
});




