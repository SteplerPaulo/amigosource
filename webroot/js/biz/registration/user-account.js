var BASE_URL ='/'+window.location.pathname.split('/')[1]+'/';
$(document).ready(function(){
	$('#Disable').click();

	
	//EMAIL EVENT HANDLER
	$('#TemporaryRegistrationEmail').on('blur',function(){
		var email = $(this).val();
		$.ajax({
			url:BASE_URL+'temporary_registrations/existing_email_validation',
			dataType:'json',
			data:{'data':{'email':email}},
			type:'post',
			beforeSend:function(){
				$('#TemporaryRegistrationEmail').siblings('.help-inline').remove();
				if(!$('#Disable').is(":checked")) $('#Disable').click();
			},
			success:function(FormReturn){
				if(email.length){
					if(FormReturn.status == "ERROR"){
						$('#TemporaryRegistrationEmail').after('<span class="help-inline error">'+FormReturn.message+'</span>');
						$('#TemporaryRegistrationEmail').select().focus();
						return;
					}
				}
			}
		}); 
	});

	
	//PASSWORD VALIDATION EVENT HANDLER
	$('#ConfirmPassword,#Password').on('change',function(){
		$('#ConfirmPassword').siblings('.help-inline').remove();
		if($('#Password').val().length){
			if($('#Password').val() != $('#ConfirmPassword').val() && $('#ConfirmPassword').val().length){
				$('#ConfirmPassword').after('<span class="help-inline error">Password did not matched</span>');
				$('#ConfirmPassword').val('').focus();
			}
		}
	});
	
	
	//PASSWORD CAPSLOCK EVENT HANDLER
	$('#Password,#ConfirmPassword').on('keypress',function(e){
		kc = e.keyCode?e.keyCode:e.which;
		sk = e.shiftKey?e.shiftKey:((kc == 16)?true:false);

		if(((kc >= 65 && kc <= 90) && !sk)||((kc >= 97 && kc <= 122) && sk)){
			if (!$(this).next('div.popover:visible').length){
				$(this).popover('show');
			}
		}else{
			$(this).popover('hide');
		}
	}).on('blur',function(e){
		$(this).popover('hide');
	}).popover({content:'Caps Lock is on',placement:'bottom',trigger:'manual'});
	
		
	//REQUIRED INPUT EVENT HANDLER
	$(document).on('blur','input:visible,select:visible',function(){
		var element = '#'+$('.current .element').text();
		validate(element);
	});
	
	//ADVANCE STEP EVENT HANDLER
	//$(document).on('click','.glyphicon-forward:not([disabled])',function(){
	$(document).on('click','.glyphicon-forward',function(){
		var element = '#'+$('.current .element').text();
		validate(element);
	
	});



});
function validate(element){
	
	$.each($(element).find('.required:visible'),function(i,o){
		if(!$(o).val().length){
			$(o).attr('placeholder','*Required');
			$(o).parents('div:first').addClass('has-error');
			if(!$('#Disable').is(":checked")) $('#Disable').click();
			return false;

		}else {	
			$(o).removeAttr('placeholder');
			$(o).parents('div:first').removeClass('has-error');
			if($('#Disable').is(":checked")) $('#Disable').click();

		}
	});	
	
}
