<div class="factories index">
	<h2><?php __('Factories');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('business_id');?></th>
			<th><?php echo $this->Paginator->sort('location');?></th>
			<th><?php echo $this->Paginator->sort('contract_manufacturing');?></th>
			<th><?php echo $this->Paginator->sort('product_line_count');?></th>
			<th><?php echo $this->Paginator->sort('r_and_d_staff_count');?></th>
			<th><?php echo $this->Paginator->sort('qc_staff_count');?></th>
			<th><?php echo $this->Paginator->sort('employee_count');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($factories as $factory):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $factory['Factory']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($factory['Business']['name'], array('controller' => 'businesses', 'action' => 'view', $factory['Business']['id'])); ?>
		</td>
		<td><?php echo $factory['Factory']['location']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['contract_manufacturing']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['product_line_count']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['r_and_d_staff_count']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['qc_staff_count']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['employee_count']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['created']; ?>&nbsp;</td>
		<td><?php echo $factory['Factory']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $factory['Factory']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $factory['Factory']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $factory['Factory']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $factory['Factory']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Factory', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Businesses', true), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business', true), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>