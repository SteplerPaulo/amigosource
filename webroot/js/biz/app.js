var amigosourceApp = angular.module('amigosourceApp',[]);

amigosourceApp.controller('TemporaryRegistrationController', ['$scope', function($scope) {
	$scope.page = supplier_steps;
	
	$scope.registration_type = function(type) {
		if(type=="Buyer") {
			$('.toggle').attr('ng-show','current_step_index === 3');
			$('.toggle').attr('ng-hide','current_step_index === 3');
			$scope.page = buyer_steps;
		}

		if(type=="Supplier") {
			$('.toggle').attr('ng-show','current_step_index === 4');
			$('.toggle').attr('ng-hide','current_step_index === 4');
			$scope.page = supplier_steps;
		}
	}; 

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
			
		//	
		element = '#'+$scope.page.steps[$scope.current_step_index].step.element;
		$('.TmpRegElement').hide();
		$(element).show();
		
		if($scope.page.steps[$scope.current_step_index].step.element == 'confirmation'){
			$('.advanceStep').hide();
			$('.sendRegistration').show();
		}
	}
	$scope.backStep = function() {
		$scope.current_step_index --;
		$scope.current_step = $scope.page.steps[$scope.current_step_index];
		
		element = '#'+$scope.page.steps[$scope.current_step_index].step.element;
		$('.TmpRegElement').hide();
		$(element).show();
		
		if($scope.page.steps[$scope.current_step_index].step.element != 'confirmation'){
			$('.advanceStep').show();
			$('.sendRegistration').hide();
		}
	}
}]);

$(document).ready(function(){
	$('.TmpRegElement').hide();
	$('#user-account').show();
	
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