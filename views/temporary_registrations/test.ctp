<div ng-controller="TestController">

	First Name: <input type="text" ng-model="firstName"><br>
	Last Name: <input type="text" ng-model="lastName"><br>
	<br>
	Full Name: {{firstName + " " + lastName}}

	<br/><br/>
	<label><b>I'm a</b></label>
	<div class="form-group">
		<label class="radio-inline">
			<input type="radio" name="data[TemporaryRegistration][type]" value="Supplier"  ng-model="type">Suppplier
		</label>
		<label class="radio-inline">
			<input type="radio" name="data[TemporaryRegistration][type]" value="Buyer"   ng-model="type">Buyer
		</label>
	</div>

</div>

<script>
var app = angular.module('app', []);
app.controller('TestController', function($scope) {
    $scope.firstName= "John";
    $scope.lastName= "Doe";

	$scope.type= "Supplier";
	
	console.log($scope.type);
});
</script>