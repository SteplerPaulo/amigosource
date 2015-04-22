<div class="temporaryRegistrations view">
<h2><?php  __('Temporary Registration');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registration Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['registration_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registration Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['registration_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['business_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($temporaryRegistration['BusinessType']['name'], array('controller' => 'business_types', 'action' => 'view', $temporaryRegistration['BusinessType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['business_country']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Province'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['business_province']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['business_city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Street No'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['business_street_no']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Zipcode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['business_zipcode']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contact Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['contact_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Designation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['designation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Landline Area Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['landline_area_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Landline No'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['landline_no']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mobile Area Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['mobile_area_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mobile No'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['mobile_no']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fax Area Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['fax_area_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fax No'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['fax_no']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Logo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['logo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Website Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['website_address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Main Market'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['main_market']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Main Costumer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['main_costumer']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Monetary Currency'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($temporaryRegistration['MonetaryCurrency']['id'], array('controller' => 'monetary_currencies', 'action' => 'view', $temporaryRegistration['MonetaryCurrency']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total Annual Sale'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['total_annual_sale']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Export Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['export_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Factory Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['factory_location']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contract Manufacturing'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['contract_manufacturing']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Production Line Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['production_line_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('R And D Staff Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['r_and_d_staff_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Qc Staff Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['qc_staff_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employee Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['employee_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pkey'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporaryRegistration['TemporaryRegistration']['pkey']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Temporary Registration', true), array('action' => 'edit', $temporaryRegistration['TemporaryRegistration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Temporary Registration', true), array('action' => 'delete', $temporaryRegistration['TemporaryRegistration']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $temporaryRegistration['TemporaryRegistration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Temporary Registrations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Temporary Registration', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Temporary Registration Address Not Philippines');?></h3>
	<?php if (!empty($temporaryRegistration['TemporaryRegistrationAddressNotPhilippine'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Temporary Registration Id'); ?></th>
		<th><?php __('State'); ?></th>
		<th><?php __('City'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($temporaryRegistration['TemporaryRegistrationAddressNotPhilippine'] as $temporaryRegistrationAddressNotPhilippine):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $temporaryRegistrationAddressNotPhilippine['id'];?></td>
			<td><?php echo $temporaryRegistrationAddressNotPhilippine['temporary_registration_id'];?></td>
			<td><?php echo $temporaryRegistrationAddressNotPhilippine['state'];?></td>
			<td><?php echo $temporaryRegistrationAddressNotPhilippine['city'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'temporary_registration_address_not_philippines', 'action' => 'view', $temporaryRegistrationAddressNotPhilippine['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'temporary_registration_address_not_philippines', 'action' => 'edit', $temporaryRegistrationAddressNotPhilippine['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'temporary_registration_address_not_philippines', 'action' => 'delete', $temporaryRegistrationAddressNotPhilippine['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $temporaryRegistrationAddressNotPhilippine['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Temporary Registration Address Not Philippine', true), array('controller' => 'temporary_registration_address_not_philippines', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Temporary Registration Certifications');?></h3>
	<?php if (!empty($temporaryRegistration['TemporaryRegistrationCertification'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Temporary Registration Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Issuing Agency'); ?></th>
		<th><?php __('Date Issued'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($temporaryRegistration['TemporaryRegistrationCertification'] as $temporaryRegistrationCertification):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $temporaryRegistrationCertification['id'];?></td>
			<td><?php echo $temporaryRegistrationCertification['temporary_registration_id'];?></td>
			<td><?php echo $temporaryRegistrationCertification['description'];?></td>
			<td><?php echo $temporaryRegistrationCertification['issuing_agency'];?></td>
			<td><?php echo $temporaryRegistrationCertification['date_issued'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'temporary_registration_certifications', 'action' => 'view', $temporaryRegistrationCertification['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'temporary_registration_certifications', 'action' => 'edit', $temporaryRegistrationCertification['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'temporary_registration_certifications', 'action' => 'delete', $temporaryRegistrationCertification['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $temporaryRegistrationCertification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Temporary Registration Certification', true), array('controller' => 'temporary_registration_certifications', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Temporary Registration Products');?></h3>
	<?php if (!empty($temporaryRegistration['TemporaryRegistrationProduct'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Temporary Registration Id'); ?></th>
		<th><?php __('General Category Id'); ?></th>
		<th><?php __('Classification Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Detail'); ?></th>
		<th><?php __('Standard Package'); ?></th>
		<th><?php __('Specification'); ?></th>
		<th><?php __('Technical Description'); ?></th>
		<th><?php __('Monetary Currency Id'); ?></th>
		<th><?php __('Cost'); ?></th>
		<th><?php __('Unit Of Measure'); ?></th>
		<th><?php __('Stock On Hand'); ?></th>
		<th><?php __('Minimun Order'); ?></th>
		<th><?php __('Payment Terms'); ?></th>
		<th><?php __('Shipping Term'); ?></th>
		<th><?php __('Contact No'); ?></th>
		<th><?php __('Contact Name'); ?></th>
		<th><?php __('Email'); ?></th>
		<th><?php __('Image'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($temporaryRegistration['TemporaryRegistrationProduct'] as $temporaryRegistrationProduct):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $temporaryRegistrationProduct['id'];?></td>
			<td><?php echo $temporaryRegistrationProduct['temporary_registration_id'];?></td>
			<td><?php echo $temporaryRegistrationProduct['general_category_id'];?></td>
			<td><?php echo $temporaryRegistrationProduct['classification_id'];?></td>
			<td><?php echo $temporaryRegistrationProduct['name'];?></td>
			<td><?php echo $temporaryRegistrationProduct['detail'];?></td>
			<td><?php echo $temporaryRegistrationProduct['standard_package'];?></td>
			<td><?php echo $temporaryRegistrationProduct['specification'];?></td>
			<td><?php echo $temporaryRegistrationProduct['technical_description'];?></td>
			<td><?php echo $temporaryRegistrationProduct['monetary_currency_id'];?></td>
			<td><?php echo $temporaryRegistrationProduct['cost'];?></td>
			<td><?php echo $temporaryRegistrationProduct['unit_of_measure'];?></td>
			<td><?php echo $temporaryRegistrationProduct['stock_on_hand'];?></td>
			<td><?php echo $temporaryRegistrationProduct['minimun_order'];?></td>
			<td><?php echo $temporaryRegistrationProduct['payment_terms'];?></td>
			<td><?php echo $temporaryRegistrationProduct['shipping_term'];?></td>
			<td><?php echo $temporaryRegistrationProduct['contact_no'];?></td>
			<td><?php echo $temporaryRegistrationProduct['contact_name'];?></td>
			<td><?php echo $temporaryRegistrationProduct['email'];?></td>
			<td><?php echo $temporaryRegistrationProduct['image'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'temporary_registration_products', 'action' => 'view', $temporaryRegistrationProduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'temporary_registration_products', 'action' => 'edit', $temporaryRegistrationProduct['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'temporary_registration_products', 'action' => 'delete', $temporaryRegistrationProduct['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $temporaryRegistrationProduct['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Temporary Registration Product', true), array('controller' => 'temporary_registration_products', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
