var BASE_URL ='/'+window.location.pathname.split('/')[1]+'/';
$(document).ready(function(){

	//EMAIL EVENT HANDLER
	$('#TemporaryRegistrationEmail').on('change',function(){
		var email = $(this).val();
		$.ajax({
			url:BASE_URL+'temporary_registrations/existing_email_validation',
			dataType:'json',
			data:{'data':{'email':email}},
			type:'post',
			beforeSend:function(){
				$('#TemporaryRegistrationEmail').siblings('.help-inline').remove();
				$('#TemporaryRegistrationEmail').parents('.control-group').removeClass('error');
				$('#SubmitButton').attr('disabled','disabled');
			},
			success:function(FormReturn){
				console.log(FormReturn);
				if(email.length){
					if(FormReturn.status == "ERROR"){
						$('#TemporaryRegistrationEmail').after('<span class="help-inline error">'+FormReturn.message+'</span>');
						$('#TemporaryRegistrationEmail').select().focus();
					}
				}
				$('#SubmitButton').removeAttr('disabled');
			}
		}); 
	});

	
	//PASSWORD VALIDATION EVENT HANDLER
	$('#UserConfirmPassword,#UserPassword').on('change',function(){
		$('#UserConfirmPassword').siblings('.help-inline').remove();
		$('#UserConfirmPassword').parents('.control-group').removeClass('error');
		
		if($('#UserPassword').val().length){
			if($('#UserPassword').val() != $('#UserConfirmPassword').val() && $('#UserConfirmPassword').val().length){
				$('#UserConfirmPassword').after('<span class="help-inline">Password did not matched</span>');
				$('#UserConfirmPassword').parents('.control-group').addClass('error');
				$('#UserConfirmPassword').val('').focus();
			}
		}
	});
	
	
	//PASSWORD CAPSLOCK EVENT HANDLER
	$('#UserPassword,#UserConfirmPassword').on('keypress',function(e){
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
	
});
