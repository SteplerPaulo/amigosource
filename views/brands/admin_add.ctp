<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h2>Admin Add Brand</h2>
		<?php echo $this->Form->create('Brand'); ?>
		<?php echo $this->Form->input('name', array('class' => 'form-control','required'=>'required')); ?>
		<br />
		<?php echo $this->Form->input('slug', array('class' => 'form-control','required'=>'required')); ?>
		<br />
		<?php echo $this->Form->input('active', array('type' => 'checkbox')); ?>
		<br />
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
		<?php echo $this->Form->end(); ?>
	</div>
</div>