$(document).ready(function(){

	var url_length = window.location.pathname.split('/').length;
	var pathname = window.location.pathname.split('/')[parseInt(url_length)-1];
	
	$('[pathname="'+pathname+'"]').addClass('btn-primary');
	
});