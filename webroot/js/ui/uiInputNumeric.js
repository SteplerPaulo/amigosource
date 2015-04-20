$(document).ready(function(){
	var dot_count = 0;
	var MONEY_ROUND = 2;
	//Set input box to be masked as numeric
	$(document).on('keydown','.numeric',function(e){
		if($(this).val()==''){
			dot_count = 0;
		}
		var key = e.which;
		//console.log(e.which);
		if(e.shiftKey){
		e.preventDefault();
		}
		if(key>=46 && key<=57 || key>=37 && key<=57 || key>188 && key<191 || key==8 || key>=96 && key<=105 || key==190||key==110||key==13||key==9){
			//Keycode for period 
			if(key==190||key==110){
				dot_count += 1;
				if(dot_count>1){
					e.preventDefault();
				}
			}
		}else{
			e.preventDefault();
		}
	});
	$(document).on('blur','.monetary',function(){
		var value =  parseFloat($(this).val());
		if(!isNaN(value)){
				$(this).val(roundNumber(value,MONEY_ROUND));
			}
	});
});


function number_format (number, decimals, dec_point, thousands_sep) {
	  number = (number + '').replace(/[^0-9+\-Ee.]/g, '');
	  var n = !isFinite(+number) ? 0 : +number,
		prec = !isFinite(+decimals) ? 0 : Math.abs(decimals),
		sep = (typeof thousands_sep === 'undefined') ? ',' : thousands_sep,
		dec = (typeof dec_point === 'undefined') ? '.' : dec_point,
		s = '',
		toFixedFix = function (n, prec) {
		  var k = Math.pow(10, prec);
		  return '' + Math.round(n * k) / k;
		};
	  // Fix for IE parseFloat(0.55).toFixed(0) = 0;
	  s = (prec ? toFixedFix(n, prec) : '' + Math.round(n)).split('.');
	  if (s[0].length > 3) {
		s[0] = s[0].replace(/\B(?=(?:\d{3})+(?!\d))/g, sep);
	  }
	  if ((s[1] || '').length < prec) {
		s[1] = s[1] || '';
		s[1] += new Array(prec - s[1].length + 1).join('0');
	  }
	  return s.join(dec);
}
function roundNumber(number,decimal_points) {
	if(!decimal_points) return Math.round(number);
	if(number == 0) {
		var decimals = "";
		for(var i=0;i<decimal_points;i++) decimals += "0";
		return "0."+decimals;
	}

	var exponent = Math.pow(10,decimal_points);
	var num = Math.round((number * exponent)).toString();
	var whole = num.slice(0,-1*decimal_points);
	return (whole.length>0?whole:'0') + "." + num.slice(-1*decimal_points);
}