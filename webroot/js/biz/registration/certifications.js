$(document).ready(function(){


	//ADD NEW ROW
	$(document).on('click','a.add-certificate',function(){
		var row = $(this).parents('tr:first');
		
		if(validate_cetification_data(row)){  //VALIDATE ROW
			row.clone().insertAfter('#CertificationsTable tr:last'); //CLONE ROW
			row.find('input,select,textarea').attr('readonly','readonly'); //ADD READ ONLY ATTRIBUTE ON ROW INPUT ELEMENTS
			$('#CertificationsTable tr:last').find('.datepicker').datepicker(); //INIT NEW ROW DATEPICKER INPUT
			$('#CertificationsTable tr:last').find('input,select,textarea').val(''); //EMPTY NEW ROW INPUT ELEMENTS
			$(this).replaceWith('<a class="glyphicon glyphicon-edit edit-certificate" data-toggle="tooltip" title="Edit Row"></a>');//REPLACE ADD ICON HTML TAG
			update_row_index();//UPDATE ROW INDEX
			reinit_tooltip();	
		}
	});
	
	//EDIT ROW
	$(document).on('click','.edit-certificate',function(){
		var row = $(this).parents('tr:first');
		row.find('input,select,textarea').removeAttr('readonly','readonly'); //REMOVE READ ONLY ATTRIBUTE ON ROW INPUT ELEMENTS
		$(this).replaceWith('<a class="glyphicon glyphicon-floppy-save save-certificate" data-toggle="tooltip" title="Save Row"></a>');//REPLACE EDIT BUTTON
		reinit_tooltip();
		disable_last_row();
	});
	
	//SAVE ROW
	$(document).on('click','.save-certificate',function(){
		var row = $(this).parents('tr:first');
		
		if(validate_cetification_data(row)){  //VALIDATE ROW			
			row.find('input,select,textarea').attr('readonly','readonly'); //ADD READ ONLY ATTRIBUTE ON ROW INPUT ELEMENTS
			$(this).replaceWith('<a class="glyphicon glyphicon-edit edit-certificate" data-toggle="tooltip" title="Edit Row"></a>');//REPLACE SAVE BUTTON
			reinit_tooltip();
			enable_last_row();
		}
	});
	
	//DELETE ROW
	$(document).on('click','.delete-certificate',function(){
		var row = $(this).parents('tr:first');
		
		if (confirm("Are you sure you want to remove this row?")) {
			//DELETE ON HTML ROW
			if($('#CertificationsTable tbody tr').length ==1){
				$('#CertificationsTable tbody').find('input,select,textarea').val('');
				return;
			}
			row.remove();	
		}
	});
	
	//VALIDATE ROW CERTIFICATION DATA
	function validate_cetification_data(row){
		var kill = 0;
		$.each($(row).find('input:visible,select:visible,textarea:visible'),function(i,o){
			if(!$(o).val().length){
				kill = 1;
				$(o).focus().parents('td:first').addClass('has-error');
				return false;
			}else $(o).parents('td:first').removeClass('has-error');
		});
			
		if(kill != 1) return true;
		else return false;
	}
	
	//UPDATE TABLE ROW INDEX
	function update_row_index(){
		$.each($('#CertificationsTable tbody tr'),function(index,row){
			$.each($(row).find('input,select,textarea'),function(i,o){
				var field = $(o).attr('field');
				$(o).attr('name',"data[TemporaryRegistrationCertification]["+$(row).index()+"]["+field+"]");
			}); 
		}); 
	}
	
	//RE INITIALIZE TOOL TIP
	function reinit_tooltip(){
		$('.tooltip').removeClass('in'); //HIDE TOOLTIP
		$('[data-toggle="tooltip"]').tooltip(); //REINIT TOOLTIP	
	}
	
	//DISABLE LAST ROW
	function disable_last_row(){
		$('#CertificationsTable tr:last').find('input,select,textarea').attr('disabled','disabled');
		$('#CertificationsTable tr:last').find('.add-certificate').replaceWith('<span class="glyphicon glyphicon-plus-sign add-certificate" data-toggle="tooltip" data-original-title="Button is disabled. Some row is on edit mode"></span>');
		reinit_tooltip();
	}

	//ENABLE LAST ROW
	function enable_last_row(){
		$('#CertificationsTable tr:last').find('input,select,textarea').removeAttr('disabled','disabled');
		$('#CertificationsTable tr:last').find('.add-certificate').replaceWith('<a class="glyphicon glyphicon-plus-sign add-certificate" data-toggle="tooltip" data-original-title="Add Row"></a>');
		reinit_tooltip();
	}
});