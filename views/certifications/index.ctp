<div class="certifications index">
	<h2><?php __('Certifications');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('business_id');?></th>
			<th><?php echo $this->Paginator->sort('description');?></th>
			<th><?php echo $this->Paginator->sort('issuing_agency');?></th>
			<th><?php echo $this->Paginator->sort('date_issued');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($certifications as $certification):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $certification['Certification']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($certification['Business']['name'], array('controller' => 'businesses', 'action' => 'view', $certification['Business']['id'])); ?>
		</td>
		<td><?php echo $certification['Certification']['description']; ?>&nbsp;</td>
		<td><?php echo $certification['Certification']['issuing_agency']; ?>&nbsp;</td>
		<td><?php echo $certification['Certification']['date_issued']; ?>&nbsp;</td>
		<td><?php echo $certification['Certification']['created']; ?>&nbsp;</td>
		<td><?php echo $certification['Certification']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $certification['Certification']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $certification['Certification']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $certification['Certification']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $certification['Certification']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Certification', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Businesses', true), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business', true), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>