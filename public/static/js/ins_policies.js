$(function(){

	var dataTable;

	function initDataTable(response){
		dataTable = $('#dataTable').dataTable({
        	"columnDefs": [
			    { "visible": false, "targets": 0 }
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

	function addDataTableHandlers(){
		$('#dataTable tbody').on( 'click', 'tr', function () {
	    	console.log( dataTable.row( this ).data() );
		});

		$('#dataTable tbody').on( 'click', 'tr', function () {
	    	console.log( dataTable.row( this ).data() );
		});
	}

	$(document).ready(function() {		
		$.ajax({ 
	        url: '/rest/getpolicies',
	        dataType : "json",
	        success: function(response) {
	            initDataTable(response);
	            addDataTableHandlers();
	        }
	    });
	});
});




