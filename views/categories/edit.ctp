<h2>
<?php
echo $crumb->getHtml('Edit', null, 'auto' ) ; 
?> 
</h2>
<hr>
<div class="categories form">
<?php echo $this->Form->create('Category');?>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('description');
		echo $this->Form->input('seq_order_no');
		echo $this->Form->input('is_active');
	?>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Category.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Category.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('action' => 'index'));?></li>
	</ul>
</div>