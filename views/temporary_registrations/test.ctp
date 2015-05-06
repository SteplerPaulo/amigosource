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
