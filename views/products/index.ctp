<div class="products index">
	<h2><?php __('Products');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('business_id');?></th>
			<th><?php echo $this->Paginator->sort('category_id');?></th>
			<th><?php echo $this->Paginator->sort('classification_id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('details');?></th>
			<th><?php echo $this->Paginator->sort('standard_pckg');?></th>
			<th><?php echo $this->Paginator->sort('specifications');?></th>
			<th><?php echo $this->Paginator->sort('technical_desc');?></th>
			<th><?php echo $this->Paginator->sort('cost_currency');?></th>
			<th><?php echo $this->Paginator->sort('cost');?></th>
			<th><?php echo $this->Paginator->sort('unit_measure_code');?></th>
			<th><?php echo $this->Paginator->sort('stock_on_hand');?></th>
			<th><?php echo $this->Paginator->sort('min_order_qty');?></th>
			<th><?php echo $this->Paginator->sort('payment_terms');?></th>
			<th><?php echo $this->Paginator->sort('shipping_terms');?></th>
			<th><?php echo $this->Paginator->sort('contact_name');?></th>
			<th><?php echo $this->Paginator->sort('contact_number');?></th>
			<th><?php echo $this->Paginator->sort('contact_email');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($products as $product):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $product['Product']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($product['Business']['name'], array('controller' => 'businesses', 'action' => 'view', $product['Business']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($product['Category']['name'], array('controller' => 'categories', 'action' => 'view', $product['Category']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($product['Classification']['name'], array('controller' => 'categories', 'action' => 'view', $product['Classification']['id'])); ?>
		</td>
		<td><?php echo $product['Product']['name']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['details']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['standard_pckg']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['specifications']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['technical_desc']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['cost_currency']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['cost']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['unit_measure_code']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['stock_on_hand']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['min_order_qty']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['payment_terms']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['shipping_terms']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['contact_name']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['contact_number']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['contact_email']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['created']; ?>&nbsp;</td>
		<td><?php echo $product['Product']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $product['Product']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $product['Product']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $product['Product']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Product', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Businesses', true), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business', true), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Categories', true), array('controller' => 'categories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Category', true), array('controller' => 'categories', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Pictures', true), array('controller' => 'pictures', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Picture', true), array('controller' => 'pictures', 'action' => 'add')); ?> </li>
	</ul>
</div>