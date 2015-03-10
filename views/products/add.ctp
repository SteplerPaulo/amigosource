<div class="products form">
<?php echo $this->Form->create('Product');?>
	<fieldset>
		<legend><?php __('Add Product'); ?></legend>
	<?php
		echo $this->Form->input('category_id');
		echo $this->Form->input('brand_id');
		echo $this->Form->input('name');
		echo $this->Form->input('slug');
		echo $this->Form->input('description');
		echo $this->Form->input('image');
		echo $this->Form->input('price');
		echo $this->Form->input('weight');
		echo $this->Form->input('tags');
		echo $this->Form->input('views');
		echo $this->Form->input('active');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Products', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands', true), array('controller' => 'brands', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand', true), array('controller' => 'brands', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Carts', true), array('controller' => 'carts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Cart', true), array('controller' => 'carts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Order Items', true), array('controller' => 'order_items', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Order Item', true), array('controller' => 'order_items', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Productmods', true), array('controller' => 'productmods', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Productmod', true), array('controller' => 'productmods', 'action' => 'add')); ?> </li>
	</ul>
</div>