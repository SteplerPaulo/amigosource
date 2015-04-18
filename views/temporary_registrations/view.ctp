<div class="temporaryRegistrations view">
<h2><?php  __('Tempory Registration');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Email'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['email']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Password'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['password']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registration Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['registration_type']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registration Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['registration_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['business_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($temporyRegistration['BusinessType']['name'], array('controller' => 'business_types', 'action' => 'view', $temporyRegistration['BusinessType']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['business_country']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Province'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['business_province']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business City'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['business_city']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Street No'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['business_street_no']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business Zipcode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['business_zipcode']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contact Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['contact_name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Designation'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['designation']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Landline Area Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['landline_area_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Landline No'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['landline_no']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mobile Area Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['mobile_area_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Mobile No'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['mobile_no']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fax Area Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['fax_area_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fax No'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['fax_no']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Logo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['logo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Website Address'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['website_address']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Main Market'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['main_market']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Main Costumer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['main_costumer']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Currency'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($temporyRegistration['Currency']['name'], array('controller' => 'currencies', 'action' => 'view', $temporyRegistration['Currency']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Total Annual Sale'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['total_annual_sale']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Export Percentage'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['export_percentage']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Factory Location'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['factory_location']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contract Manufacturing'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['contract_manufacturing']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Production Line Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['production_line_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('R And D Staff Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['r_and_d_staff_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Qc Staff Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['qc_staff_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Employee Count'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['employee_count']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Pkey'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $temporyRegistration['TemporaryRegistration']['pkey']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tempory Registration', true), array('action' => 'edit', $temporyRegistration['TemporaryRegistration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tempory Registration', true), array('action' => 'delete', $temporyRegistration['TemporaryRegistration']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $temporyRegistration['TemporaryRegistration']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tempory Registrations', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tempory Registration', true), array('action' => 'add')); ?> </li>
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
<div class="related">
	<h3><?php __('Related Temporary Registration Address Not Philippines');?></h3>
	<?php if (!empty($temporyRegistration['TemporaryRegistrationAddressNotPhilippine'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tempory Registration Id'); ?></th>
		<th><?php __('State'); ?></th>
		<th><?php __('City'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($temporyRegistration['TemporaryRegistrationAddressNotPhilippine'] as $temporaryRegistrationAddressNotPhilippine):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $temporaryRegistrationAddressNotPhilippine['id'];?></td>
			<td><?php echo $temporaryRegistrationAddressNotPhilippine['tempory_registration_id'];?></td>
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
	<h3><?php __('Related Tempory Registration Certifications');?></h3>
	<?php if (!empty($temporyRegistration['TemporyRegistrationCertification'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tempory Registration Id'); ?></th>
		<th><?php __('Description'); ?></th>
		<th><?php __('Issuing Agency'); ?></th>
		<th><?php __('Date Issued'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($temporyRegistration['TemporyRegistrationCertification'] as $temporyRegistrationCertification):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $temporyRegistrationCertification['id'];?></td>
			<td><?php echo $temporyRegistrationCertification['tempory_registration_id'];?></td>
			<td><?php echo $temporyRegistrationCertification['description'];?></td>
			<td><?php echo $temporyRegistrationCertification['issuing_agency'];?></td>
			<td><?php echo $temporyRegistrationCertification['date_issued'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tempory_registration_certifications', 'action' => 'view', $temporyRegistrationCertification['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tempory_registration_certifications', 'action' => 'edit', $temporyRegistrationCertification['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tempory_registration_certifications', 'action' => 'delete', $temporyRegistrationCertification['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $temporyRegistrationCertification['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tempory Registration Certification', true), array('controller' => 'tempory_registration_certifications', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Tempory Registration Products');?></h3>
	<?php if (!empty($temporyRegistration['TemporyRegistrationProduct'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Tempory Registration Id'); ?></th>
		<th><?php __('General Category Id'); ?></th>
		<th><?php __('Classification Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Detail'); ?></th>
		<th><?php __('Standard Package'); ?></th>
		<th><?php __('Specification'); ?></th>
		<th><?php __('Technical Description'); ?></th>
		<th><?php __('Currency Id'); ?></th>
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
		foreach ($temporyRegistration['TemporyRegistrationProduct'] as $temporyRegistrationProduct):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $temporyRegistrationProduct['id'];?></td>
			<td><?php echo $temporyRegistrationProduct['tempory_registration_id'];?></td>
			<td><?php echo $temporyRegistrationProduct['general_category_id'];?></td>
			<td><?php echo $temporyRegistrationProduct['classification_id'];?></td>
			<td><?php echo $temporyRegistrationProduct['name'];?></td>
			<td><?php echo $temporyRegistrationProduct['detail'];?></td>
			<td><?php echo $temporyRegistrationProduct['standard_package'];?></td>
			<td><?php echo $temporyRegistrationProduct['specification'];?></td>
			<td><?php echo $temporyRegistrationProduct['technical_description'];?></td>
			<td><?php echo $temporyRegistrationProduct['currency_id'];?></td>
			<td><?php echo $temporyRegistrationProduct['cost'];?></td>
			<td><?php echo $temporyRegistrationProduct['unit_of_measure'];?></td>
			<td><?php echo $temporyRegistrationProduct['stock_on_hand'];?></td>
			<td><?php echo $temporyRegistrationProduct['minimun_order'];?></td>
			<td><?php echo $temporyRegistrationProduct['payment_terms'];?></td>
			<td><?php echo $temporyRegistrationProduct['shipping_term'];?></td>
			<td><?php echo $temporyRegistrationProduct['contact_no'];?></td>
			<td><?php echo $temporyRegistrationProduct['contact_name'];?></td>
			<td><?php echo $temporyRegistrationProduct['email'];?></td>
			<td><?php echo $temporyRegistrationProduct['image'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'tempory_registration_products', 'action' => 'view', $temporyRegistrationProduct['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'tempory_registration_products', 'action' => 'edit', $temporyRegistrationProduct['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'tempory_registration_products', 'action' => 'delete', $temporyRegistrationProduct['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $temporyRegistrationProduct['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Tempory Registration Product', true), array('controller' => 'tempory_registration_products', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
