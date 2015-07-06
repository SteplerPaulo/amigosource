<div class="certifications form">
<?php echo $this->Form->create('Certification');?>
	<fieldset>
		<legend><?php __('Add Certification'); ?></legend>
	<?php
		echo $this->Form->input('business_id');
		echo $this->Form->input('description');
		echo $this->Form->input('issuing_agency');
		echo $this->Form->input('date_issued');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Certifications', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Businesses', true), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business', true), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>