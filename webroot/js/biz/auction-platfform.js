$(document).ready(function(){
	
	//$("#START").click(function(){
		$('.countdown').downCount({
			date: '07/14/2015 12:00:00',
			offset: +10
		}, function () {
			alert('WOOT WOOT, done!');
		});

		
	//});
});