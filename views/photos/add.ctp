<div class="photos form">
<?php echo $this->Form->create('Photo',array('type' => 'file'));?>
	<fieldset>
		<legend><?php __('Add Photo'); ?></legend>
	<?php
		echo $this->Form->input('gallery_id');
		echo $this->Form->input('name');
		echo $form->input('img_file', array('type' => 'file'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Photos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
	</ul>
</div>