<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h2>Admin Edit Category</h2>
		<?php echo $this->Form->create('Category'); ?>
		<?php echo $this->Form->input('id'); ?>
		<br />
		<?php echo $this->Form->input('parent_id', array('class' => 'form-control input-sm', 'empty' => true)); ?>
		<br />
		<?php echo $this->Form->input('name', array('class' => 'form-control input-sm','required'=>'resuired')); ?>
		<br />
		<?php echo $this->Form->input('slug', array('class' => 'form-control input-sm','required'=>'resuired')); ?>
		<br />
		<?php echo $this->Form->input('description', array('class' => 'form-control input-sm')); ?>
		<br />
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
		<?php echo $this->Form->end(); ?>

		<br />
		<br />
	</div>
</div>