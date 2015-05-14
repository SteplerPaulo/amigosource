<?php echo $this->Form->create('TemporaryRegistration',array('action'=>'add','id'=>'TemporaryRegistrationAddForm'));?>

<div class="container" ng-controller="TemporaryRegistrationController">
	<!--------------------BREADCRUMBS---------------------------->
	<center class="page-header">
		<h2 class="action-name">Registration</h2>
		<div class="row-fluid">
			<ol class="wizard">
				<li ng-repeat="s in page.steps" ng-class="{current: isCurrent($index)}" ><span class="badge">{{$index + 1}}</span> {{s.step.name}}  <i ng-class="s.step.icon"></i> <span class="hide element">{{s.step.element}}</span> </li>
			</ol>
		</div>	
		<input type='checkbox' ng-model='disabled' id="Disable" class="hide">
	</center>
	<!---------------------------BODY------------------------------------>

	<div class="row">
		<?php echo $this->element("registration/user-account");?>
		<?php echo $this->element("registration/member-details");?>
		<?php echo $this->element("registration/certification-and-profile");?>
		<?php echo $this->element("registration/product-details");?>
		<?php echo $this->element("registration/confirmation");?>
	</div>
	<hr/>
	<!---------------NAVIGATION---------------->
	<center class="row">
		<div class="col-lg-2 col-lg-offset-5">
			<span class="pull-left"  ng-hide="current_step_index === 0"><h3><a ng-click="backStep()" class="glyphicon glyphicon-backward"></a></h3>Prev</span>
			<span class="pull-right advanceStep"><h3><a ng-disabled='disabled' ng-class='{ disabled:disabled}' ng-click="disabled || advanceStep($index)" class="glyphicon glyphicon-forward"></a></h3>Next</span>
			<span class="pull-right sendRegistration" style="display:none;"><h3><a id="ConfirmRegistration" class="glyphicon glyphicon-send"></a></h3>Send Registration</span>
		</div>
	</center>
	<hr/>
</div>

<?php echo $this->Form->end();?>

<div class="row hide">
	<?php echo $this->Form->input('city_municipality_lists',array('id'=>'CityAndMunicipalityList','options'=>$cityAndMunicipalities,'empty'=>'Select','class'=>'form-control input-sm','label'=>'City/Municipality'));?>
	
	<?php echo $this->Form->input('classification',array('options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm classification-category hide','div'=>false,'label'=>false))?>

</div>

	
<?php 	
	echo $this->Html->script(array('biz/registration/main'));
	echo $this->Html->script(array('plugins/wizard/wizard'));
	echo $this->Html->script('biz/registration/user-account',array('inline'=>false));
	echo $this->Html->script('biz/registration/products',array('inline'=>false));
	echo $this->Html->script('biz/registration/certifications',array('inline'=>false));
?>