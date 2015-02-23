$(document).ready(function(){
	$('.fa-caret-right').on('click',function(){
		$(this).slideUp('fast').toggleClass('fa-caret-right fa-caret-down').slideDown('fast');
	});
	
	 $('[data-toggle="popover"]').popover();
	 $('.dropdown-toggle').dropdown();
	 
});
