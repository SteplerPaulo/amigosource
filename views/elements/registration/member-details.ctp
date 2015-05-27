<div class="row TmpRegElement" id="member-details" style="display:none">
	<div class="panel panel-primary">
		<div class="panel-heading">General</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-4">
					<?php echo $this->Form->input('business_name',array('class'=>'form-control input-sm required','placeholder'=>'*Required'));?>
				</div>
				<div class="col-lg-3">
					<?php echo $this->Form->input('business_type_id',array('options'=>$businessTypes,'empty'=>'Select','class'=>'form-control input-sm required','placeholder'=>'*Required'));?>
				</div>
			</div>
			<h4>Business Address</h4>
			<div class="row">
				<div class="col-lg-2">
					<?php echo $this->Form->input('business_country',array('label'=>'Country','id'=>'CountryId','options'=>$countries,'empty'=>'Select','class'=>'form-control input-sm  required','placeholder'=>'*Required'));?>
				</div>
				<div class="col-lg-2">
					<?php echo $this->Form->input('business_province',array('label'=>'Province','id'=>'ProvinceDropDown','options'=>$provinces,'empty'=>'Select','class'=>'form-control input-sm required','placeholder'=>'*Required'));?>
					<?php echo $this->Form->input('business_province',array('label'=>'Province','id'=>'ProvinceText','type'=>'text','class'=>'form-control input-sm required','placeholder'=>'*Required'));?>
				</div>
				<div class="col-lg-2">
					<?php echo $this->Form->input('business_city',array('label'=>'City/Municipality','id'=>'CityAndMunicipalityText','class'=>'form-control input-sm required','label'=>'City/Municipality','placeholder'=>'*Required'));?>
					<?php echo $this->Form->input('business_city',array('label'=>'City/Municipality','id'=>'CityAndMunicipalityDropdown','options'=>'','empty'=>'Select','class'=>'form-control input-sm required','label'=>'City/Municipality','placeholder'=>'*Required'));?>
				</div>
				<div class="col-lg-5">
					<?php echo $this->Form->input('business_street_no',array('class'=>'form-control input-sm required','label'=>'No. & Street','placeholder'=>'*Required'));?>
				</div>
				<div class="col-lg-1">
					<?php echo $this->Form->input('business_zipcode',array('label'=>'Zipcode','class'=>'form-control input-sm numeric'));?>
				</div>
			</div>
			<h4>Contact</h4>
			<div class="row">
				<div class="col-lg-4">
					<?php echo $this->Form->input('contact_name',array('label'=>'Contact Name','class'=>'form-control input-sm required','placeholder'=>'*Required'));?>
				</div>
				<div class="col-lg-2">
					<?php echo $this->Form->input('designation',array('class'=>'form-control input-sm'));?>
				</div>
				<div class="col-lg-2">
					<label for="landline">Landline<span class="error"> *</span></label>
					<div class="input-group">
						<span class="input-group-addon country-code"></span>
						<input maxlength="10" name="data[TemporaryRegistration][landline_no]" type="text" class="form-control input-sm numeric required" id="landline" placeholder="Area Code+Phone No.">
					</div>
				</div>
				<div class="col-lg-2">
					<label for="mobile">Mobile</label>
					<div class="input-group">
						<span class="input-group-addon country-code"></span>
						<input maxlength="11"  name="data[TemporaryRegistration][mobile_no]" type="text" class="form-control input-sm numeric" id="mobile" placeholder="Mobile No.">
						
					</div>
				</div>
				<div class="col-lg-2">
					<label for="fax">Fax</label>
					<div class="input-group">
						<span class="input-group-addon country-code"></span>
						<input maxlength="10" name="data[TemporaryRegistration][fax_no]" type="text" class="form-control input-sm numeric" id="fax" placeholder="Area Code+Fax No.">
					</div>
					<input name="data[TemporaryRegistration][landline_area_code]" type="hidden" class="form-control input-sm country-code" placeholder="Area Code+Phone No.">
					<input name="data[TemporaryRegistration][mobile_area_code]" type="hidden" class="form-control input-sm country-code"  placeholder="Mobile No.">
					<input name="data[TemporaryRegistration][fax_area_code]" type="hidden" class="form-control input-sm country-code">							
				</div>
			</div>
		</div>
	</div>	
	<div class="panel panel-primary">
		<div class="panel-heading">Business ID</div>
		<div class="panel-body">
			<div class="row">
				<div class="col-lg-8">
					<?php echo $form->input('logo', array('type' => 'file','id'=>'BusinessLogo','label'=>'Business Logo'));?>
				</div>
				<div class="col-lg-4">
					<?php echo $this->Form->input('website_address',array('label'=>'Website','class'=>'form-control input-sm'));?>
				</div>
			</div>
		</div>
	</div>
</div>
