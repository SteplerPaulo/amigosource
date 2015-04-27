<br/>
		
<div class="panel panel-primary">
	<div class="panel-heading">Page For Viewing</div>
	<div class="panel-body">
	
		<center><h3>User Account</h3></center>
		<div class="row">
			<div class="col-lg-3">
				<?php echo '<label>Email:</label> '.$tempReg['TemporaryRegistration']['email']; ?><br/>
				<?php echo '<label>Registration Type:</label> '.$tempReg['TemporaryRegistration']['registration_type']; ?><br/>
				<?php echo '<label>Registration Date:</label> '.date("M d, Y", strtotime($tempReg['TemporaryRegistration']['registration_date'])); ?><br/>
			</div>
		</div>
		
		<hr/>
		<center><h3>Member Details</h3></center>
		
		<h4>General</h4>
		<div class="row">
			<div class="col-lg-6">
				<?php echo '<label>Business Name:</label> '.$tempReg['TemporaryRegistration']['business_name']; ?><br/>
				<?php echo '<label>Business Type:</label> '.$tempReg['BusinessType']['name']; ?><br/>
				<?php echo '<label>Business Address: </label> '.
							$tempReg['TemporaryRegistration']['business_street_no'].' '.
							$tempReg['TemporaryRegistration']['business_city'].', '.
							$tempReg['TemporaryRegistration']['business_province'].' '.
							$tempReg['Country']['name']
				?><br/>
				<?php echo '<label>Zipcode:</label> '.$tempReg['TemporaryRegistration']['business_zipcode'];?>
			</div>
			<div class="col-lg-4">
				<?php echo '<label>Contact Name:</label> '.$tempReg['TemporaryRegistration']['contact_name'];?><br/>
				<?php echo '<label>Designation:</label> '.$tempReg['TemporaryRegistration']['designation'];?>
			</div>
			<div class="col-lg-2">
				<?php echo '<label>Landline:</label> '.$tempReg['TemporaryRegistration']['landline_area_code'].' '.$tempReg['TemporaryRegistration']['landline_no'];?><br/>
				<?php echo '<label>Mobile:</label> '.$tempReg['TemporaryRegistration']['mobile_area_code'].' '.$tempReg['TemporaryRegistration']['mobile_no'];?><br/>
				<?php echo '<label>Fax:</label> '.$tempReg['TemporaryRegistration']['fax_area_code'].' '.$tempReg['TemporaryRegistration']['fax_no'];?><br/>
			</div>
		</div>
		<h4>Business ID</h4>
		<div class="row">
			<div class="col-lg-3">
				<?php echo '<label>Logo:</label> '.$tempReg['TemporaryRegistration']['logo'];?>
			</div>
			<div class="col-lg-3">
				<?php echo '<label>Website:</label> '.$tempReg['TemporaryRegistration']['website_address'];?>
			</div>
		</div>
		
		
		
		<hr/>
		<center><h3>Profile</h3></center>
		<h4>Certifications</h4>
		<?php if (!empty($tempReg['TemporaryRegistrationCertification'])):?>
		<table class="table table-bordered table-condensed table-striped">
			<thead>
				<tr>
					<th><?php __('Description'); ?></th>
					<th><?php __('Issuing Agency'); ?></th>
					<th><?php __('Date Issued'); ?></th>
				</tr>
			</thead>
			<tbody>
				<?php
					$i = 0;
					foreach ($tempReg['TemporaryRegistrationCertification'] as $temporaryRegistrationCertification):
						$class = null;
						if ($i++ % 2 == 0) { $class = ' class="altrow"'; }
					?>
					<tr<?php echo $class;?>>
						<td><?php echo $temporaryRegistrationCertification['description'];?></td>
						<td><?php echo $temporaryRegistrationCertification['issuing_agency'];?></td>
						<td><?php echo $temporaryRegistrationCertification['date_issued'];?></td>
					</tr>
				<?php endforeach; ?>
			</tbody>
		</table>
		<?php endif; ?>

		
		
		<h4>Factory Information</h4>
		<div class="row">
			<div class="col-lg-9">
				<?php echo '<label>Location:</label> '.$tempReg['TemporaryRegistration']['factory_location'];?><br/>
				<?php echo '<label>Contract Manufacturing:</label> '.$tempReg['TemporaryRegistration']['contract_manufacturing'];?>
			</div>
			<div class="col-lg-3">
				<?php echo '<label>No. of Production Line:</label> '.$tempReg['TemporaryRegistration']['production_line_count'];?><br/>
				<?php echo '<label>No Of R&D Staff:</label> '.$tempReg['TemporaryRegistration']['r_and_d_staff_count'];?><br/>
				<?php echo '<label>No Of QC Staff:</label> '.$tempReg['TemporaryRegistration']['qc_staff_count'];?><br/>
				<?php echo '<label>No. of Employees:</label> '.$tempReg['TemporaryRegistration']['employee_count'];?><br/>
			</div>
		</div>
		<hr/>
		<!--COMMENT BOX-->
		<div class="row">
			<div class="col-lg-4">
				<?php echo $this->Form->input('comment',array('label'=>'Comment:','rows'=>'4','type'=>'textbox','class'=>'form-control input-sm'));?>	
			</div>
		</div>
	</div>
	<div class="panel-footer">
		<button class="btn btn-primary">Approved</button>
		<div class=" pull-right">
			<button class="btn btn-default">Cancel</button>
			<button class="btn btn-default">Return</button>
			<a href="/amigosource/temporary_registrations" class="btn btn-default">Back</a>
		</div>
	</div>
</div>
