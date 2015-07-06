
<div class="row-fluid">
	<div class="autoMessages form col-sm-5 col-sm-offset-3">
	<?php echo $this->Form->create('AutoMessage',array('class'=>'form-vertical','inputDefaults' => array('input'=>array('class'=>'form-control'),'div'=>array('class'=>'form-group col-sm-12'))));?>
		<fieldset>
			<legend><?php __('Add Auto Message'); ?></legend>
		<?php
			echo $this->Form->input('id',array('type'=>'text'));
			echo $this->Form->input('message');
			echo $this->Form->input('tags');
		?>
		</fieldset>
	<?php echo $this->Form->end(__('Submit', true));?>
	</div>
	<div class="actions col-sm-2">
		<h3><?php __('Actions'); ?></h3>
		<ul>

			<li><?php echo $this->Html->link(__('List Auto Messages', true), array('action' => 'index'));?></li>
		</ul>
	</div>
</div>