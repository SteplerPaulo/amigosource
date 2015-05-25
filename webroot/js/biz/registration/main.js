var amigosourceApp = angular.module('amigosourceApp',[]);

amigosourceApp.controller('TemporaryRegistrationController', ['$scope', function($scope) {}]);

$(document).ready(function(){	
	//BUSINESS LOGO EVENT HANDLER
	$('#BrowseLogo').click(function(){$('#BusinessLogo').click()});
	$('#BusinessLogo').change(function(){$('#LogoPath').val($(this).val())});
	
	//PRODUCT LOGO EVENT HANDLER
	$('#BrowseProductLogoButton').click(function(){$('#ProductLogoOpenFile').click()});
	$('#ProductLogoOpenFile').change(function(){$('#ProductLogoPath').val($(this).val())});

	//CONFIRM REGISTRATION EVENT HANDLER VALLIDATED WITH CAPTCHA
	$('#ConfirmRegistration').on('click',function(){
		var captcha = $('#TemporaryRegistrationCaptcha').val();
		$.ajax({
			url: '/amigosource/temporary_registrations/check_captcha',
			type: 'POST',
			data:{'data':{'captcha':captcha}},
			dataType: 'json',
			success:function(data){
				if (data.error === 0) {
					$('#SendingLoader').modal();				
					$('#TemporaryRegistrationAddForm').submit();
				} else {
					//alert("There was an error with your submission.\n\n" + data.message);
					$('#CaptchaError').modal();
					$('#TemporaryRegistrationCaptcha').select().focus();
				}
			}
		});		
	});
});