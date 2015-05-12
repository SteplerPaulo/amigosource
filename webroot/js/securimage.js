 $.noConflict();

function reloadCaptcha()
{
	jQuery('#siimage').prop('src', './securimage?sid=' + Math.random());
	
}

function processForm()
{
	console.log('amigosource/temporary_registrations/test');
	jQuery.ajax({
		url: '/amigosource/temporary_registrations/test',
		type: 'POST',
		data: jQuery('#contact_form').serialize(),
		dataType: 'json',
	}).done(function(data) {
		console.log(data);
		if (data.error === 0) {
			jQuery('#success_message').show();
			jQuery('#contact_form')[0].reset();
			reloadCaptcha();
			setTimeout("jQuery('#success_message').fadeOut()", 12000);
		} else {
			alert("There was an error with your submission.\n\n" + data.message);
		}
	});

	return false;
}