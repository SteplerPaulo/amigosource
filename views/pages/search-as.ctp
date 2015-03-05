<div class="row" style="padding-top: 20px;">
	<div class="col-lg-12">
		<div class="col-lg-3 well">
			<h4>Location</h4><hr>
			<?php echo $this->Form->input('country_id',array('options'=>'','empty'=>'Select','class'=>'form-control'));?>
			<?php echo $this->Form->input('province_id',array('options'=>'','empty'=>'Select','class'=>'form-control'));?>
			<?php echo $this->Form->input('city_municipality_id',array('options'=>'','empty'=>'Select','class'=>'form-control'));?>
		</div>
		<div class="col-lg-9">
			<ul class="nav nav-tabs">
				<li class="active"><a href="#SupplierInformation" data-toggle="tab">Supplier Information</a>
				</li>
				<li class=""><a href="#ProductInformation" data-toggle="tab">Product Information</a>
				</li>
				</li>
			</ul>
			<div class="tab-content" style="padding: 25px;">
				<div class="tab-pane fade active in" id="SupplierInformation">
					<div class="row">
						<div class="col-lg-4">
							<?php echo $this->Form->input('company_name',array('class'=>'form-control'));?>
							<?php echo $this->Form->input('address',array('class'=>'form-control'));?>
							<?php echo $this->Form->input('contact_number',array('class'=>'form-control'));?>
							<?php echo $this->Form->input('email_address',array('class'=>'form-control'));?>
							<?php echo $this->Form->input('contact_person',array('class'=>'form-control'));?>
					
						</div>
					</div>
				</div>
				<div class="tab-pane fade" id="ProductInformation">
					
				</div>
			</div>
		</div>
	</div>
<div>