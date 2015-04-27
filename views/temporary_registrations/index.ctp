<div class="temporaryRegistrations index">
	<h2><?php __('Temporary Registrations');?></h2>
	<table class="table table-bordered table-condensed table-striped">
	<tr>		
		<th class="text-center"><?php echo $this->Paginator->sort('registration_date');?></th>
		<th class="text-center"><?php echo $this->Paginator->sort('email');?></th>
		<th class="text-center"><?php echo $this->Paginator->sort('business_name');?></th>
		<th class="text-center"><?php echo $this->Paginator->sort('business_type_id');?></th>
		<th class="text-center"><?php echo $this->Paginator->sort('registration_type');?></th>
		<th class="text-center actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($temporaryRegistrations as $temporaryRegistration):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['registration_date']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['email']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['business_name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($temporaryRegistration['BusinessType']['name'], array('controller' => 'business_types', 'action' => 'view', $temporaryRegistration['BusinessType']['id'])); ?>
		</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['registration_type']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $temporaryRegistration['TemporaryRegistration']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $temporaryRegistration['TemporaryRegistration']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $temporaryRegistration['TemporaryRegistration']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Temporary Registration', true), array('action' => 'add')); ?></li>
	</ul>
</div>