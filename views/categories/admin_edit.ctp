<div class="row">
	<div class="col-md-4 col-md-offset-4">
		<h2>Admin Edit Category</h2>
		<?php echo $this->Form->create('Category'); ?>
		<?php echo $this->Form->input('id'); ?>
		<br />
		<?php echo $this->Form->input('parent_id', array('class' => 'form-control input-sm', 'empty' => 'Select')); ?>
		<br />
		<?php echo $this->Form->input('name', array('class' => 'form-control input-sm','required'=>'required')); ?>
		<br />
		<?php echo $this->Form->input('slug', array('class' => 'form-control input-sm','required'=>'required')); ?>
		<br />
		<?php echo $this->Form->input('description', array('class' => 'form-control input-sm')); ?>
		<br />
		<?php echo $this->Form->button('Submit', array('class' => 'btn btn-primary')); ?>
		<?php echo $this->Form->end(); ?>
		<br />
		<br />
		<h3>Actions</h3>
			<?php echo $this->Html->link(
								'Delete',
								array('action' => 'delete', $this->Form->value('Category.id')), 
								array('escape' => false,'class' => 'btn btn-danger'), 
								sprintf(__('Are you sure you want to delete record of category %s?', true), $this->Form->value('Category.name'))
							);?>		
		<br />
		<br />
	</div>
</div>
