<div class="currencies form">
<?php echo $this->Form->create('Currency');?>
	<fieldset>
		<legend><?php __('Add Currency'); ?></legend>
	<?php
		echo $this->Form->input('description');
		echo $this->Form->input('symbol');
		echo $this->Form->input('country');
		echo $this->Form->input('is_dd');
		echo $this->Form->input('seq_no');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Currencies', true), array('action' => 'index'));?></li>
	</ul>
</div>