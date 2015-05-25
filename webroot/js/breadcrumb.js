$(document).ready(function(){
	var ProductDetail = $('#product-details');
	var BreadcrumbProductDetail = $('#Breadcrumb [element="product-details"]');
	
	$('.registration-type').on('click',function(){
		switch ($(this).val()){
			case '1': 
				
				$('#certification-and-profile').after(ProductDetail);
				$('#Breadcrumb [element="certification-and-profile"]').after(BreadcrumbProductDetail);
				$('#Breadcrumb [element="confirmation"] .badge').text('5');
				break;
			case '2': 
				ProductDetail.remove();
				BreadcrumbProductDetail.remove();
				$('#Breadcrumb [element="confirmation"] .badge').text('4');
				break;

		}
	});
	
});