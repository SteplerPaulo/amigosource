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
		<button type="button" class="btn btn-primary btn-circle"><i class="glyphicon glyphicon-user"></i></button><div class="row">User Account</div>
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
		<button type="button" class="btn btn-circle"><i class="glyphicon glyphicon-shopping-cart"></i></button><div class="row">Product Details</div>
	</div>
	<div class="col-lg-1">
		<i class="glyphicon glyphicon-arrow-right"></i>
	</div>
	<div class="col-lg-1">
		<button type="button" class="btn btn-circle"><i class="glyphicon glyphicon-thumbs-up"></i></button><div class="row">Confirmation</div>
	</div>
</div><hr>
<div class="row">
	<div class="col-lg-4 col-lg-offset-4">
	<?php echo $this->Form->create('User');?>
		<?php echo $this->Form->input('email',array('class'=>'form-control'));?>
		<?php echo $this->Form->input('password',array('class'=>'form-control'));?>
		<?php echo $this->Form->input('confirm_password',array('class'=>'form-control'));?>
		
		<label><h4>I'm a</h4></label>
		<div class="form-group">
			<label class="radio-inline">
				<input type="radio" name="data[User][type]" value="Supplier">Suppplier
			</label>
			<label class="radio-inline">
				<input type="radio" name="data[User][type]" value="Buyer">Buyer
			</label>
		</div>
		<h2 class="pull-right">Next <a class="glyphicon glyphicon-circle-arrow-right"></a></h2>
		
	<?php echo $this->Form->end();?>
	</div>
</div>