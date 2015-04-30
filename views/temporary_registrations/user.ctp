<?php echo $this->Form->create('TemporaryRegistration',array('action'=>'add'));?>
<div class="container" ng-controller="PageController">
<!--------------------BREADCRUMBS---------------------------->
	<center class="page-header">
		<h2 class="action-name">Registration</h2>
		<div class="row-fluid">
			<ol class="wizard">
			  <li ng-repeat="s in page.steps" ng-class="{current: isCurrent($index)}"><span class="badge">{{$index + 1}}</span> {{s.step.name}}  <i ng-class="s.step.icon"></i> </li>
			</ol>
		</div>		
		<div class="pull-right action-buttons hide">
		  <a class="btn btn-success" data-toggle="modal"  href="#modal-sample"><i class="glyphicon glyphicon-plus"></i></a>
		  <a class="btn btn-default"  data-toggle="collapse" data-parent="#accordion" href="#collapseOne" aria-expanded="true" aria-controls="collapseOne" ><i class="glyphicon glyphicon-filter"></i></a>
		  <button class="btn  btn-labeled toggle-view">
				<span class="btn-label"><i class="glyphicon glyphicon-list"></i></span>
				<i class="glyphicon glyphicon-th-large"></i>
		  </button>
		</div>
	</center>	
	
