<?php echo $this->Form->create('TemporaryRegistration',array('action'=>'add','id'=>'TemporaryRegistrationAddForm','type' => 'file','class'=>'fileupload'));?>

<div class="container-fluid">
	<!--------------------BREADCRUMBS---------------------------->
	<center class="page-header">
		<h2 class="action-name">Registration</h2>
		<div class="row-fluid">
			<?php echo $this->element("registration/breadcrumb");?>
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
	
	<?php echo $this->element("registration/navigation");?>

	<hr/>
</div>

<?php echo $this->Form->end();?>

<?php echo $this->element("registration/modals");?>
<div class="row hide">
	<?php echo $this->Form->input('city_municipality_lists',array('id'=>'CityAndMunicipalityList','options'=>$cityAndMunicipalities,'empty'=>'Select','class'=>'form-control input-sm','label'=>'City/Municipality'));?>
	<?php echo $this->Form->input('classification',array('options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm classification-category hide','div'=>false,'label'=>false))?>
</div>


	
<?php 	
	echo $this->Html->script('biz/registration/user-account',array('inline'=>false));
	echo $this->Html->script('biz/registration/products',array('inline'=>false));
	echo $this->Html->script('biz/registration/certifications',array('inline'=>false));
?>
