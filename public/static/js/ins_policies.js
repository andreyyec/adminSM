$(function(){

	var dataTable,
	row = '#dataTable tbody tr',
	modal = '#action-modal',
	modalTitle = $(modal).find('.modal-title'),
	modalActionbtn = $(modal).find('.btn-action'),
	modalForm = $('#modalForm'),
	modalEditableElement = $(modal).find('[data-reference]');

	function initDataTable(response){
		dataTable = $('#dataTable').dataTable({
			"aoColumns": [
		      { "sTitle": "ID" },
		      { "sTitle": 'Número' },
		      { "sTitle": 'Nombre' },
		      { "sTitle": 'Patrono' },
		      { "sTitle": 'Activa' },
		      { "sTitle": 'Acciones' }
		    ],
        	"columnDefs": [
			    { visible: false, targets: 0 },
			    { className: 'text-center', targets: [4,5] }
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

	function cleanModal(){

		$.each(modalEditableElement ,function (){
			$(this).val('');
		});

	}

	function initModalEdit(data){

		$(modalTitle).html('Actualizar Póliza');
		$(modalActionbtn).html('<i class="fa fa-edit"></i> Actualizar')
						 .attr('class', 'btn btn-primary');
		
		$.each(modalEditableElement ,function (){
			var that,
				index;

			that = $(this);
			index = parseInt($(this).attr('data-reference'));
			that.val(data[index]);
		});

		$(modal).modal('show');
	}

	function addDataTableListeners(){

		$('.btn-add').on('click', function(){
			cleanModal();
			$(modalTitle).html('Crear Póliza');
			$(modalActionbtn).html('<i class="fa fa-check"></i> Crear')
						 .attr('class', 'btn btn-success btn-submit');
			$(modal).modal('show');
		});

		$(modal).on('click', '.btn-submit', function(){
			$(modalForm).valid();
			console.log('click');
		});

		$(row).on('click', '.btn-edit', function () {
			var currentRow = $(this).closest('tr'),
			rowData = dataTable.row(currentRow).data();

			initModalEdit(rowData);

		});

		$(row).on('click', '.btn-delete', function () {
			var currentRow = $(this).closest('tr'),
			rowData = dataTable.row(currentRow).data();

	    	console.log('delete '+dataTable.row(currentRow).data());
		});
	}

	function addValidations() {
		$(modalForm).validate({
  			onsubmit: false,
  			rules: {
			    policyName: {
			      required: true,
			    }
			  },
			messages: {
			    policyName: {
			      required: 'Campo requerido',
			    }
			}
		});
	}

	$(document).ready(function() {
		addValidations();
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