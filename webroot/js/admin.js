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
	
	//INITIALIZE TOOL TIP
	$('[data-toggle="tooltip"]').tooltip();
	
	//INITIALIZE DATEPICKER
	$('.datepicker').datepicker();
	
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
		toggle_province_form_input($(this).val());
		mobile_country_code($(this).find('option:selected').attr('country_code'));
	});

	//ALLOW TO SET PROVINCE ON LOAD
	toggle_province_form_input($('#CountryId').val());
	
	//TOGGLE PROVINCE FORM INPUT
	function toggle_province_form_input(country_id){
		if(country_id == 166){
			$('#ProvinceDropDown').removeAttr('disabled').parents('div:first').show();
			$('#CityAndMunicipalityDropdown').removeAttr('disabled').parents('div:first').show();
			$('#ProvinceText').attr('disabled','disabled').parents('div:first').hide();
			$('#CityAndMunicipalityText').attr('disabled','disabled').parents('div:first').hide();
			$('#ProvinceText, #CityAndMunicipalityText').val('');
		}else{
			$('#ProvinceText').removeAttr('disabled').parents('div:first').show();
			$('#CityAndMunicipalityText').removeAttr('disabled').parents('div:first').show();
			$('#ProvinceDropDown').attr('disabled','disabled').parents('div:first').hide();
			$('#CityAndMunicipalityDropdown').attr('disabled','disabled').parents('div:first').hide();
			$('#ProvinceDropDown, #CityAndMunicipalityDropdown').val('');
		}
	}
	
	//PROVINCE EVENT HANDLER
	$('#ProvinceDropDown').change(function(){
		toggle_city_municipality_form_input($(this).find('option:selected').attr('province_id'));
	});
	
	//ALLOW TO SET CITY||MUNICIPALITY ON LOAD
	toggle_city_municipality_form_input($('#ProvinceDropDown option:selected').attr('province_id'));
	
	
	//TOGGLE CITY/MUNICIPALITY FORM INPUT
	function toggle_city_municipality_form_input(province_id){
		$('#CityAndMunicipalityDropdown option:not(:first)').remove();
		$('#CityAndMunicipalityDropdown').append($('#CityAndMunicipalityList option[province_id="'+province_id+'"]').clone());
	
	}

	function mobile_country_code(country_code){
		if(country_code != undefined){
			$('span.country-code').text('+'+country_code);
			$('input.country-code').val('+'+country_code);
		}else{
			$('.country-code').text('');
		}
	}
});
