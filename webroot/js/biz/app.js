var app = angular.module('app', []);
 
app.controller('PageController', ['$scope', function($scope) {
	$scope.page = supplier_steps;
	$scope.current_step_index = 0;
	$scope.previous_step_index = 0;
	$scope.previous_step = null;
	$scope.current_step = $scope.page.steps[$scope.current_step_index];
	
	$scope.isCurrent =  function(step){
		return $scope.current_step_index === step;
	}
	$scope.advanceStep = function(index) {	
		$scope.current_step_index ++;
		$scope.current_step = $scope.page.steps[$scope.current_step_index];
		$scope.previous_step_index = $scope.current_step_index-1;
		$scope.previous_step = $scope.page.steps[$scope.previous_step_index];
	}
	$scope.backStep = function() {
		$scope.current_step_index --;
		$scope.current_step = $scope.page.steps[$scope.current_step_index];
	}
}]);



$(document).ready(function(){
	$('#ConfirmRegistration').click(function(){
		$('#TemporaryRegistrationAddForm').submit();
	});

	
	//BUSINESS LOGO
	$('#BrowseLogo').click(function(){
		$('#BusinessLogo').click();
	});
	$('#BusinessLogo').change(function(){
		$('#LogoPath').val($(this).val());
	});
	
	//PRODUCT LOGO
	$('#BrowseProductLogoButton').click(function(){
		$('#ProductLogoOpenFile').click();
	});
	$('#ProductLogoOpenFile').change(function(){
		$('#ProductLogoPath').val($(this).val());
	});
});