<div class="products form">
<?php echo $this->Form->create('Product');?>
	<fieldset>
		<legend><?php __('Edit Product'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('business_id');
		echo $this->Form->input('category_id');
		echo $this->Form->input('classification_id');
		echo $this->Form->input('name');
		echo $this->Form->input('details');
		echo $this->Form->input('standard_pckg');
		echo $this->Form->input('specifications');
		echo $this->Form->input('technical_desc');
		echo $this->Form->input('cost_currency');
		echo $this->Form->input('cost');
		echo $this->Form->input('unit_measure_code');
		echo $this->Form->input('stock_on_hand');
		echo $this->Form->input('min_order_qty');
		echo $this->Form->input('payment_terms');
		echo $this->Form->input('shipping_terms');
		echo $this->Form->input('contact_name');
		echo $this->Form->input('contact_number');
		echo $this->Form->input('contact_email');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Product.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Product.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Products', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Businesses', true), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business', true), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures', true), array('controller' => 'pictures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture', true), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
	</ul>
</div>