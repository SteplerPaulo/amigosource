<div class="brands view">
<h2><?php  __('Brand');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $brand['Brand']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $brand['Brand']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Slug'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $brand['Brand']['slug']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Active'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $brand['Brand']['active']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $brand['Brand']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $brand['Brand']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Brand', true), array('action' => 'edit', $brand['Brand']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Brand', true), array('action' => 'delete', $brand['Brand']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $brand['Brand']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Brands', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Brand', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Products', true), array('controller' => 'products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Products');?></h3>
	<?php if (!empty($brand['Product'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Category Id'); ?></th>
		<th><?php __('Brand Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Slug'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Image'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Weight'); ?></th>
		<th><?php __('Tags'); ?></th>
		<th><?php __('Views'); ?></th>
		<th><?php __('Active'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($brand['Product'] as $product):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $product['id'];?></td>
			<td><?php echo $product['category_id'];?></td>
			<td><?php echo $product['brand_id'];?></td>
			<td><?php echo $product['name'];?></td>
			<td><?php echo $product['slug'];?></td>
			<td><?php echo $product['description'];?></td>
			<td><?php echo $product['image'];?></td>
			<td><?php echo $product['price'];?></td>
			<td><?php echo $product['weight'];?></td>
			<td><?php echo $product['tags'];?></td>
			<td><?php echo $product['views'];?></td>
			<td><?php echo $product['active'];?></td>
			<td><?php echo $product['created'];?></td>
			<td><?php echo $product['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'products', 'action' => 'view', $product['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'products', 'action' => 'edit', $product['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'products', 'action' => 'delete', $product['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Product', true), array('controller' => 'products', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
