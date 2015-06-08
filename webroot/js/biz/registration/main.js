
$(document).ready(function(){	
	//BUSINESS LOGO EVENT HANDLER
	//$('#BrowseLogo').click(function(){$('#BusinessLogo').click()});
	//$('#BusinessLogo').change(function(){$('#LogoPath').val($(this).val())});
	$("#BusinessLogo").fileinput({
		uploadAsync :false,
		showPreview: true,
		showUpload: false,
		allowedFileExtensions: ["jpg", "png", "gif"],
		maxFileSize:100,
	}) 
	
	
	
	//PRODUCT LOGO EVENT HANDLER
	$('#BrowseProductLogoButton').click(function(){$('#ProductLogoOpenFile').click()});
	$('#ProductLogoOpenFile').change(function(){$('#ProductLogoPath').val($(this).val())});
	

	//CONFIRM REGISTRATION EVENT HANDLER VALLIDATED WITH CAPTCHA
	$('#ConfirmRegistration').on('click',function(){
		var captcha = $('#TemporaryRegistrationCaptcha').val();
		var email = $('#TemporaryRegistrationEmail').val();
		$.ajax({
			url: '/amigosource/temporary_registrations/check_captcha',
			type: 'POST',
			data:{'data':{'captcha':captcha,'email':email}},
			dataType: 'json',
			success:function(data){
				if (data.error === 0) {
					$('#SendingLoader').modal();				
					$('#TemporaryRegistrationAddForm').submit();
				} else {
					//alert("There was an error with your submission.\n\n" + data.message);
					$('#ValidationMessage').text(data.message);
					$('#CaptchaError').modal();
					$('#TemporaryRegistrationCaptcha').select().focus();
				}
			}
		});		
	});
	
	//UPPERCASE INPUT STRING
	$(".toUpperCase").bind('keyup', function (e) {
		if (e.which >= 97 && e.which <= 122) {
			var newKey = e.which - 32;
			// I have tried setting those
			e.keyCode = newKey;
			e.charCode = newKey;
		}

		$(this).val(($(this).val()).toUpperCase());
	});
});