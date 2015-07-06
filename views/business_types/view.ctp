<div class="businessTypes view">
<h2><?php  __('Business Type');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $businessType['BusinessType']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $businessType['BusinessType']['name']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Business Type', true), array('action' => 'edit', $businessType['BusinessType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Business Type', true), array('action' => 'delete', $businessType['BusinessType']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $businessType['BusinessType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Business Types', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Type', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses', true), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business', true), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Businesses');?></h3>
	<?php if (!empty($businessType['Business'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Business Type Id'); ?></th>
		<th><?php __('Country'); ?></th>
		<th><?php __('Province'); ?></th>
		<th><?php __('City'); ?></th>
		<th><?php __('Address'); ?></th>
		<th><?php __('Zip Code'); ?></th>
		<th><?php __('Contact'); ?></th>
		<th><?php __('Designation'); ?></th>
		<th><?php __('Landline'); ?></th>
		<th><?php __('Mobile'); ?></th>
		<th><?php __('Fax'); ?></th>
		<th><?php __('Logo'); ?></th>
		<th><?php __('Website'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($businessType['Business'] as $business):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $business['id'];?></td>
			<td><?php echo $business['name'];?></td>
			<td><?php echo $business['business_type_id'];?></td>
			<td><?php echo $business['country'];?></td>
			<td><?php echo $business['province'];?></td>
			<td><?php echo $business['city'];?></td>
			<td><?php echo $business['address'];?></td>
			<td><?php echo $business['zip_code'];?></td>
			<td><?php echo $business['contact'];?></td>
			<td><?php echo $business['designation'];?></td>
			<td><?php echo $business['landline'];?></td>
			<td><?php echo $business['mobile'];?></td>
			<td><?php echo $business['fax'];?></td>
			<td><?php echo $business['logo'];?></td>
			<td><?php echo $business['website'];?></td>
			<td><?php echo $business['created'];?></td>
			<td><?php echo $business['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'businesses', 'action' => 'view', $business['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'businesses', 'action' => 'edit', $business['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'businesses', 'action' => 'delete', $business['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $business['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Business', true), array('controller' => 'businesses', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
