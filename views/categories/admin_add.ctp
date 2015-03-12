<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h2>Admin Add Category</h2>
		<?php echo $this->Form->create('Category'); ?>
		<br />
		<?php echo $this->Form->input('parent_id', array('class' => 'form-control input-sm')); ?>
		<br />
		<?php echo $this->Form->input('name', array('class' => 'form-control input-sm slug-trigger')); ?>
		<br />
		<?php echo $this->Form->input('slug', array('class' => 'form-control input-sm slug-container')); ?>
		<br />
		<?php echo $this->Form->input('description', array('class' => 'form-control input-sm')); ?>
		<br />
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
		<?php echo $this->Form->end(); ?>
	</div>
</div>
