
$(document).ready(function() {
	//GENERAL CATEGORY
	$(".general-category").change(function(){
		console.log($(this).val());
		$('.general-category-classification option:not(:first)').remove();
		$('.general-category-classification').append($('.classification-category option[parent-id="'+$(this).val()+'"]').clone())
	});
});
