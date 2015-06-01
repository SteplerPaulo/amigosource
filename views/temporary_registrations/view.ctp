<br/>
		<?php echo $this->Html->script('controllers/temporary_registration_controller',array('inline'=>false));?>
		<script>window.PRODUCTS  = <?php echo json_encode($tempReg['TemporaryRegistrationProduct']);?>;</script>
<div class="panel panel-primary" ng-controller="TemporaryRegistrationController">
	<div class="panel-heading">Page For Viewing</div>
	<div class="panel-body">
		<div class="row">	
			<div class="col-lg-8">
				<center><h3>Member Details</h3></center>		
				<div class="row">
					<div class="col-lg-3">	
						<div class="thumbnail">
							<?php  echo $html->image('uploads' . DS . 'images' . DS . $tempReg['TemporaryRegistration']['logo'], array('alt' => 'Business Logo')); ?>
							 <div class="caption">
								<?php echo $this->Html->link( $tempReg['TemporaryRegistration']['website_address'], 'http://'. $tempReg['TemporaryRegistration']['website_address']);?>
							</div>
						</div>
					</div>
					<div class="col-lg-9">
						<?php echo '<label>Business Name:</label> '.$tempReg['TemporaryRegistration']['business_name']; ?><br/>
						<?php echo '<label>Business Type:</label> '.$tempReg['BusinessType']['name']; ?><br/>
						<?php echo '<label>Business Address: </label> '.
									$tempReg['TemporaryRegistration']['business_street_no'].' '.
									$tempReg['TemporaryRegistration']['business_city'].', '.
									$tempReg['TemporaryRegistration']['business_province'].' '.
									$tempReg['Country']['name']
						?><br/>
						<?php echo '<label>Zipcode:</label> '.$tempReg['TemporaryRegistration']['business_zipcode'];?><br/>
						<?php echo '<label>Contact Name:</label> '.$tempReg['TemporaryRegistration']['contact_name'];?><br/>
						<?php echo '<label>Designation:</label> '.$tempReg['TemporaryRegistration']['designation'];?><br/>
						<?php echo '<label>Landline:</label> '.$tempReg['TemporaryRegistration']['landline_area_code'].' '.$tempReg['TemporaryRegistration']['landline_no'];?><br/>
						<?php echo '<label>Mobile:</label> '.$tempReg['TemporaryRegistration']['mobile_area_code'].' '.$tempReg['TemporaryRegistration']['mobile_no'];?><br/>
						<?php echo '<label>Fax:</label> '.$tempReg['TemporaryRegistration']['fax_area_code'].' '.$tempReg['TemporaryRegistration']['fax_no'];?><br/>
					</div>
				</div>
			</div>
			<div class="col-lg-4">
				<center><h3>User Account</h3></center>
				<?php echo '<label>Email:</label> '.$tempReg['TemporaryRegistration']['email']; ?><br/>
				<?php echo '<label>Registration Type:</label> '.$tempReg['TemporaryRegistration']['registration_type']; ?><br/>
				<?php echo '<label>Registration Date:</label> '.date("M d, Y", strtotime($tempReg['TemporaryRegistration']['registration_date'])); ?><br/>
			</div>
		</div>
		
		<hr/>
		<center><h3 class="bg-info" style="padding: 5px;">Profile</h3></center>
		<div class="row">
			<div class="col-lg-6">
				<h4>Factory Information</h4>
				<div class="row">
					<div class="col-lg-9">
						<?php echo '<label>Location:</label> '.$tempReg['TemporaryRegistration']['factory_location'];?><br/>
						<?php echo '<label>Contract Manufacturing:</label> '.$tempReg['TemporaryRegistration']['contract_manufacturing'];?><br/>
						<?php echo '<label>No. of Production Line:</label> '.$tempReg['TemporaryRegistration']['production_line_count'];?><br/>
						<?php echo '<label>No Of R&D Staff:</label> '.$tempReg['TemporaryRegistration']['r_and_d_staff_count'];?><br/>
						<?php echo '<label>No Of QC Staff:</label> '.$tempReg['TemporaryRegistration']['qc_staff_count'];?><br/>
						<?php echo '<label>No. of Employees:</label> '.$tempReg['TemporaryRegistration']['employee_count'];?><br/>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				<?php if (!empty($tempReg['TemporaryRegistrationCertification'])):?>
				<h4>Certifications</h4>
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
			</div>
		</div>
		
		<hr/>
		<div class="row">
			<div class="col-lg-6" id="AddProductForm">
					<center><h4><b>Add Product</b></h4></center>
					<div class="row">
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.general_category_id',array('type'=>'text','ng-model'=>'ActiveProduct.GeneralCategory.name','class'=>'form-control input-sm general-category','readonly'=>'readonly','div'=>false))?>			
						</div>
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.classification_id',array('type'=>'text','ng-model'=>'ActiveProduct.Classification.name','class'=>'form-control input-sm general-category-classification','readonly'=>'readonly','div'=>false))?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.name',array('ng-model'=>'ActiveProduct.name','rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>			
						</div>
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.details',array('ng-model'=>'ActiveProduct.details','rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.standard_package',array('ng-model'=>'ActiveProduct.standard_package','label'=>'Standard Pkg & Ordering Leadtime','rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>			
						</div>
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.specification',array('ng-model'=>'ActiveProduct.specification','rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.technical_description',array('ng-model'=>'ActiveProduct.technical_description','rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>			
						</div>
						<div class="col-lg-3">
							<?php echo $this->Form->input('Pr.monetary_currency_id',array('type'=>'text','label'=>'Cost Currency','ng-model'=>'ActiveProduct.MonetaryCurrency.symbol','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>
						</div>
						<div class="col-lg-3">
							<?php echo $this->Form->input('Pr.cost',array('ng-model'=>'ActiveProduct.cost','class'=>'form-control input-sm numeric monetary','readonly'=>'readonly','div'=>false))?>			
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.unit_of_measure',array('ng-model'=>'ActiveProduct.unit_of_measure','label'=>'Unit of Measure Code','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>
						</div>
						<div class="col-lg-3">
							<?php echo $this->Form->input('Pr.stock_on_hand',array('ng-model'=>'ActiveProduct.stock_on_hand','class'=>'form-control input-sm numeric','readonly'=>'readonly','div'=>false))?>			
						</div>
						<div class="col-lg-3">
							<?php echo $this->Form->input('Pr.minimun_order',array('ng-model'=>'ActiveProduct.minimun_order','label'=>'Min. Order Qty','class'=>'form-control input-sm numeric','readonly'=>'readonly','div'=>false))?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.payment_terms',array('ng-model'=>'ActiveProduct.payment_terms','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>			
						</div>
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.shipping_terms',array('ng-model'=>'ActiveProduct.shipping_terms','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.contact_name',array('ng-model'=>'ActiveProduct.contact_name','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>			
						</div>
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.contact_no',array('ng-model'=>'ActiveProduct.contact_no','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>
						</div>
					</div>
					<div class="row">
						<div class="col-lg-6">
							<?php echo $this->Form->input('Pr.contact_email',array('ng-model'=>'ActiveProduct.contact_email','class'=>'form-control input-sm','readonly'=>'readonly','div'=>false))?>			
						</div>
					</div>
				</div>
				<div class="col-lg-6">
					<table class="table table-bordered">
						<thead>
							<tr>
								<th><?php __('Name'); ?></th>
								<th><?php __('Pictures'); ?></th>
								<th><?php __('Action'); ?></th>
							</tr>
						</thead>
						<tbody>
							<tr ng-repeat="product in Products" ng-class="{active: product==ActiveProduct}" >
								<td>{{product.name}}</td>
								<td>
									<a ng-repeat="pic in product.Picture" href="{{pic.url}}" data-lightbox="{{pic.url}}"><img  ng-src="{{pic.url}}" width="100"/></a>
								</td>
								<td><button class="btn btn-primary" ng-click="loadProduct(product)">View</button></td>
							</tr>
						</tbody>
					</table>
				</div>
		</div>
		<hr/>
	<?php echo $this->Form->create('TemporaryRegistration',array('action'=>'approve','id'=>'TemporaryRegistrationApporveForm','type' => 'file'));?>
		<!--COMMENT BOX-->
		<div class="row">
			<div class="col-lg-4">
				<?php echo $this->Form->input('comment',array('label'=>'Comment:','rows'=>'4','type'=>'textbox','class'=>'form-control input-sm'));?>	
			</div>
		</div>
	<?php echo $this->Form->end();?>
	</div>
	
	<div class="panel-footer">
		<button class="btn btn-primary approve">Approved</button>
		<div class=" pull-right">
			<button class="btn btn-default">Cancel</button>
			<button class="btn btn-default return">Return</button>
			<a href="/amigosource/temporary_registrations" class="btn btn-default back">Back</a>
		</div>
	</div>
</div>
<?php 	
	echo $this->Html->script('biz/user-approval',array('inline'=>false));
?>

