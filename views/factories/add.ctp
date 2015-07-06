<div class="factories form">
<?php echo $this->Form->create('Factory');?>
	<fieldset>
		<legend><?php __('Add Factory'); ?></legend>
	<?php
		echo $this->Form->input('business_id');
		echo $this->Form->input('location');
		echo $this->Form->input('contract_manufacturing');
		echo $this->Form->input('product_line_count');
		echo $this->Form->input('r_and_d_staff_count');
		echo $this->Form->input('qc_staff_count');
		echo $this->Form->input('employee_count');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Factories', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Businesses', true), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business', true), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>