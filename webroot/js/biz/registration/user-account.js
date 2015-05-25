var BASE_URL ='/'+window.location.pathname.split('/')[1]+'/';
var isValid = false;
$(document).ready(function(){
	$('.TmpRegElement').hide();
	$('#user-account').show();
	
	//EMAIL EVENT HANDLER
	$('#TemporaryRegistrationEmail').on('blur',function(){
		var email = $(this).val();
		var isValid	= isValidEmailAddress(email);
		
		
		$('#TemporaryRegistrationEmail').siblings('.help-inline').remove();
		if(!$('#Disable').is(":checked")) $('#Disable').click();
		
		if(isValid && email.length){
				$.ajax({
				url:BASE_URL+'temporary_registrations/existing_email_validation',
				dataType:'json',
				data:{'data':{'email':email}},
				type:'post',
				success:function(FormReturn){
					if(FormReturn.status == "ERROR"){
						$('#TemporaryRegistrationEmail').after('<span class="help-inline error">'+FormReturn.message+'</span>');
						$('#TemporaryRegistrationEmail').select().focus();
						return;
					}
				}
			}); 
		}else{
			$('#TemporaryRegistrationEmail').after('<span class="help-inline error">Invalid email. Try another? </span>');
			$('#TemporaryRegistrationEmail').select().focus();
		}
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
		var element = '#'+$('.current').attr('element');
		validate(element);
	});
	
	//ADVANCE STEP EVENT HANDLER
	$(document).on('click','.glyphicon-forward',function(){		
		var element = '#'+$('.current').attr('element');
		validate(element);

		if(isValid){
			var step = $('.TmpRegElement:visible');
			step.hide();
			
			highlight_current_step(step.next(':first').attr('id'));
			
			if(step.next(':first').attr('id') == 'confirmation'){
				$('.sendRegistration').show();
				$('.advanceStep').hide();
			}else if(step.next(':first').attr('id') == 'user-account'){
				$('.backStep').hide();
			}else{
				$('.backStep').show();
			}
			step.next(':first').show();
				
		}
	});
	

	$(document).on('click','.backStep',function(){
		var step = $('.TmpRegElement:visible');
		step.hide();
		highlight_current_step(step.prev(':first').attr('id'));

		if(step.prev(':first').attr('id') != 'confirmation'){
			$('.sendRegistration').hide();
			$('.advanceStep').show();
		}
		
		if(step.prev(':first').attr('id') == 'user-account'){
			$('.backStep').hide();
		}
		step.prev(':first').show();
	});
	

});

function validate(element){
	$.each($(element).find('.required:visible'),function(i,o){
		if(!$(o).val().length){
			$(o).attr('placeholder','*Required');
			$(o).parents('div:first').addClass('has-error');
			$('.advanceStep').attr('valid','false');
			isValid = false;
			return false;
		}else {	
			$(o).removeAttr('placeholder');
			$(o).parents('div:first').removeClass('has-error');
			$('.advanceStep').attr('valid','true');
			isValid = true;
		}
	});	
}

function isValidEmailAddress(emailAddress) {
    var pattern = new RegExp(/^((([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+(\.([a-z]|\d|[!#\$%&'\*\+\-\/=\?\^_`{\|}~]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])+)*)|((\x22)((((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(([\x01-\x08\x0b\x0c\x0e-\x1f\x7f]|\x21|[\x23-\x5b]|[\x5d-\x7e]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(\\([\x01-\x09\x0b\x0c\x0d-\x7f]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF]))))*(((\x20|\x09)*(\x0d\x0a))?(\x20|\x09)+)?(\x22)))@((([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|\d|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.)+(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])|(([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])([a-z]|\d|-|\.|_|~|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])*([a-z]|[\u00A0-\uD7FF\uF900-\uFDCF\uFDF0-\uFFEF])))\.?$/i);
    return pattern.test(emailAddress);
}

function highlight_current_step(curr){
	$('[element]').removeClass('current');
	$('[element="'+curr+'"]').addClass('current');
}