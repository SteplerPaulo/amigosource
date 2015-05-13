function reloadCaptcha(){
	$('#siimage').prop('src', './securimage?sid=' + Math.random());
}

$(document).ready(function(){
	
	$('#CaptchaButton').on('click',function(){
		
		var captcha = $(this).val();
		
		$.ajax({
			url: '/amigosource/temporary_registrations/check_captcha',
			type: 'POST',
			data: $('#TemporaryRegistrationAddForm').serialize(),
			data:{'data':{'captcha':captcha}},
			dataType: 'json',
			success:function(data){
				console.log(data);
				if (data.error === 0) {
					$('#success_message').show();
					reloadCaptcha();
					setTimeout("$('#success_message').fadeOut()", 12000);
				} else {
					alert("There was an error with your submission.\n\n" + data.message);
					$('#TemporaryRegistrationCaptcha').select().focus();
				}
			}
		});	
	});
	
});