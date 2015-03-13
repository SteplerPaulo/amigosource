var Shop = {'basePath':'/'+window.location.pathname.split('/')[1]+'/'};
	
$(document).ready(function() {
	
	$("a.status").unbind("change");
	$("a.status").click(function(){
		var p = this.firstChild;
		if (p.src.match('icon_1.png')) {
			$(p).attr({ src: Shop.basePath + "img/icon_0.png", alt: "Activate" });
		} else {
			$(p).attr("src", Shop.basePath + "img/icon_1.png");
			$(p).attr("alt","Deactivate");
		};
		$.get(this.href + "?" + new Date().getTime());
		return false;
	});
	
	//User-Account Product Details
	$(".general-category").change(function(){
		$('.general-category-classification option:not(:first)').remove();
		$('.general-category-classification').append($('.classification-category option[parent-id="'+$(this).val()+'"]').clone())
	});
	
	$('[data-toggle="tooltip"]').tooltip()
});
