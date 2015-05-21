var BASE_URL ='/'+window.location.pathname.split('/')[1]+'/';
$(document).ready(function(){
	 $('.approve').on('click',function(){
	  $.ajax({
           type: "POST",
           url: BASE_URL+'temporary_registrations/approve',
           data: $("#TemporaryRegistrationApproveForm").serialize(), // serializes the form's elements.
           success: function(data){
				alert('User has been approved!');
           }
         });
    });
});
