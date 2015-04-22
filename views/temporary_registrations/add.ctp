<div class="temporaryRegistrations form">
<?php echo $this->Form->create('TemporaryRegistration');?>
	<fieldset>
		<legend><?php __('Add Temporary Registration'); ?></legend>
	<?php
		echo $this->Form->input('email');
		echo $this->Form->input('password');
		echo $this->Form->input('registration_type');
		echo $this->Form->input('registration_date');
		echo $this->Form->input('business_name');
		echo $this->Form->input('business_type_id');
		echo $this->Form->input('business_country');
		echo $this->Form->input('business_province');
		echo $this->Form->input('business_city');
		echo $this->Form->input('business_street_no');
		echo $this->Form->input('business_zipcode');
		echo $this->Form->input('contact_name');
		echo $this->Form->input('designation');
		echo $this->Form->input('landline_area_code');
		echo $this->Form->input('landline_no');
		echo $this->Form->input('mobile_area_code');
		echo $this->Form->input('mobile_no');
		echo $this->Form->input('fax_area_code');
		echo $this->Form->input('fax_no');
		echo $this->Form->input('logo');
		echo $this->Form->input('website_address');
		echo $this->Form->input('main_market');
		echo $this->Form->input('main_costumer');
		echo $this->Form->input('monetary_currency_id');
		echo $this->Form->input('total_annual_sale');
		echo $this->Form->input('export_percentage');
		echo $this->Form->input('factory_location');
		echo $this->Form->input('contract_manufacturing');
		echo $this->Form->input('production_line_count');
		echo $this->Form->input('r_and_d_staff_count');
		echo $this->Form->input('qc_staff_count');
		echo $this->Form->input('employee_count');
		echo $this->Form->input('pkey');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Temporary Registrations', true), array('action' => 'index'));?></li>
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