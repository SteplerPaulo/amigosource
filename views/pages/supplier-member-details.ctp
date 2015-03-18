<?php echo $this->element('breadcrumb');?>
<div class="panel panel-primary">
	<div class="panel-heading">General</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-4">
				<?php echo $this->Form->input('Business Name',array('class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('Business Type',array('options'=>'','empty'=>'Select','class'=>'form-control input-sm'));?>
			</div>
		</div>
		<h4>Business Address</h4>
		<div class="row">
			<div class="col-lg-2">
				<?php echo $this->Form->input('country_id',array('id'=>'CountryId','options'=>$countries,'empty'=>'Select','class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('province',array('id'=>'ProvinceDropDown','options'=>$provinces,'empty'=>'Select','class'=>'form-control input-sm'));?>
				<?php echo $this->Form->input('province',array('id'=>'ProvinceText','type'=>'text','class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('city_municipality',array('id'=>'CityAndMunicipalityText','class'=>'form-control input-sm','label'=>'City/Municipality'));?>
				<?php echo $this->Form->input('city_municipality',array('id'=>'CityAndMunicipalityDropdown','options'=>'','empty'=>'Select','class'=>'form-control input-sm','label'=>'City/Municipality'));?>
			</div>
			<div class="col-lg-5">
				<?php echo $this->Form->input('house_info',array('class'=>'form-control input-sm','label'=>'No. & Street'));?>
			</div>
			<div class="col-lg-1">
				<?php echo $this->Form->input('zipcode',array('class'=>'form-control input-sm'));?>
			</div>
		</div>
		<h4>Contact</h4>
		<div class="row">
			<div class="col-lg-4">
				<?php echo $this->Form->input('name',array('class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('designation',array('class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('landline',array('class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('mobile',array('class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('fax',array('class'=>'form-control input-sm'));?>
			</div>
		</div>
	</div>
</div>	
<div class="panel panel-primary">
	<div class="panel-heading">Business ID</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-4">
				<label>Business Logo</label>
				<div class="input-group">
					<input type="text" class="form-control input-sm">
					<span class="input-group-btn">
						<button class="btn btn-default btn-sm" type="file">Browse</button>
					</span>
				</div>
			</div>
			<div class="col-lg-4">
				<?php echo $this->Form->input('website',array('class'=>'form-control input-sm'));?>
			</div>
		</div>
	</div>
</div>
<div class="row">
	<div class="col-lg-2 col-lg-offset-4">
		<h3 class="pull-right"><a href="/amigosource/user-account" id="Next" class="glyphicon glyphicon-circle-arrow-left"></a> Back</h3>
	</div>
	<div class="col-lg-2">
		<h3 class="pull-left">Next <a href="/amigosource/credential-profile" id="Next" class="glyphicon glyphicon-circle-arrow-right"></a></h3>
	</div>
	
	<div class="col-lg-3 col-lg-offset-1">
		<h3 class="pull-right">Back To Top <a href="#" id="Next" class="glyphicon glyphicon-circle-arrow-up" ></a></h3>
	</div>
</div>

<div class="row hide">
	<div class="col-lg-2">
		<?php echo $this->Form->input('city_municipality_lists',array('id'=>'CityAndMunicipalityList','options'=>$cityAndMunicipalities,'empty'=>'Select','class'=>'form-control input-sm','label'=>'City/Municipality'));?>
	</div>
</div>
			
