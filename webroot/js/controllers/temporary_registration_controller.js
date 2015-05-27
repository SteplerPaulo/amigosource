AmigoApp.controller('TemporaryRegistrationController', function($scope) {
	$scope.Products =  PRODUCTS;
	$scope.loadProduct = function(product){
		$scope.ActiveProduct= product;
	}
});