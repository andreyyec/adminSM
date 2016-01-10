$(function(){

	var dataTable,
	row = '#dataTable tbody tr',
	modal = '#action-modal',
	modalTitle = $(modal).find('.modal-title'),
	modalActionbtn = $(modal).find('.btn-action'),
	modalForm = $('#modalForm'),
	modalEditableElement = $(modal).find('[data-reference]');

	ADMSM.initFormElements();

	function initDataTable(response){
		dataTable = $('#dataTable').dataTable({
			aoColumns: [
		      { sTitle: 'ID' }, // ID DB
		      { sTitle: 'Número' }, //Numero Poliza
		      { sTitle: 'Nombre' }, // Nombre Poliza
		      { sTitle: 'Tipo de identificación del patrono' },
		      { sTitle: 'Identificación del patrono' },
		      { sTitle: 'Patrono' }, // Nombre Patrono
		      { sTitle: 'Telefono del patrono' },
		      { sTitle: 'Fax del patrono'},
		      { sTitle: 'Correo del patrono' },
		      { sTitle: 'Dirección de la empresa' }, // ACTIVE
		      { sTitle: 'Activa' }, // ACTIVE
		      { sTitle: 'Acciones' } // ACTIONS
		    ],
        	columnDefs: [
			    {visible: false, targets: [0,3,4,6,7,8,9]},
			    { className: 'text-center', targets: [10,11] }
			],
            data: response,
            language: {
			    sProcessing:     'Procesando...',
			    sLengthMenu:     'Mostrar _MENU_ registros',
			    sZeroRecords:    'No se encontraron resultados',
			    sEmptyTable:     'Ningún dato disponible en esta tabla',
			    sInfo:           'Mostrando registros del _START_ al _END_ de un total de _TOTAL_ registros',
			    sInfoEmpty:      'Mostrando registros del 0 al 0 de un total de 0 registros',
			    sInfoFiltered:   '(filtrado de un total de _MAX_ registros)',
			    sInfoPostFix:    '',
			    sSearch:         'Buscar:',
			    sUrl:            '',
			    sInfoThousands:  ',',
			    sLoadingRecords: 'Cargando...',
			    oPaginate: {
			        sFirst:    'Primero',
			        sLast:     'Último',
			        sNext:     'Siguiente',
			        sPrevious: 'Anterior'
			    },
			    oAria: {
			        sSortAscending:  ': Activar para ordenar la columna de manera ascendente',
			        sSortDescending: ': Activar para ordenar la columna de manera descendente'
			    }
			}
        }).api();
	}

	function cleanModal(elements){
		$.each(elements ,function (){
			that = $(this);

			if (that.is('input')) {
				if (that.attr('type') !== 'checkbox') {
					$(this).val('');
				}else{
					console.log('isCheckbox');
				}
			}else if (that.is('select')) {
				$(that.find('option')[0]).attr('selected','selected');
			};
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
			cleanModal(modalEditableElement);
			$(modalTitle).html('Crear Póliza');
			$(modalActionbtn).html('<i class="fa fa-check"></i> Crear')
						 .attr('class', 'btn btn-success btn-submit');
			$(modal).modal('show');
		});

		$(modal).on('click', '.btn-submit', function(){
			$(modalForm).valid();
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
		var requiredMessage = 'Campo requerido';

		$(modalForm).validate({
  			onsubmit: false,
  			rules: {
			    policyName: {
			    	required: true,
			    	maxlength: 40
			    },
			    policyNumber: {
			    	required: true,
			    	digits: true,
			    	maxlength: 7
			    },
			    idType: {
			    	required: true,
			    },
			    employerIdNumber: {
			    	required: true,
			    	digits: true
			    },
			    employerName: {
			    	required: true,
			    },
			    employerPhone: {
			    	required: true,
			    	digits: true,
			    	rangelength: [8, 8]
			    },
			    employerFax: {
			    	digits: true,
			    	rangelength: [8, 8]
			    },
			    employerEmail: {
			    	required: true,
			    	email: true,
			    	maxlength: 80
			    },
			    employerAddress: {
			    	required: true,
			    	maxlength: 250
			    }
			},
			messages: {
			    policyName: {
			    	required: requiredMessage,
			    	maxlength: 'Máximo 40 caracteres'
			    },
			    policyNumber: {
			    	required: requiredMessage,
			    	digits: 'Ingresar solo números',
			    	maxlength: 'Máximo 7 dígitos'
			    },
			    employerIdNumber: {
			    	required: requiredMessage,
			    	digits: 'Ingresar solo números'
			    },
			    employerName: {
			    	required: requiredMessage
			    },
			    employerPhone: {
			    	required: requiredMessage,
			    	digits: 'Ingresar solo números',
			    	rangelength: '8 dígitos requeridos'
			    },
			    employerFax: {
			    	digits: 'Ingresar solo números',
			    	rangelength: '8 dígitos requeridos'
			    },
			    employerEmail: {
			    	required: requiredMessage,
			    	email: 'Formato de correo invalido',
			    	maxlength: 'Máximo 80 caracteres'
			    },
			    employerAddress: {
			    	required: requiredMessage,
			    	maxlength: 'Máximo 250 caracteres'
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