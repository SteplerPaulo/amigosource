<div class="temporaryRegistrations index">
	<h2><?php __('Temporary Registrations');?></h2>
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
			<th><?php echo $this->Paginator->sort('monetary_currency_id');?></th>
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
	foreach ($temporaryRegistrations as $temporaryRegistration):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['id']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['email']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['password']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['registration_type']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['registration_date']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['business_name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($temporaryRegistration['BusinessType']['name'], array('controller' => 'business_types', 'action' => 'view', $temporaryRegistration['BusinessType']['id'])); ?>
		</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['business_country']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['business_province']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['business_city']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['business_street_no']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['business_zipcode']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['contact_name']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['designation']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['landline_area_code']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['landline_no']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['mobile_area_code']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['mobile_no']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['fax_area_code']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['fax_no']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['logo']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['website_address']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['main_market']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['main_costumer']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($temporaryRegistration['MonetaryCurrency']['id'], array('controller' => 'monetary_currencies', 'action' => 'view', $temporaryRegistration['MonetaryCurrency']['id'])); ?>
		</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['total_annual_sale']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['export_percentage']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['factory_location']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['contract_manufacturing']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['production_line_count']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['r_and_d_staff_count']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['qc_staff_count']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['employee_count']; ?>&nbsp;</td>
		<td><?php echo $temporaryRegistration['TemporaryRegistration']['pkey']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $temporaryRegistration['TemporaryRegistration']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $temporaryRegistration['TemporaryRegistration']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('List Business Types', true), array('controller' => 'business_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Type', true), array('controller' => 'business_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Monetary Currencies', true), array('controller' => 'monetary_currencies', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Monetary Currency', true), array('controller' => 'monetary_currencies', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Temporary Registration Address Not Philippines', true), array('controller' => 'temporary_registration_address_not_philippines', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Temporary Registration Address Not Philippine', true), array('controller' => 'temporary_registration_address_not_philippines', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Temporary Registration Certifications', true), array('controller' => 'temporary_registration_certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Temporary Registration Certification', true), array('controller' => 'temporary_registration_certifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Temporary Registration Products', true), array('controller' => 'temporary_registration_products', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Temporary Registration Product', true), array('controller' => 'temporary_registration_products', 'action' => 'add')); ?> </li>
	</ul>
</div>