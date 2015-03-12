$(document).ready(function(){
	$('.slug-trigger').keyup(function(){
		var slug = $.trim($(this).val());	
		slug = slug.replace(/%/ig,' percent');//Replace Percent
		slug = slug.replace(/&/ig,'and');//And Percent
		slug = slug.replace(/[^a-z A-Z \d]/ig,'');//Replace Special Charaters
		slug = slug.replace(/\s/g,'-');//Replace Spaces
		$('.slug-container').val(slug.toLowerCase());
	});
});