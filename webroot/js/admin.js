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
	
	//TOOL TIP INITIALIZATION
	$('[data-toggle="tooltip"]').tooltip();
	
	/**************USER-ACCOUNT PRODUCT DETAILS**************/
	//GENERAL CATEGORY
	$(".general-category").change(function(){
		$('.general-category-classification option:not(:first)').remove();
		$('.general-category-classification').append($('.classification-category option[parent-id="'+$(this).val()+'"]').clone())
	});
	
	
	/***************CREDENTIAL-PROFILE*************/
	//MONETARY CURRENCY EVENT HANDLER
	$('.monetary-currency').change(function(){
		var row  = $(this).parents('tr:first'); 
		var symbol = $(this).find('option:selected').attr('symbol');
		if(symbol){
			$(row).find('.currency_symbol').html(symbol);
		}else{
			$(row).find('.currency_symbol').html('&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;');
		}
		
	});
	
	/****************SUPPLIER-MEMBER-DETAILS****************/
	//COUNTRY EVENT HANDLER
	$('#CountryId').change(function(){
		toggle_curr_province_form_input($(this).val());
	});
	
	
	//ALLOW TO SET PROVINCE ON LOAD
	toggle_curr_province_form_input($('#CountryId').val());
	
	//TOGGLE CURRENT PROVINCE FORM INPUT
	function toggle_curr_province_form_input(curr_country_id){
		if(curr_country_id == 175){
			$('#ProvinceDropDown').removeAttr('disabled').parents('div:first').show();
			$('#ProvinceText').attr('disabled','disabled').parents('div:first').hide();
			$('#ProvinceText').val('');
		}else{
			$('#ProvinceText').removeAttr('disabled').parents('div:first').show();
			$('#ProvinceDropDown').attr('disabled','disabled').parents('div:first').hide();
			$('#ProvinceDropDown').val('');
		}
	}
});
