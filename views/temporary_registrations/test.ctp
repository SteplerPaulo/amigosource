<p>Username:<br>
	  <input type="text" name="user" ng-model="user" required>
	  <span style="color:red" ng-show="Form.user.$dirty && Form.user.$invalid">
	  <span ng-show="Form.user.$error.required">Username is required.</span>
	  </span>
</p>


<div data-ng-controller="SupplierRegistrationController">
	Name:
	<br/>
	<input type="text" data-ng-model="name"/>
	<br/>
	<ul>
		<li data-ng-repeat="cust in customers | filter:name | orderBy:'city'">
			{{cust.name}} - {{cust.city}}
		</li>
	</ul>
</div>

<?php echo $this->Html->script('ng-data/SupplierRegistrationController',array('inline'=>false))?>
