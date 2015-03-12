<?php echo $this->Html->css('breadcrumb');?>
<div class="row" id="Breadcrumb">
	<div class="col-lg-1 col-lg-offset-3">
		<button type="button" class="btn btn-circle"><i class="glyphicon glyphicon-user"></i></button><div class="row">User Account</div>
	</div>
	<div class="col-lg-1">
		<i class="glyphicon glyphicon-arrow-right"></i>
	</div>
	<div class="col-lg-1">
		<button type="button" class="btn btn-circle"><i class="glyphicon glyphicon-file"></i></button><div class="row">Member Details</div>
	</div>
	<div class="col-lg-1">
		<i class="glyphicon glyphicon-arrow-right"></i>
	</div>
	<div class="col-lg-1">
		<button type="button" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-shopping-cart"></i></button><div class="row">Product Details</div>
	</div>
	<div class="col-lg-1">
		<i class="glyphicon glyphicon-arrow-right"></i>
	</div>
	<div class="col-lg-1">
		<button type="button" class="btn btn-circle"><i class="glyphicon glyphicon-thumbs-up"></i></button><div class="row">Confirmation</div>
	</div>
</div><hr>
<div class="panel panel-primary">
	<div class="panel-heading">Products</div>
	<div class="panel-body">
		<table class="table table-bordered table-hovered table-condensed">
			<thead>
				<tr>
					<th class="text-center">Brand Name</th>
					<th class="text-center">General Category</th>
					<th class="text-center">Classification</th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $this->Form->input('brand_name',array('class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
					<td><?php echo $this->Form->input('category_id',array('options'=>$categories,'empty'=>'Select','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
					<td><?php echo $this->Form->input('classification',array('options'=>'','empty'=>'Select','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
					<td class="text-center">
						<a class="glyphicon glyphicon-plus-sign"></a>  &nbsp;
						<a class="glyphicon glyphicon-edit"></a> &nbsp;
						<a class="glyphicon glyphicon-trash"></a>
					</td>
				</tr>
			</tbody>
		</table>
	
	</div>
</div>
<div class="row">
	<div class="col-lg-2 col-lg-offset-4">
		<h3 class="pull-right"><a href="/amigosource/supplier-member-details" id="Next" class="glyphicon glyphicon-circle-arrow-left"></a> Back</h3>
	</div>
	<div class="col-lg-2">
		<h3 class="pull-left">Next <a href="javascript:void()" id="Next" class="glyphicon glyphicon-circle-arrow-right" onclick="alert('Your web page that are trying to access is under construction. Please contact your system administrator for updates')"></a></h3>
	</div>
	
	<div class="col-lg-3 col-lg-offset-1">
		<h3 class="pull-right">Back To Top <a href="#" id="Next" class="glyphicon glyphicon-circle-arrow-up" ></a></h3>
	</div>
</div>
