<div class="businessTypes form">
<?php echo $this->Form->create('BusinessType');?>
	<fieldset>
		<legend><?php __('Edit Business Type'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('BusinessType.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('BusinessType.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Business Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Businesses', true), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business', true), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>