<!---------------------------BODY------------------------------------>
	<div class="row-fluid">
		<!--------------------------STEP 1----------------------------->
		<div class="row" ng-show="current_step_index === 0" id="Step-1">
			<div class="col-lg-4 col-lg-offset-4">
				<?php echo $this->Form->input('email',array('class'=>'form-control input-sm'));?>
				<?php echo $this->Form->input('password',array('type'=>'password','class'=>'form-control input-sm'));?>
				<?php echo $this->Form->input('confirm_password',array('type'=>'password','class'=>'form-control input-sm'));?><br/>
				<?php echo $this->Form->input('registration_date',array('value'=>date('Y-m-d'),'type'=>'hidden','class'=>'form-control input-sm'));?><br/>
				
				<label><b>I'm a</b></label>
				<div class="form-group">
					<label class="radio-inline">
						<input type="radio" name="data[TemporaryRegistration][registration_type]" value="1" ng-model="type">Suppplier
					</label>
					<label class="radio-inline">
						<input type="radio" name="data[TemporaryRegistration][registration_type]" value="2" ng-model="type">Buyer
					</label>
				</div>
			</div>
		</div>
		
		<!--------------------------STEP 2----------------------------->		
		<div class="row" ng-show="current_step_index === 1" id="Step-2">
			<div class="panel panel-primary">
				<div class="panel-heading">General</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-4">
							<?php echo $this->Form->input('business_name',array('class'=>'form-control input-sm'));?>
						</div>
						<div class="col-lg-3">
							<?php echo $this->Form->input('business_type_id',array('options'=>$businessTypes,'empty'=>'Select','class'=>'form-control input-sm'));?>
						</div>
					</div>
					<h4>Business Address</h4>
					<div class="row">
						<div class="col-lg-2">
							<?php echo $this->Form->input('business_country',array('label'=>'Country','id'=>'CountryId','options'=>$countries,'empty'=>'Select','class'=>'form-control input-sm'));?>
						</div>
						<div class="col-lg-2">
							<?php echo $this->Form->input('business_province',array('label'=>'Province','id'=>'ProvinceDropDown','options'=>$provinces,'empty'=>'Select','class'=>'form-control input-sm'));?>
							<?php echo $this->Form->input('business_province',array('label'=>'Province','id'=>'ProvinceText','type'=>'text','class'=>'form-control input-sm'));?>
						</div>
						<div class="col-lg-2">
							<?php echo $this->Form->input('business_city',array('label'=>'City/Municipality','id'=>'CityAndMunicipalityText','class'=>'form-control input-sm','label'=>'City/Municipality'));?>
							<?php echo $this->Form->input('business_city',array('label'=>'City/Municipality','id'=>'CityAndMunicipalityDropdown','options'=>'','empty'=>'Select','class'=>'form-control input-sm','label'=>'City/Municipality'));?>
						</div>
						<div class="col-lg-5">
							<?php echo $this->Form->input('business_street_no',array('class'=>'form-control input-sm','label'=>'No. & Street'));?>
						</div>
						<div class="col-lg-1">
							<?php echo $this->Form->input('business_zipcode',array('label'=>'Zipcode','class'=>'form-control input-sm'));?>
						</div>
					</div>
					<h4>Contact</h4>
					<div class="row">
						<div class="col-lg-4">
							<?php echo $this->Form->input('contact_name',array('label'=>'Contact Name','class'=>'form-control input-sm'));?>
						</div>
						<div class="col-lg-2">
							<?php echo $this->Form->input('designation',array('class'=>'form-control input-sm'));?>
						</div>
						<div class="col-lg-2">
							<label for="landline">Landline</label>
							<div class="input-group">
								<span class="input-group-addon country-code"></span>
								<input name="data[TemporaryRegistration][landline_no]" type="text" class="form-control input-sm numeric" id="landline" placeholder="Area Code+Phone No.">
							</div>
						</div>
						<div class="col-lg-2">
							<label for="mobile">Mobile</label>
							<div class="input-group">
								<span class="input-group-addon country-code"></span>
								<input name="data[TemporaryRegistration][mobile_no]" type="text" class="form-control input-sm numeric" id="mobile" placeholder="Mobile No.">
								
							</div>
						</div>
						<div class="col-lg-2">
							<label for="fax">Fax</label>
							<div class="input-group">
								<span class="input-group-addon country-code"></span>
								<input name="data[TemporaryRegistration][fax_no]" type="text" class="form-control input-sm numeric" id="fax" placeholder="Area Code+Fax No.">
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
						<div class="col-lg-4">
							<label>Business Logo</label>
							<div class="input-group">
								<input type="text" class="form-control input-sm" name="data[TemporaryRegistration][logo_path]"id="LogoPath">
								<span class="input-group-btn">
									<button class="btn btn-default btn-sm" type="button" id="BrowseLogo">Browse</button>
								</span>
							</div>
						</div>
						<div class="col=lg-2 hide">
							<input type="file" name="data[TemporaryRegistration][logo]" id="BusinessLogo" class="btn btn-primary">
						</div>
						<div class="col-lg-4">
							<?php echo $this->Form->input('website_address',array('label'=>'Website','class'=>'form-control input-sm'));?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--------------------------STEP 3----------------------------->		
		<div class="row" ng-show="current_step_index === 2" id="Step-3">
			<div class="panel panel-primary">
				<div class="panel-heading">
					Certifications
				</div>
				<div class="panel-body">
					<table class="table table-bordered table-hovered table-condensed" id="CertificationsTable">
						<thead>
							<tr>
								<th class="text-center w38">Description</th>
								<th class="text-center w38">Issuing Agency</th>
								<th class="text-center w14">Date Issued</th>
								<th class="text-center w10">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $this->Form->input('TemporaryRegistrationCertification.0.description',array('field'=>'description','class'=>'form-control input-sm','div'=>false,'label'=>false,'id'=>false))?></td>
								<td><?php echo $this->Form->input('TemporaryRegistrationCertification.0.issuing_agency',array('field'=>'issuing_agency','class'=>'form-control input-sm','div'=>false,'label'=>false,'id'=>false))?></td>
								<td><?php echo $this->Form->input('TemporaryRegistrationCertification.0.date_issued',array('field'=>'date_issued','type'=>'text','class'=>'form-control input-sm datepicker','data-date-format'=>'yyyy-mm-dd','div'=>false,'label'=>false))?></td>
								<td class="text-center">
									<a class="glyphicon glyphicon-plus-sign add-certificate" data-toggle="tooltip" title="Add Row"></a>  &nbsp;
									<a class="glyphicon glyphicon-trash delete-certificate" data-toggle="tooltip" title="Delete Row"></a>
								</td>
							</tr>
						</tbody>
					</table>
				
				</div>
			</div>	
			<div class="panel panel-primary">
				<div class="panel-heading">Profile</div>
				<div class="panel-body">
					<!--
					<h4>Trade & Market</h4>
					<table class="table table-bordered table-hovered table-condensed">
						<thead>
							<tr>
								<th class="text-center w23">Main Market</th>
								<th class="text-center w22">Main Costumer</th>
								<th class="text-center w15">Currency</th>
								<th class="text-center w20" colspan="2">Total Annual Sales Volume</th>
								<th class="text-center w10">Export Percentage</th>
								<th class="text-center w5">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr>
								<td><?php echo $this->Form->input('main_market',array('rows'=>'3','type'=>'textbox','placeholder'=>'Countries, areas','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
								<td><?php echo $this->Form->input('main_costumer',array('rows'=>'3','type'=>'textbox','placeholder'=>'Countries, areas, companies','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
								<td><?php echo $this->Form->input('monetary_currency_id',array('options'=>$monetrayCurrencies,'empty'=>'Select','class'=>'form-control input-sm monetary-currency','div'=>false,'label'=>false))?></td>
								<td class='currency_symbol'>&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;&nbsp;</td>
								<td  style="border-left: none;"><?php echo $this->Form->input('total_annual_sales_volume',array('options'=>$totalAnnualSalesVolume,'empty'=>'Select','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
								<td><?php echo $this->Form->input('export_percentage',array('options'=>$exportPercentage,'empty'=>'Select','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
								
								
								<td class="text-center">
									<a class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit Row"></a>
								</td>
							</tr>
						</tbody>
					</table>
					-->
					<h4>Factory Information</h4>
					<div class="row">
						<div class="col-lg-4">
							<?php echo $this->Form->input('factory_location',array('label'=>'Location','rows'=>'3','type'=>'textbox','class'=>'form-control input-sm'));?>	
						</div>
						<div class="col-lg-4">
							<?php echo $this->Form->input('contract_manufacturing',array('rows'=>'3','type'=>'textbox','class'=>'form-control input-sm'));?>
						</div>
					</div><br/>
					<div class="row">	
						<div class="col-lg-2">
							<?php echo $this->Form->input('production_line_count',array('label'=>'No. of Production Line','class'=>'form-control input-sm'));?>
						</div>
						<div class="col-lg-2">
							<?php echo $this->Form->input('r_and_d_staff_count',array('label'=>'No Of R&D Staff','class'=>'form-control input-sm'));?>
						</div>
						<div class="col-lg-2">
							<?php echo $this->Form->input('qc_staff_count',array('label'=>'No Of QC Staff','class'=>'form-control input-sm'));?>
						</div>
						<div class="col-lg-2">
							<?php echo $this->Form->input('employee_count',array('label'=>'No. of Employees','options'=>$noOfEmployees,'empty'=>'Select','class'=>'form-control input-sm'));?>
						</div>
					</div>
				</div>
			</div>
		</div>
		
		<!--------------------------STEP 4----------------------------->
		<div class="row" ng-show="current_step_index === 3" id="Step-4">			
			<div class="panel panel-primary">
				<div class="panel-heading">Products</div>
				<div class="panel-body">
					<div class="row">
						<div class="col-lg-6" id="AddProductForm">
							<center><h4><b>Add Product</b></h4></center>
							<div class="row">
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.general_category_id',array('field'=>'general_category_id','options'=>$generalCategoristLists,'empty'=>'Select','class'=>'form-control input-sm general-category','div'=>false))?>			
								</div>
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.classification_id',array('field'=>'classification_id','options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm general-category-classification','div'=>false))?>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.name',array('field'=>'name','rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','div'=>false))?>			
								</div>
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.details',array('field'=>'details','rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','div'=>false))?>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.standard_package',array('field'=>'standard_package','label'=>'Standard Pkg & Ordering Leadtime','rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','div'=>false))?>			
								</div>
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.specification',array('field'=>'specification','rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','div'=>false))?>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.technical_description',array('field'=>'technical_description','rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','div'=>false))?>			
								</div>
								<div class="col-lg-3">
									<?php echo $this->Form->input('Pr.monetary_currency_id',array('label'=>'Cost Currency','field'=>'monetary_currency_id','options'=>$monetrayCurrencies,'empty'=>'Select','class'=>'form-control input-sm','div'=>false))?>
								</div>
								<div class="col-lg-3">
									<?php echo $this->Form->input('Pr.cost',array('field'=>'cost','class'=>'form-control input-sm numeric monetary','div'=>false))?>			
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.unit_of_measure',array('field'=>'unit_of_measure','label'=>'Unit of Measure Code','class'=>'form-control input-sm','div'=>false))?>
								</div>
								<div class="col-lg-3">
									<?php echo $this->Form->input('Pr.stock_on_hand',array('field'=>'stock_on_hand','class'=>'form-control input-sm numeric','div'=>false))?>			
								</div>
								<div class="col-lg-3">
									<?php echo $this->Form->input('Pr.minimun_order',array('field'=>'minimun_order','label'=>'Min. Order Qty','class'=>'form-control input-sm numeric','div'=>false))?>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.payment_terms',array('field'=>'payment_terms','class'=>'form-control input-sm','div'=>false))?>			
								</div>
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.shipping_terms',array('field'=>'shipping_terms','class'=>'form-control input-sm','div'=>false))?>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.contact_name',array('field'=>'product_contact_name','class'=>'form-control input-sm','div'=>false))?>			
								</div>
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.contact_no',array('field'=>'contact_no','class'=>'form-control input-sm','div'=>false))?>
								</div>
							</div>
							<div class="row">
								<div class="col-lg-6">
									<?php echo $this->Form->input('Pr.contact_email',array('field'=>'contact_email','class'=>'form-control input-sm','div'=>false))?>			
								</div>
								<div class="col-lg-6">
									<label>Product Image</label>
									<div class="input-group">
										<input type="text" class="form-control input-sm" id="ProductLogoPath" name="data[Pr][image]" field="image">
										<span class="input-group-btn">
											<button class="btn btn-default btn-sm" type="button" id="BrowseProductLogoButton">Browse</button>
										</span>
									</div>
									<input type="file" name="data[Pr][logo]" id="ProductLogoOpenFile" class="hide">
								</div>
							</div>
							<hr/>
							<div class="row text-right">
								<div class="col-lg-5 col-lg-offset-7">
									<button type="button" class="btn" id="ResetProductButton">Reset</button>
									<button type="button" class="btn btn-primary" id="AddProductButton">Add</button>
								</div>
							</div>
						</div>
						<div class="col-lg-6">
							<center><h4><b>Products Added</b></h4></center>
							<table class="table table-bordered table-hovered table-condensed" id="ProductTable">
								<thead>
									<tr>
										<th class="text-center">Name</th>
										<th class="text-center">General Category</th>
										<th class="text-center">Classification</th>
										<th class="text-center">Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr style="display:none">
										<td><?php echo $this->Form->input('TemporaryRegistrationProduct.name',array('type'=>'text','field'=>'name','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
										<td><?php echo $this->Form->input('TemporaryRegistrationProduct.general_category_id',array('field'=>'general_category_id','options'=>$generalCategoristLists,'empty'=>'Select','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
										<td><?php echo $this->Form->input('TemporaryRegistrationProduct.classification_id',array('field'=>'classification_id','options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
										
										<td class="hide">
											<?php echo $this->Form->input('TemporaryRegistrationProduct.details',array('field'=>'details','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.standard_package',array('field'=>'standard_package','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.specification',array('field'=>'specification','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.technical_description',array('field'=>'technical_description','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.monetary_currency_id',array('field'=>'monetary_currency_id','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.cost',array('field'=>'cost','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.unit_of_measure',array('field'=>'unit_of_measure','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.stock_on_hand',array('field'=>'stock_on_hand','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.minimun_order',array('field'=>'minimun_order','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.payment_terms',array('field'=>'payment_terms','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.shipping_terms',array('field'=>'shipping_terms','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.contact_name',array('field'=>'contact_name','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.contact_no',array('field'=>'contact_no','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.contact_email',array('field'=>'contact_email','label'=>false,'class'=>'form-control'));?>
											<?php echo $this->Form->input('TemporaryRegistrationProduct.image',array('field'=>'image','label'=>false,'class'=>'form-control'));?>
										</td>
										
										<td class="text-center">
											<a class="glyphicon glyphicon-edit view-product" data-toggle="tooltip" title="View||Edit Row"></a> &nbsp;
											<a class="glyphicon glyphicon-trash delete-product" data-toggle="tooltip" title="Delete Row"></a>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td colspan="4">NO DATA AVAILABLE</td>
									</tr>
								</tfoot>
							</table>
						</div>
					</div>
				</div>
			</div>
		</div>
	
		<!--------------------------STEP 5----------------------------->
		<center class="row" ng-show="current_step_index === 4" id="Step-5">		
			<h5>Horay!You are one step away to complete our registration process.Please be advise that we will send you a confirmation message on the email address you provided... Oh, and don't forget to click send button to send your registration form to us.Thank you!</h5>
			<h6>(This is a confirmation message example)</h6>
		</center>
		<!------------------------/STEPS------------------------------->
	</div>
	<hr/>
<!---------------NAVIGATION---------------->
	<center class="row">
		<div class="col-lg-2 col-lg-offset-5">
			<span class="pull-left"  ng-hide="current_step_index === 0"><h3><a style="text-decoration: none;" ng-click="backStep()" class="glyphicon glyphicon-backward"></a></h3>Prev</span>
			<span class="pull-right" ng-hide="current_step_index === 3"><h3><a style="text-decoration: none;" ng-click="advanceStep($index)" class="glyphicon glyphicon-forward"></a></h3>Next</span>
			<span class="pull-right" ng-show="current_step_index === 3"><h3><a style="text-decoration: none;" id="ConfirmRegistration" class="glyphicon glyphicon-send"></a></h3>Send Registration</span>
		</div>
	</center>
	<hr/>
</div>
<?php echo $this->Form->end();?>

<div class="row hide">
	<?php echo $this->Form->input('city_municipality_lists',array('id'=>'CityAndMunicipalityList','options'=>$cityAndMunicipalities,'empty'=>'Select','class'=>'form-control input-sm','label'=>'City/Municipality'));?>
	
	<?php echo $this->Form->input('classification',array('options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm classification-category hide','div'=>false,'label'=>false))?>

</div>

<?php echo $this->Html->script('biz/registration/products',array('inline'=>false))?>
<?php echo $this->Html->script('biz/registration/certifications',array('inline'=>false))?>