<?php echo $this->Form->create('TemporaryRegistration',array('action'=>'add'));?>
<div class="container" ng-controller="PageController">
<!--------------------BREADCRUMBS---------------------------->
	<center class="page-header">
		<h2 class="action-name">Registration</h2>
		<div class="row-fluid">
			<ol class="wizard">
				<li ng-repeat="s in page.steps" ng-class="{current: isCurrent($index)}"><span class="badge">{{$index + 1}}</span> {{s.step.name}}  <i ng-class="s.step.icon"></i> </li>
			</ol>
		</div>		
		<div class="pull-right action-buttons hide">
		  <a class="btn btn-success" data-toggle="modal"  href="#modal-sample"><i class="glyphicon glyphicon-plus"></i></a>
		  <a class="btn btn-default"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" ><i class="glyphicon glyphicon-filter"></i></a>
		  <button class="btn  btn-labeled toggle-view">
				<span class="btn-label"><i class="glyphicon glyphicon-list"></i></span>
				<i class="glyphicon glyphicon-th-large"></i>
		  </button>
		</div>
	</center>	


<!---------------------------BODY------------------------------------>
	<div class="row">
		<div class="col-lg-12" ng-repeat="s in page.steps" >
			<div class="row">
			{{s}}
			<?php 
				//echo $this->element("registration/"."user-account");
			?>
	
			</div>

		</div>
	</div>
	<hr/>
<!---------------NAVIGATION---------------->
	<center class="row">
		<div class="col-lg-2 col-lg-offset-5">
			<span class="pull-left"  ng-hide="current_step_index === 0"><h3><a style="text-decoration: none;" ng-click="backStep()" class="glyphicon glyphicon-backward"></a></h3>Prev</span>
			<span class="pull-right" ng-hide="current_step_index === 4"><h3><a style="text-decoration: none;" ng-click="advanceStep($index)" class="glyphicon glyphicon-forward"></a></h3>Next</span>
			<span class="pull-right" ng-show="current_step_index === 4"><h3><a style="text-decoration: none;" id="ConfirmRegistration" class="glyphicon glyphicon-send"></a></h3>Send Registration</span>
		</div>
	</center>
	<hr/>
</div>
<?php echo $this->Form->end();?>

<div class="row hide">
	<?php echo $this->Form->input('city_municipality_lists',array('id'=>'CityAndMunicipalityList','options'=>$cityAndMunicipalities,'empty'=>'Select','class'=>'form-control input-sm','label'=>'City/Municipality'));?>
	
	<?php echo $this->Form->input('classification',array('options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm classification-category hide','div'=>false,'label'=>false))?>

</div>

<?php echo $this->Html->script('biz/registration/products',array('inline'=>false))?>
<?php echo $this->Html->script('biz/registration/certifications',array('inline'=>false))?>