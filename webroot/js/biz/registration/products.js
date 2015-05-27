$(document).ready(function(){
	var BASEURL = '/'+window.location.pathname.split('/')[1]+'/';
	var ROW;
	set_product_table();

	//ADD PRODUCT BUTTON HANDLER
	$('#AddProductButton').click(function(){	
		var data = get_product_form_data();
		if(validate_product_form(data)){
			if($('#AddProductForm').attr('table-row')){
				var row = $('#AddProductForm').attr('table-row');
			}else{		
				if(!$('#ProductTable tbody tr:first').is(':visible')){
					$('#ProductTable tbody tr').fadeIn('slow').find('input,select,textarea').removeAttr('disabled');
					$('#ProductTable tfoot tr').hide();
					var row = $('#ProductTable tbody tr:first').index();;
				}else{
					var tr_last = $('#ProductTable').append($('#ProductTable tbody tr:last').clone()).find('tbody tr:last');
					tr_last.find('.pictures').html('');
					tr_last.find('input,select,textarea').val('').fadeIn('slow');
					var row =$('#ProductTable tbody tr:last').index();
				}
			}
			ROW =  row;
			upload_file();
			populate_product_form_data(data,row);//POPULATE PRODUCT FORM DATA
			update_row_index();//UPDATE ROW INDEX
			reset_product_form();//RESET STUDENT PRODUCT FORM 
			$('#AddProductButton').text('Add');
		}
	});
	
	//RESET PRODUCT FORM HANDLER
	$('#ResetProductButton').click(function(){	
		reset_product_form();
		$('#AddProductButton').text('Add');
		$('.onEdit').removeClass('onEdit');
	});
	
	//DELETE PRODUCT HANDLER
	$(document).on('click','.delete-product',function(){
		var row = $(this).parents('tr:first');
		if (confirm("Are you sure you want to remove this product?")) {
			//DELETE ON DB
			var id = $(row).find('[field="id"]').val();
			window.location.href = BASEURL+'temporary_registration_products/delete/'+id+'&'+window.location.href;
			//DELETE ON HTML ROW
			if($('#ProductTable tbody tr').length ==1){
				$('#ProductTable tbody').find('input,select').val('');
				$('#ProductTable tfoot tr').fadeIn();
				$('#ProductTable tbody tr').hide();
				return;
			}
			row.remove();	
		}
		
	});
	
	//VIEW PRODUCT HANDLER
	$(document).on('click','.view-product',function(){
		var row = $(this).parents('tr:first');
		$('#ProductTable tr').removeClass('onEdit onSuccess');
		$(row).addClass('onEdit');
		populate_table_row_data(row);
		$('#AddProductButton').text('Update');
	});
	
	//GET PRODUCT FORM DATA
	function get_product_form_data(){
		var data = [];
		$.each($('#AddProductForm').find('input[type!="file"]:visible,select:visible,textarea:visible'),function(i,o){
			array = { 
				'id':$(o).attr('id'),
				'field':$(o).attr('field'),
				'value':$(o).val(),
			}
			data.push(array);
		});
		//console.log(data);
		return data;
	}

	//VALIDATE PRODUCT DATA
	function validate_product_form(data){
		for(var key in data){
			//console.log(data[key]);
			if(data[key].field == 'id'){
				break;
			}
			if(!data[key].value.length){
				$('#'+data[key].id).focus().parents('div:first').addClass('has-error');
				return false;	
			}else{
				$('#'+data[key].id).parents('div:first').removeClass('has-error');
			}
		} return true;
	}


	//SET PRODUCT TABLE
	function set_product_table(){
		if(!$('#ProductTable tbody tr:first').is(':visible') && $('#ProductTable tbody tr').length == 1){
			$('#ProductTable tbody tr:first').find('input,select,textarea').attr('disabled','disabled');
		}else{
			update_row_index();
			$('#ProductTable tfoot tr').hide();
		}
	}

	//UPDATE TABLE ROW INDEX
	function update_row_index(){
		$.each($('#ProductTable tbody tr'),function(index,row){
			$.each($(row).find('input,select,textarea'),function(i,o){
				var field = $(o).attr('field');
				$(o).attr('name',"data[TemporaryRegistrationProduct]["+$(row).index()+"]["+field+"]");
			}); 
		}); 
	}

	//POPULATE PRODUCT FORM DATA TO PRODUCT TABLE,
	function populate_product_form_data(data,row){
		$('#ProductTable tbody tr:eq('+row+')').fadeOut();
		$.each(data,function(i,o){
			$('#ProductTable tbody tr:eq('+row+')').find('[field="'+o.field+'"]').val(o.value);
		}); 
		$('#ProductTable tbody tr:eq('+row+')').fadeIn().removeClass('onEdit').addClass('onSuccess');
		setTimeout(function(){$('#ProductTable tbody tr:eq('+row+')').removeClass("onSuccess");}, 6000);
	}
	
	//POPULATE TABLE ROW DATA TO PRODUCT FORM 
	function populate_table_row_data(row){
		$('#AddProductForm').fadeOut();
		$('#AddProductForm').attr('table-row',$(row).index());
		$.each($(row).find('input,select,textarea'),function(i,o){
			$('#AddProductForm').find('[field="'+$(o).attr('field')+'"]').val($(o).val());
		});
		$('#AddProductForm').fadeIn();
	}
	
	 
	//RESET PRODUCT FORM
	function reset_product_form(){
		$('#AddProductForm').attr('table-row','').find('input,select,textarea').val('');
		$("#ProductLogoPath").fileinput('reset');
	}

	//INITIALIZE FILEINPUT UPLOADER
	$("#ProductLogoPath").fileinput({
		uploadAsync :false,
		showPreview: false,
		showUpload: false,
		uploadUrl: BASEURL+"pictures/add",
		allowedFileExtensions: ["jpg", "png", "gif"],
	}).on('filebatchuploadsuccess',function(event, data, previewId, index){
		 var form = data.form, files = data.files, extra = data.extra, response = data.response, reader = data.reader;
		 
			//Image urls are available on response.imageUrls
			var target = $('input[name="data[TemporaryRegistrationProduct]['+ROW+'][pictures]"]');
			var pictures = target.val();
			pictures = pictures.split(',');
			target.val(pictures.concat(response.imageUrls).join(',')); //Combine pictures
			var markup = '';
			$.each(response.initialPreview,function(i,img){
				var url = response.imageUrls[i];
				markup+='<div class="thumbnail"><a aria-hidden="true" class="delete-picture pull-right" data-url="'+url+'" data-row="'+ROW+'">&times;</a>';
				markup+=img;
				markup+='</div>	';
			});
			console.log(markup);
			$('#ProductTable tbody tr:nth-child('+(ROW+1)+') td.pictures').append(markup);
	});
	
	//UPLOAD FILE
	function upload_file(){
		$("#ProductLogoPath").fileinput('upload');
	}
	//DELETE PICTURE
	$(document).on('click','a.delete-picture',function(){
		var $this = $(this);
		var url = $this.data('url');
		var row = $this.data('row');
		if(confirm('Are you sure you want to delete this picture?')){
			var target = $('input[name="data[TemporaryRegistrationProduct]['+row+'][pictures]"]');
			var pictures = [];
			$.each(target.val().split(','),function(i,o){
				if(o&&o!=url){
					pictures.push(o);
				}
			});
			target.val(pictures.join(','));
			$this.parent().remove();			
		}
	});
	setTimeout(function(){$('#flashMessage').remove()}, 6000);
});
