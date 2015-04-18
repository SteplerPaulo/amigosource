<div class="temporyRegistrations index">
	<h2><?php __('Tempory Registrations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('email');?></th>
			<th><?php echo $this->Paginator->sort('password');?></th>
			<th><?php echo $this->Paginator->sort('registration_type');?></th>
			<th><?php echo $this->Paginator->sort('registration_date');?></th>
			<th><?php echo $this->Paginator->sort('business_name');?></th>
			<th><?php echo $this->Paginator->sort('business_type_id');?></th>
			<th><?php echo $this->Paginator->sort('business_country');?></th>
			<th><?php echo $this->Paginator->sort('business_province');?></th>
			<th><?php echo $this->Paginator->sort('business_city');?></th>
			<th><?php echo $this->Paginator->sort('business_street_no');?></th>
			<th><?php echo $this->Paginator->sort('business_zipcode');?></th>
			<th><?php echo $this->Paginator->sort('contact_name');?></th>
			<th><?php echo $this->Paginator->sort('designation');?></th>
			<th><?php echo $this->Paginator->sort('landline_area_code');?></th>
			<th><?php echo $this->Paginator->sort('landline_no');?></th>
			<th><?php echo $this->Paginator->sort('mobile_area_code');?></th>
			<th><?php echo $this->Paginator->sort('mobile_no');?></th>
			<th><?php echo $this->Paginator->sort('fax_area_code');?></th>
			<th><?php echo $this->Paginator->sort('fax_no');?></th>
			<th><?php echo $this->Paginator->sort('logo');?></th>
			<th><?php echo $this->Paginator->sort('website_address');?></th>
			<th><?php echo $this->Paginator->sort('main_market');?></th>
			<th><?php echo $this->Paginator->sort('main_costumer');?></th>
			<th><?php echo $this->Paginator->sort('currency_id');?></th>
			<th><?php echo $this->Paginator->sort('total_annual_sale');?></th>
			<th><?php echo $this->Paginator->sort('export_percentage');?></th>
			<th><?php echo $this->Paginator->sort('factory_location');?></th>
			<th><?php echo $this->Paginator->sort('contract_manufacturing');?></th>
			<th><?php echo $this->Paginator->sort('production_line_count');?></th>
			<th><?php echo $this->Paginator->sort('r_and_d_staff_count');?></th>
			<th><?php echo $this->Paginator->sort('qc_staff_count');?></th>
			<th><?php echo $this->Paginator->sort('employee_count');?></th>
			<th><?php echo $this->Paginator->sort('pkey');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($temporyRegistrations as $temporyRegistration):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $temporyRegistration['TemporyRegistration']['id']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['email']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['password']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['registration_type']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['registration_date']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['business_name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($temporyRegistration['BusinessType']['name'], array('controller' => 'business_types', 'action' => 'view', $temporyRegistration['BusinessType']['id'])); ?>
		</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['business_country']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['business_province']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['business_city']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['business_street_no']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['business_zipcode']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['contact_name']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['designation']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['landline_area_code']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['landline_no']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['mobile_area_code']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['mobile_no']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['fax_area_code']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['fax_no']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['logo']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['website_address']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['main_market']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['main_costumer']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($temporyRegistration['Currency']['name'], array('controller' => 'currencies', 'action' => 'view', $temporyRegistration['Currency']['id'])); ?>
		</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['total_annual_sale']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['export_percentage']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['factory_location']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['contract_manufacturing']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['production_line_count']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['r_and_d_staff_count']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['qc_staff_count']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['employee_count']; ?>&nbsp;</td>
		<td><?php echo $temporyRegistration['TemporyRegistration']['pkey']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $temporyRegistration['TemporyRegistration']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $temporyRegistration['TemporyRegistration']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $temporyRegistration['TemporyRegistration']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $temporyRegistration['TemporyRegistration']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tempory Registration', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Business Types', true), array('controller' => 'business_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Type', true), array('controller' => 'business_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Currencies', true), array('controller' => 'currencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Currency', true), array('controller' => 'currencies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Temporary Registration Address Not Philippines', true), array('controller' => 'temporary_registration_address_not_philippines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Temporary Registration Address Not Philippine', true), array('controller' => 'temporary_registration_address_not_philippines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tempory Registration Certifications', true), array('controller' => 'tempory_registration_certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tempory Registration Certification', true), array('controller' => 'tempory_registration_certifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tempory Registration Products', true), array('controller' => 'tempory_registration_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tempory Registration Product', true), array('controller' => 'tempory_registration_products', 'action' => 'add')); ?> </li>
	</ul>
</div>