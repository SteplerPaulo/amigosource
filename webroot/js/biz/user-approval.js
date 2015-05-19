$(document).ready(function(){
	$('.approve').on('click',function(){
		var form = $('#TemporaryRegistrationApporveForm');
		form.ajaxSubmit({
				dataType:'json',
				success:function(formReturn){
					
				}
		});
	});
	 
});
