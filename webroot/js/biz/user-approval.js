var BASE_URL ='/'+window.location.pathname.split('/')[1]+'/';
$(document).ready(function(){
	$('.approve').on('click',function(){	
		if(confirm('are you sure you want to approve?')){
			$.ajax({
			   type: "POST",
			   url: BASE_URL+'temporary_registrations/approve',
			   data: $("#TemporaryRegistrationApproveForm").serialize(), // serializes the form's elements.
			   success: function(data){
					alert('User has been approved!');
					$('.back').click();
			   }
			 });
		}
	});
		
	$('.return').on('click',function(){	
		if(confirm('are you sure you want to return this registration?')){
			$.ajax({
			   type: "POST",
			   url: BASE_URL+'temporary_registrations/returnreg',
			   data: $("#TemporaryRegistrationApproveForm").serialize(), // serializes the form's elements.
			   success: function(data){
					alert('registration has been return!');
			   }
			 });
		}
	});
});
