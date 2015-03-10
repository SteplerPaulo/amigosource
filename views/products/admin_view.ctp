<div class="products view">
<h2><?php  __('Product');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Category'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Brand'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($product['Brand']['name'], array('controller' => 'brands', 'action' => 'view', $product['Brand']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Slug'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['slug']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Image'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['image']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Weight'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['weight']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tags'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['tags']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Views'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['views']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['active']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $product['Product']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Product', true), array('action' => 'edit', $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Product', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Carts');?></h3>
	<?php if (!empty($product['Cart'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Sessionid'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Quantity'); ?></th>
		<th><?php __('Weight Total'); ?></th>
		<th><?php __('Subtotal'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Cart'] as $cart):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $cart['id'];?></td>
			<td><?php echo $cart['sessionid'];?></td>
			<td><?php echo $cart['product_id'];?></td>
			<td><?php echo $cart['name'];?></td>
			<td><?php echo $cart['weight'];?></td>
			<td><?php echo $cart['price'];?></td>
			<td><?php echo $cart['quantity'];?></td>
			<td><?php echo $cart['weight_total'];?></td>
			<td><?php echo $cart['subtotal'];?></td>
			<td><?php echo $cart['created'];?></td>
			<td><?php echo $cart['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'carts', 'action' => 'view', $cart['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'carts', 'action' => 'edit', $cart['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'carts', 'action' => 'delete', $cart['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cart['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Cart', true), array('controller' => 'carts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Order Items');?></h3>
	<?php if (!empty($product['OrderItem'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Order Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Quantity'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Subtotal'); ?></th>
		<th><?php __('Productmod Name'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['OrderItem'] as $orderItem):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $orderItem['id'];?></td>
			<td><?php echo $orderItem['order_id'];?></td>
			<td><?php echo $orderItem['product_id'];?></td>
			<td><?php echo $orderItem['name'];?></td>
			<td><?php echo $orderItem['quantity'];?></td>
			<td><?php echo $orderItem['weight'];?></td>
			<td><?php echo $orderItem['price'];?></td>
			<td><?php echo $orderItem['subtotal'];?></td>
			<td><?php echo $orderItem['productmod_name'];?></td>
			<td><?php echo $orderItem['created'];?></td>
			<td><?php echo $orderItem['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'order_items', 'action' => 'view', $orderItem['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'order_items', 'action' => 'edit', $orderItem['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'order_items', 'action' => 'delete', $orderItem['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $orderItem['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Order Item', true), array('controller' => 'order_items', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Productmods');?></h3>
	<?php if (!empty($product['Productmod'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Product Id'); ?></th>
		<th><?php __('Sku'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Value'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('Active'); ?></th>
		<th><?php __('Views'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($product['Productmod'] as $productmod):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $productmod['id'];?></td>
			<td><?php echo $productmod['product_id'];?></td>
			<td><?php echo $productmod['sku'];?></td>
			<td><?php echo $productmod['name'];?></td>
			<td><?php echo $productmod['value'];?></td>
			<td><?php echo $productmod['price'];?></td>
			<td><?php echo $productmod['weight'];?></td>
			<td><?php echo $productmod['active'];?></td>
			<td><?php echo $productmod['views'];?></td>
			<td><?php echo $productmod['created'];?></td>
			<td><?php echo $productmod['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'productmods', 'action' => 'view', $productmod['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'productmods', 'action' => 'edit', $productmod['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'productmods', 'action' => 'delete', $productmod['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $productmod['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Productmod', true), array('controller' => 'productmods', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
