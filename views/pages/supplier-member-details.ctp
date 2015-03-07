<style>
	.btn-circle{
		width: 70px;
		height: 70px;
		padding: 10px 16px;
		border-radius: 35px;
		font-size: 24px;
		line-height: 1.33;
	}
	.step .glyphicon-arrow-right{
		font-size: 50px;
		top: 10px;
	}
	a.glyphicon-circle-arrow-right{
		text-decoration: none;
	}
</style>
<div class="row step" style="padding-top:20px;">
	<div class="col-lg-1 col-lg-offset-3">
		<button type="button" class="btn btn-circle"><i class="glyphicon glyphicon-user"></i></button><div class="row">User Account</div>
	</div>
	<div class="col-lg-1">
		<i class="glyphicon glyphicon-arrow-right"></i>
	</div>
	<div class="col-lg-1">
		<button type="button" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-file"></i></button><div class="row">Member Details</div>
	</div>
	<div class="col-lg-1">
		<i class="glyphicon glyphicon-arrow-right"></i>
	</div>
	<div class="col-lg-1">
		<button type="button" class="btn btn-circle"><i class="glyphicon glyphicon-shopping-cart"></i></button><div class="row">Product Details</div>
	</div>
	<div class="col-lg-1">
		<i class="glyphicon glyphicon-arrow-right"></i>
	</div>
	<div class="col-lg-1">
		<button type="button" class="btn btn-circle"><i class="glyphicon glyphicon-thumbs-up"></i></button><div class="row">Confirmation</div>
	</div>
</div><hr>


<br>

<div class="panel panel-primary">
	<div class="panel-heading">General</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-4">
				<?php echo $this->Form->input('Business Name',array('class'=>'form-control'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('Business Type',array('options'=>'','empty'=>'Select','class'=>'form-control'));?>
			</div>
		</div><hr>
		<h4>Business Address</h4>
		<div class="row">
			<div class="col-lg-2">
				<?php echo $this->Form->input('country_id',array('options'=>'','empty'=>'Select','class'=>'form-control'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('province',array('options'=>'','empty'=>'Select','class'=>'form-control'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('city_municipality',array('options'=>'','empty'=>'Select','class'=>'form-control'));?>
			</div>
			<div class="col-lg-5">
				<?php echo $this->Form->input('house_primary',array('class'=>'form-control'));?>
			</div>
			<div class="col-lg-1">
				<?php echo $this->Form->input('zipcode',array('class'=>'form-control'));?>
			</div>
		</div><hr>
		<h4>Contact Numbers</h4>
		<div class="row">
			<div class="col-lg-2">
				<?php echo $this->Form->input('landline',array('class'=>'form-control'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('mobile',array('class'=>'form-control'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('fax',array('class'=>'form-control'));?>
			</div>
		</div><hr>
		<h4>Contact Person</h4>
		<div class="row">
			<div class="col-lg-4">
				<?php echo $this->Form->input('name',array('class'=>'form-control'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('designation',array('class'=>'form-control'));?>
			</div>
			</div>
		</div>
	</div>
</div>
<div class="panel panel-primary">
	<div class="panel-heading">Business ID</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-4">
				<label>Business Logo</label>
				<div class="input-group">
					<input type="text" class="form-control">
					<span class="input-group-btn">
						<button class="btn btn-default" type="file">Browse</button>
					</span>
				</div>
			</div>
			<div class="col-lg-4">
				<?php echo $this->Form->input('website',array('class'=>'form-control'));?>
			</div>
		</div>
	</div>
</div>

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
					<td><?php echo $this->Form->input('brand_name',array('class'=>'form-control','div'=>false,'label'=>false))?></td>
					<td><?php echo $this->Form->input('category',array('options'=>'','empty'=>'Select','class'=>'form-control','div'=>false,'label'=>false))?></td>
					<td><?php echo $this->Form->input('classification',array('options'=>'','empty'=>'Select','class'=>'form-control','div'=>false,'label'=>false))?></td>
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
		<h3 class="pull-right"><a href="/amigosource/user-account" id="Next" class="glyphicon glyphicon-circle-arrow-left"></a> Back</h3>
	</div>
	<div class="col-lg-2">
		<h3 class="pull-left">Next <a href="javascript:void()" id="Next" class="glyphicon glyphicon-circle-arrow-right" onclick="alert('Your web page that are trying to access is under constructions. Please contact your system administrator for updates')"></a></h3>
	</div>
	
	<div class="col-lg-3 col-lg-offset-1">
		<h3 class="pull-right">Back To Top <a href="#" id="Next" class="glyphicon glyphicon-circle-arrow-up" ></a></h3>
	</div>
</div>
