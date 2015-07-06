<?php 
	echo $this->Html->css(array('plugins/wizard/wizard','plugins/fileinput/fileinput.min'));	
	echo $this->Html->script(array('/countries','/provinces','/barangays','/categories','/business_types','/currencies','plugins/utils/date','plugins/wizard/wizard','plugins/fileinput/fileinput.min','directives/default','filters/titlecase','controllers/signup'),array('inline'=>false));	
?>
<style type="text/css">
	form#BusinessAddForm{min-height:33.33rem;margin-bottom:1.33rem;}
	div.panel.active,div.panel.splash{display:block;}
	div.splash{margin-top:13.33rem}
	div.panel,div.splash.loaded{display:none;}
	ol.wizard li .badge.check{display:none;}
	ol.wizard li .badge.check.show{display:inline-block !important}
	.modal.fade.in{display:block;}
	.photo-delete,.logo-delete{position:absolute;right:0;margin-right:0.33rem;}
</style>
<section id="registration" ng-controller="BusinessRegistrationController" ng-init="initializeController()">
	<div class="row-fluid">
		<div class="col-sm-10 div col-sm-offset-1 text-center">
			<h2 class="uppercase">Registration</h2>
			<ol class="wizard">
				<li ng-click="updateActiveSection('user_account')" ng-class="{current:ActiveSection==='user_account', success: ValidatedSectionIndex>0}">
					<span class="badge" ng-hide="ValidatedSectionIndex>0&&ActiveSectionIndex!=0">1</span> 
					<span class="badge check" ng-class="{show:ValidatedSectionIndex>0&&ActiveSectionIndex!=0}">&#10004;</span> 
					User Account  
					<i class="glyphicon glyphicon-user"></i> 
				</li>
				<li ng-click="updateActiveSection('member_details')" ng-class="{current:ActiveSection==='member_details', success:ValidatedSectionIndex>1}">
					<span class="badge" ng-hide="ValidatedSectionIndex>1&&ActiveSectionIndex!=1">2</span> 
					<span class="badge check" ng-class="{show:ValidatedSectionIndex>1&&ActiveSectionIndex!=1}">&#10004;</span> 
					Member Details
					<i class="glyphicon glyphicon glyphicon-file"></i> 
				</li>
				<li ng-click="updateActiveSection('certification_&_profile')" ng-class="{current:ActiveSection==='certification_&_profile', success:ValidatedSectionIndex>2}">
					<span class="badge" ng-hide="ValidatedSectionIndex>2&&ActiveSectionIndex!=2">3</span> 
					<span class="badge check" ng-class="{show:ValidatedSectionIndex>2&&ActiveSectionIndex!=2}">&#10004;</span> 
					Certifications & Profile  
					<i class="glyphicon glyphicon-folder-close"></i>
				</li>
				<li ng-click="updateActiveSection('product_details')" ng-class="{current:ActiveSection==='product_details', success:ValidatedSectionIndex>3}" ng-hide="User.user_type=='buyer'">
					<span class="badge" ng-hide="ValidatedSectionIndex>3&&ActiveSectionIndex!=3">4</span> 
					<span class="badge check" ng-class="{show:ValidatedSectionIndex>3&&ActiveSectionIndex!=3}">&#10004;</span> 
					Product Details
					<i class="glyphicon glyphicon-shopping-cart"></i>
				</li>
				<li ng-click="updateActiveSection('confirmation')" ng-class="{current:ActiveSection==='confirmation'}">
					<span class="badge" default ng-bind="LastStep">5</span> 
					Confirmation
					<i class="glyphicon glyphicon-thumbs-up"></i>
				</li>
			</ol>
		</div>
	</div>
	<div class="row-fluid">
		<div class="businesses form col-sm-10 col-sm-offset-1">
		<?php echo $this->CustomForm->create('Business',array('name'=>'BusinessAddForm','autocomplete'=>'off','class'=>'form-vertical','inputDefaults' => array('input'=>array('class'=>'form-control'),'div'=>array('class'=>'form-group col-sm-6'))));?>
				<div class="splash text-center" ng-class="{loaded:ActiveSectionIndex!=undefined}">
					Loading...
				</div>
				<section id="user_account" ng-controller="UserAccountController">
					<div class="panel" ng-class="{active:ActiveSection==='user_account'}">
						<div class="panel-body">
						<?php
							echo $this->CustomForm->input('User.email',array('required'=>'','autocomplete'=>'off','ng-model'=>'User.email', 'div'=>'form-group col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3','type'=>'email','ng-focus'=>'EmailFocused=true','ng-blur'=>'checkEmail()', 'ng-keyup'=>'resetEmailValidation()'));
						?>
						<div class="form-group col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">					
							<div class="alert" role="alert" ng-show="CheckingUserEmail &&  !BusinessAddForm['data[User][email]'].$invalid ">Checking...</div>
							<div class="alert alert-success" role="alert" ng-show="BusinessAddForm['data[User][email]'].$dirty && !CheckingUserEmail && !BusinessAddForm['data[User][email]'].$invalid && !BusinessAddForm['data[User][email]'].$error.taken && false">Valid email</div>
							<div class="alert alert-danger" role="alert" ng-show="BusinessAddForm['data[User][email]'].$dirty && BusinessAddForm['data[User][email]'].$invalid && !BusinessAddForm['data[User][email]'].$error.taken && !EmailFocused">Invalid email</div>
							<div class="alert alert-danger" role="alert" ng-show="BusinessAddForm['data[User][email]'].$dirty && !BusinessAddForm['data[User][email]'].$error.pattern  && BusinessAddForm['data[User][email]'].$error.taken">Email already taken</div>
						</div>
						<?php 
							echo $this->CustomForm->input('User.password',array('ng-model'=>'User.password','ng-blur'=>"PasswordFocused=false" ,'ng-focus'=>"PasswordFocused=true" ,'div'=>'form-group col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3', 'ng-minlength'=>'8'));
						?>
						<div class="form-group col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
							<div class="alert alert-danger" role="alert" ng-show="BusinessAddForm['data[User][password]'].$error.minlength && !PasswordFocused">Password must be at least 8 characters.</div>
						</div>
						<?php
							echo $this->CustomForm->input('User.confirm_password',array('match'=>'User.password','ng-blur'=>"ConfirmPasswordFocused=false" ,'ng-focus'=>"ConfirmPasswordFocused=true",'ng-model'=>'User.confirm_password', 'type'=>'password', 'div'=>'form-group col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3 required'));
						?>
							<div class="form-group col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
								<div class="alert alert-danger" role="alert" ng-show="BusinessAddForm['data[User][confirm_password]'].$dirty && BusinessAddForm['data[User][confirm_password]'].$error.match && !ConfirmPasswordFocused">Password mismatch.</div>
							</div>
							<div class="form-group col-md-4 col-md-offset-4 col-sm-6 col-sm-offset-3">
								<label>I'm a</label>
								<div>
									<label class="radio-inline">
										<input type="radio" name="data[User][user_type]"  value="supplier" ng-click="updateUserSteps('supplier')"  ng-model="User.user_type" /> Supplier
									</label>
									<label class="radio-inline">
										<input type="radio" name="data[User][user_type]"  value="buyer" ng-click="updateUserSteps('buyer')" ng-model="User.user_type" /> Buyer
									</label>
								</div>
							</div>
						</div>
					</div>
				</section>
				<section id='member_details' ng-controller="MemberDetailsController">
					<div class="panel panel-primary" ng-class="{active:ActiveSection==='member_details'}">
						<div class="panel-heading"><h3>General</h3></div>
						<div class="panel-body">
							<?php
								echo $this->CustomForm->input('Business.name',array('ng-model'=>'Business.name','div'=>'form-group col-sm-8'));
								echo $this->CustomForm->input('Business.business_type_id',array('empty'=>'Select Business Type','ng-model'=>'Business.business_type_id','div'=>'form-group col-sm-4'));
							?>
							<h4>Business Address</h4>
							<div class="form-group col-sm-4 required" ng-class="{'col-sm-4':Business.province!='MNL','col-sm-3':Business.province=='MNL'}">
								<label>Country</label>
								<select name="data[Business][country]" required id="BusinessCountry" class="form-control"  ng-model="Business.country" ng-change="Business.province=''">
									<option value="">Select Country</option>
									<option ng-selected="country.id===Business.country"  ng-repeat="country in Countries" ng-value="country.id">{{country.name}}</option>
								</select>
							</div>
							<div class="form-group col-sm-4 required" ng-class="{'col-sm-4':Business.province!='MNL','col-sm-3':Business.province=='MNL'}">
								<label>Province</label>
								<select name="data[Business][province]" required  id="BusinessProvince" class="form-control"  ng-model="Business.province" ng-change="Business.city=''" >
									<option value="">Select Province</option>
									<option ng-selected="province.id===Business.province" ng-repeat="province in Provinces | filter:filterCountry" ng-value="province.id">{{province.name}}</option>
								</select>
							</div>
							<div class="form-group col-sm-4 required" ng-class="{'col-sm-4':Business.province!='MNL','col-sm-3':Business.province=='MNL'}">
								<label>City/Municipality</label>
								<select name="data[Business][city]" required id="BusinessCity" class="form-control"   ng-model="Business.city" ng-hide="Business.province">
									<option value="">Select City/Municipality</option>
								</select>
								<select name="data[Business][city]" required id="BusinessCity" class="form-control"  ng-model="Business.city"  ng-repeat="province in Provinces | filter:filterProvince ">
									<option value="">Select City/Municipality</option>
									<option ng-selected="city.id===Business.city" ng-repeat="city in province.cities"  ng-value="city.id">{{city.name}}</option>
								</select>
							</div>
							<div class="form-group col-sm-3 required" ng-show="Business.province === 'MNL'">
								<label>Town/Barangay</label>
								<select name="data[Business][barangay]" ng-required="Business.province === 'MNL'"  id="BusinessBarangay" class="form-control"  ng-model="Business.barangay" >
									<option value="">Select Town/Barangay</option>
									<option  ng-repeat="barangay in Barangays | filter:filterBarangay " ng-selected="barangay.id===Business.barangay" ng-value="barangay.id">{{barangay.name}}</option>
								</select>
							</div>
							<?php
								echo $this->CustomForm->input('Business.address',array('ng-model'=>'Business.address','div'=>'form-group col-sm-10','placeholder'=>'No./Bldg Name/Street/Village/Subd/Barangay'));
								echo $this->CustomForm->input('Business.zip_code',array('ng-model'=>'Business.zip_code','numeric-only'=>'','type'=>'text','div'=>'form-group col-sm-2'));
							?>
							<div class="clearfix"></div>
							<h4>Contact</h4>
							<?php
								echo $this->CustomForm->input('Business.contact_name',array('ng-model'=>'Business.contact_name','div'=>'form-group col-sm-3'));
								echo $this->CustomForm->input('Business.designation',array('ng-model'=>'Business.designation','div'=>'form-group col-sm-3'));
								?>
								<div class="form-group col-sm-2 required">
									<label for="BusinessLandline">Landline</label>
									<?php echo $this->CustomForm->input('Business.landline',array('class'=>'form-control','placeholder'=>'Area+Landline','numeric-only'=>'','ng-model'=>'Business.landline','ng-minlength'=>'8','ng-maxlength'=>'9','before'=>'<div class="input-group">','after'=>'</div>','between'=>'<span class="input-group-addon">+{{CountryCode}}</span>','div'=>'input-group','label'=>false)); ?>
								</div>
								<div class="form-group col-sm-2 required">
									<label for="BusinessMobile">Mobile</label>
									<?php echo $this->CustomForm->input('Business.mobile',array('class'=>'form-control','placeholder'=>'Area+Mobile','numeric-only'=>'','ng-model'=>'Business.mobile','ng-minlength'=>'10','ng-maxlength'=>'10','before'=>'<div class="input-group">','after'=>'</div>','between'=>'<span class="input-group-addon">+{{CountryCode}}</span>','div'=>'input-group','label'=>false)); ?>
								</div>
								<div class="form-group col-sm-2 ">
									<label for="BusinessFax">Fax</label>
									<?php echo $this->CustomForm->input('Business.fax',array('class'=>'form-control','placeholder'=>'Area+Fax','numeric-only'=>'','ng-model'=>'Business.fax','ng-minlength'=>'8','ng-maxlength'=>'9','before'=>'<div class="input-group">','after'=>'</div>','between'=>'<span class="input-group-addon">+{{CountryCode}}</span>','div'=>'input-group','label'=>false)); ?>
								</div>
								<?php
							?>
						</div>
					</div>
					<div class="panel panel-primary" ng-class="{active:ActiveSection==='member_details'}">
						<div class="panel-heading"><h3>Business ID</h3></div>
						<div class="panel-body">
							<div class="form-group col-sm-6">
								<label for="BusinessLogoUploader">Logo</label>
								<div class="gallery row-fluid" ng-show="Business.logo">
									<div class="thumbnail col-sm-6" >
										<button class="btn btn-sm btn-danger logo-delete" type="button" ng-click="removeLogo()" >&times;</button>
										<img ng-src="img/files/{{Business.logo}}"  />
									</div>
									<div class="clearfix"></div>
								</div>
								<?php echo $this->CustomForm->input('Business.logo_uploader',array('div'=>false,'label'=>false,'type'=>'file','fileread'=>'','name'=>'pictures[]')); ?>
							</div>
							<?php
								echo $this->CustomForm->input('Business.website',array('ng-model'=>'Business.website','type'=>'url','placeholder'=>'http://www.example.com'));
							?>
						</div>
					</div>
				</section>
				<section id='member_details' ng-controller="CertificationProfileController">
					<div class="panel panel-primary" ng-class="{active:ActiveSection==='certification_&_profile'}">
						<div class="panel-heading"><h3>Certifications</h3></div>
						<div class="panel-body">					
							<table class="table table-bordered"> 
								<thead>
									<tr>
										<th>Description</th>
										<th>Issuing Agency</th>
										<th>Date Issued</th>
										<th>Actions</th>
									</tr>
								</thead>
								<tbody>
									<tr ng-repeat="certification in Certifications track by $index">
										<td><input name="data[Certification][{{$index}}][description]" type="text"  ng-model="certification.description" class="form-control"></td>
										<td><input name="data[Certification][{{$index}}][issuing_agency]" type="text"  ng-model="certification.issuing_agency"  class="form-control"></td>
										<td><input name="data[Certification][{{$index}}][date_issued]"  type="text"  datepicker datepicker-format="mm/dd/yy" ng-model="certification.date_issued"  pattern="\d{1,2}/\d{1,2}/\d{4}" placeholder="mm/dd/yyyy" class="form-control" /></td>
										<td>
											<button class="btn btn-danger" type="button" ng-click="removeCertification($index)">&times;</button>
										</td>
									</tr>
								</tbody>
								<tfoot>
									<tr>
										<td><input name="data[Certification][description]" ng-required="ShowCertificationsError" type="text"  ng-model="Certification.description"  id="CertificationDescription" class="form-control"></td>
										<td><input name="data[Certification][issuing_agency]" ng-required="ShowCertificationsError"  type="text"  ng-model="Certification.issuing_agency"  id="CertificationIssuingAgency" class="form-control"></td>
										<td><input name="data[Certification][date_issued]" ng-required="ShowCertificationsError"  type="text"  datepicker datepicker-format="mm/dd/yy" ng-model="Certification.date_issued"  id="CertificationDateIssued"  pattern="\d{1,2}/\d{1,2}/\d{4}"   placeholder="mm/dd/yyyy" class="form-control" /></td>
										<td>
											<button class="btn btn-success" type="button" ng-click="addCertification()">&plus;</button>
										</td>
									</tr>
								</tfoot>
							</table>
							<div class="alert alert-danger" role="alert" ng-show="ShowCertificationsError && BusinessAddForm['data[Certification][description]'].$dirty && BusinessAddForm['data[Certification][issuing_agency]'].$dirty && BusinessAddForm['data[Certification][date_issued]'].$dirty">Add at least one certification. Click <button class="btn btn-success btn-xs" disabled>&plus;</button> to save.</div>
						</div>
					</div>
					<div class="panel panel-primary" ng-class="{active:ActiveSection==='certification_&_profile'}" ng-show="User.user_type == 'supplier'">
						<div class="panel-heading"><h3>Factory Information</h3></div>
						<div class="panel-body">
							
							<?php
								echo $this->CustomForm->input('Factory.location',array('ng-model'=>'Factory.location'));
								echo $this->CustomForm->input('Factory.contract_manufacturing',array('ng-model'=>'Factory.contract_manufacturing'));
								echo $this->CustomForm->input('Factory.product_line_count',array('label'=>'No of Product Line','empty'=>'Select one','options'=>$noOfRange,'ng-model'=>'Factory.product_line_count','div'=>'form-group col-sm-3'));
								echo $this->CustomForm->input('Factory.r_and_d_staff_count',array('label'=>'No of R and D Staff','empty'=>'Select one','options'=>$noOfRange,'ng-model'=>'Factory.r_and_d_staff_count','div'=>'form-group col-sm-3'));
								echo $this->CustomForm->input('Factory.qc_staff_count',array('label'=>'No of QC Staff','empty'=>'Select one','options'=>$noOfRange,'ng-model'=>'Factory.qc_staff_count','div'=>'form-group col-sm-3'));
								echo $this->CustomForm->input('Factory.employee_count',array('label'=>'No of Employees','empty'=>'Select one','options'=>$noOfEmployees,'ng-model'=>'Factory.employee_count','div'=>'form-group col-sm-3'));
							?>
						</div>
					</div>
				</section>
				<section id='product_details' ng-controller="ProductDetailsController">
					<div class="panel panel-primary" ng-class="{active:ActiveSection==='product_details'}">
						<div class="panel-heading">
							<h3>Product Details</h3>
						</div>
						<div class="panel-body"> 
							<div class="row">
								<div class="col-sm-6">
									<h4>Add Product</h4>
									<div class="row" ng-form="ProductAddForm">
										<?php echo $this->CustomForm->input('Product.0.category_id',array('ng-disabled'=>'ProductView','required'=>'','label'=>'General Category','ng-model'=>'Product.category_id','options'=>$categories,'empty'=>'Select Category')); ?>
										<div class="form-group col-sm-6">
										<label for="Product0ClassificationId">Classification</label>
											<select name="data[Product][0][classification_id]" required ng-disabled="ProductView" ng-model="Product.classification_id" class="form-control" id="Product0ClassificationId">
												<option value="">Select Classification</option>
												<option ng-selected="category.id===Product.classification_id" ng-repeat="category in SubCategories | filter:filterSubCategory"  ng-value="category.id">{{category.name}}</option>
											</select>
										</div>
										
											<?php 
												echo $this->CustomForm->input('Product.0.name',array('required'=>'','ng-disabled'=>'ProductView','ng-model'=>'Product.name','rows'=>1,'div'=>array('class'=>'form-group col-sm-12 required')));
												
											?>
										<div class="row">
											<div class="col-sm-12">
											<?php	
												echo $this->CustomForm->input('Product.0.details',array('required'=>'','ng-disabled'=>'ProductView','ng-model'=>'Product.details','rows'=>2,'div'=>array('class'=>'form-group col-sm-6 required')));
												echo $this->CustomForm->input('Product.0.standard_pckg',array('required'=>'','ng-disabled'=>'ProductView','ng-model'=>'Product.standard_pckg','label'=>'Standard Pkg & Ordering Leadtime','rows'=>1,'div'=>array('class'=>'form-group col-sm-6 required')));
											?>
											</div>
										</div>
										<div class="row">
											<div class="col-sm-12">
												<?php
													echo $this->CustomForm->input('Product.0.specifications',array('required'=>'','ng-disabled'=>'ProductView','ng-model'=>'Product.specifications','rows'=>2,'div'=>array('class'=>'form-group col-sm-6 required')));
													echo $this->CustomForm->input('Product.0.technical_desc',array('required'=>'','ng-disabled'=>'ProductView','ng-model'=>'Product.technical_desc','rows'=>2,'label'=>'Technical Description','div'=>array('class'=>'form-group col-sm-6 required')));
												?>
											</div>
										</div>
										<div class="row-fluid">
										<?php
											echo $this->CustomForm->input('Product.0.cost_currency',array('ng-disabled'=>'ProductView','ng-model'=>'Product.cost_currency','options'=>$currencies,'empty'=>'Select one'));
										?>
										<div class="form-group col-sm-6 required">
											<label for="Product0Cost">Cost</label>
											<?php echo $this->CustomForm->input('Product.0.cost',array('class'=>'form-control','ng-model'=>'Product.cost','numeric-only'=>'','type'=>'text','before'=>'<div class="input-group">','after'=>'</div>','between'=>'<span class="input-group-addon"  ng-hide="Product.cost_currency">?</span><span class="input-group-addon"  ng-show="Product.cost_currency" ng-repeat="currency in Currencies | filter : {id:Product.cost_currency} ">{{currency.symbol}}</span>','div'=>'input-group','label'=>false)); ?>
										</div>
										<?php
											echo $this->CustomForm->input('Product.0.unit_measure_code',array('ng-disabled'=>'ProductView','ng-model'=>'Product.unit_measure_code'));
											echo $this->CustomForm->input('Product.0.stock_on_hand',array('ng-disabled'=>'ProductView','ng-model'=>'Product.stock_on_hand','type'=>'text','numeric-only'=>''));
											echo $this->CustomForm->input('Product.0.min_order_qty',array('ng-disabled'=>'ProductView','ng-model'=>'Product.min_order_qty','type'=>'text','numeric-only'=>''));
											echo $this->CustomForm->input('Product.0.payment_terms',array('ng-disabled'=>'ProductView','ng-model'=>'Product.payment_terms'));
											echo $this->CustomForm->input('Product.0.shipping_terms',array('ng-disabled'=>'ProductView','ng-model'=>'Product.shipping_terms'));
											
										?>
											<div class="col-sm-12">
												<div class="row">
													<?php echo $this->CustomForm->input('Product.0.contact_name',array('ng-disabled'=>'ProductView','ng-model'=>'Product.contact_name')); ?>
													<div class="form-group col-sm-6 required">
														<label for="Product0ContactNumber">Contact Number</label>
														<?php echo $this->CustomForm->input('Product.0.contact_number',array('class'=>'form-control','placeholder'=>'Area Code+Contact Number','numeric-only'=>'','ng-model'=>'Product.contact_number','ng-minlength'=>'8','ng-maxlength'=>'10','before'=>'<div class="input-group">','after'=>'</div>','between'=>'<span class="input-group-addon">+{{CountryCode}}</span>','div'=>'input-group','label'=>false)); ?>
													</div>
													<?php echo $this->CustomForm->input('Product.0.contact_email',array('ng-disabled'=>'ProductView','ng-model'=>'Product.contact_email','type'=>'email'));?>
												</div>
											</div>
										</div>
										<div class="form-group col-sm-12">
											<label for="Product0ProductImage">Product Image</label>
											<div class="gallery row-fluid" ng-show="Product.product_image.length">
												<div class="thumbnail col-sm-4" ng-repeat="url in Product.product_image track by $index" >
													<button class="btn btn-sm btn-danger photo-delete" type="button" ng-click="removeProductImage($index)" ng-show="!ProductView">&times;</button>
													<img ng-src="img/files/{{url}}"  />
												</div>
												<div class="clearfix"></div>
											</div>
											<div class="row-fluid">
												<input type="file" name="pictures[]"   id="Product0ProductImage"  multiple />
											</div>
										</div>		
									</div>
									<div class="row"> 
										<div class="pull-right">
											<input type="button" class="btn btn-default" ng-click="cancelAddProduct()" value="Cancel" />
											<input type="button" class="btn btn-primary" ng-disabled="ProductView" ng-click="confirmAddProduct()" value="{{ProductEdit? 'Update':'Add'}}" />
										</div>
									</div>
								</div>
								<div class="col-sm-6">
									<h4>Products Added</h4>
									<div class="row">
										<table class="table table-bordered">
											<thead>
												<tr>
													<th>Name</th>
													<th>Details</th>
													<th>Action</th>
												</tr>
											</thead>
											<tbody>
												<tr ng-repeat="product in Products track by $index" ng-class="{active:product==Product}">
													<td>{{product.name}}</td>
													<td>{{product.details}}</td>
													<td>
														<button class="btn btn-default" type="button" ng-click="editProduct(product)">Edit</button>
														<button class="btn btn-default" type="button" ng-click="viewProduct(product)">View</button>
														<button class="btn btn-danger" ng-disabled="ProductEdit||ProductView" type="button" ng-click="removeProduct($index)">Delete</button>
													</td>
												</tr>
											</tbody>
											<tfoot ng-hide="Products.length"> 
												<tr>
													<td colspan="3" class="text-center">No products yet</td>
												</tr>
											</tfoot>
										</table>			
									</div>
								</div>
							</div>
						</div>
					</div>
				</section>
				<div class="panel panel-primary" ng-class="{active:ActiveSection==='confirmation'}">
					<div class="panel-heading"><h3>Confirmation</h3></div>
					<div class="panel-body">
						<div class="row-fluid">
							<div class="col-sm-6">
								<dl class="dl-horizontal">
									<dt>Email</dt>
									<dd>{{User.email}}</dd>
									<dt>Name</dt>
									<dd>{{Business.name}}</dd>
									<dt>Business Type</dt>
									<dd><span ng-repeat="business_type in BusinessTypes | filter : {id:Business.business_type_id} ">{{business_type.name}}</span></dd>
									<dt>Address</dt>
									<dd>{{Business.address}}<br/><span ng-repeat="province in Provinces | filter : {id:Business.province} "><span ng-repeat="city in province.cities | filter : {id:Business.city} :true ">{{city.name}}</span></span><br/> {{Business.zip_code}} <span ng-repeat="province in Provinces | filter : {id:Business.province} ">{{province.name}}</span><br/><span ng-repeat="country in Countries | filter : {id:Business.country} ">{{country.name}}</span></dd>
									<dt>Contact Name</dt>
									<dd>{{Business.contact_name}}</dd>
									<dt>Designation</dt>
									<dd>{{Business.designation}}</dd>
									<dt>Landline</dt>
									<dd>+{{CountryCode}}{{Business.landline}}</dd>
									<dt>Mobile</dt>
									<dd>+{{CountryCode}}{{Business.mobile}}</dd>
									<dt>Fax</dt>
									<dd>+{{CountryCode}}{{Business.fax}}</dd>
									<dt>Logo</dt>
									<dd><img ng-show="Business.logo" ng-src="img/files/{{Business.logo}}" alt=""  class="thumbnail col-sm-8"/><span ng-hide="Business.logo">No logo</span></dd>
									<dt>Website</dt>
									<dd><span ng-show="Business.website">{{Business.website}}</span><span ng-hide="Business.website">No website</span></dd>
								</dl>
							</div>
							<div class="col-sm-6">
								<dl class="dl-horizontal">
									<dt>Certifications</dt>
									<dd>
										<div ng-repeat="certification in Certifications">
											{{certification.description}} by {{certification.issuing_agency}} on {{certification.date_issued}}
											
										</div>
									</dd>
								</dl>
								<dl class="dl-horizontal" ng-show="User.user_type == 'supplier'">
									<dt>Location</dt>
									<dd>{{Factory.location}}</dd>
									<dt>Contract Manufacturing</dt>
									<dd>{{Factory.contract_manufacturing}}</dd>
									<dt>No of Product Line</dt>
									<dd>{{Factory.product_line_count}}</dd>
									<dt>No of R and D Staff</dt>
									<dd>{{Factory.r_and_d_staff_count}}</dd>
									<dt>No of QC Staff</dt>
									<dd>{{Factory.qc_staff_count}}</dd>
									<dt>No of Employees</dt>
									<dd>{{Factory.employee_count}}</dd>
								</dl>
							</div>
						</div>
						<div class="row-fluid">
							<div class="col-sm-8 col-sm-offset-2" ng-show="User.user_type == 'supplier'">
								<table class="table table-bordered"> 
									<thead>
										<tr>
											<th class="text-center" colspan="2">Products</th>
										</tr>
										<tr>
											<th class="text-center">Name</th>
											<th class="text-center">Details</th>
										</tr>
									</thead>
									<tbody>
										<tr ng-repeat="product in Products">
											<td>{{product.name}}</td>
											<td>{{product.details}}</td>
										</tr>
									</tbody>
								</table>
							</div>
						</div>
						<div class="row-fluid">
						  <div class="col-sm-4 col-sm-offset-4">
							<div class="thumbnail">
							  <?php echo $this->Html->image('/users/securimage',array('ng-src'=>'users/securimage?nonce={{CaptchaHash}}','ng-model'=>'Captcha'));?>
							  <div class="caption">
								 <div class="form-group">
									
									<div>
										<label class="checkbox-inline">
											<input type="checkbox"    ng-model="AgreeTerms" ng-required="true" /> I agree to the terms and conditions set by Amigosource.
										</label>
									</div>
								</div>
								 <div class="input-group">
								 <span class="input-group-btn" ng-click="refershCaptcha()">
									<button class="btn btn-default" type="button"><i class="glyphicon glyphicon-refresh"></i></button>
								  </span>
								  <input type="text" class="form-control" placeholder="Enter code" ng-model="CaptchaCode"/>
								  <span class="input-group-btn">
									<button class="btn btn-default" type="button" ng-click="ProcessRegistration()" ng-disabled="RegistrationInProgress || !AgreeTerms" >Submit</button>
								  </span>
								</div>
							  </div>
							</div>
						  </div>
						</div>
					</div>
				</div>
			<?php echo $this->CustomForm->end();?>
			<form ng-submit="ProcessRegistration()" ng-hide="true">
				<input type="submit" class="btn btn-primary pull-right" value="Submit" />
			</form>
		</div>
	</div>
	<div class="container" id="navigation-buttons">
		<button  class="navigation-prev-button" ng-show="ActiveSectionIndex>0" ng-click="stepActiveSection(-1)">
			<div class="action-text">
			<span class="glyphicon glyphicon-backward"></span>
			<div>Prev</div>
			</div>
		</button>
		<button  class="navigation-next-button" ng-hide="ActiveSection==='confirmation'" ng-click="stepActiveSection(1)">
			<div class="action-text">
				<span class="glyphicon glyphicon-forward"></span>
				<div>Next</div>
			</div>
		</button>
		
	</div>
	<div class="modal fade" id="#ProcessModal" ng-class="{in:ShowModal}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" ng-click="ShowModal = false"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{ProcessingTitle}}</h4>
      </div>
      <div class="modal-body">
        <p>{{ProcessingMessage}}</p>
      </div>
    </div>
  </div>
</div>
	<div class="modal fade" id="#ErrorModal" ng-class="{in:ShowErrorModal}">
  <div class="modal-dialog">
    <div class="modal-content">
      <div class="modal-header">
        <button type="button" class="close" data-dismiss="modal" aria-label="Close" ng-click="ShowErrorModal = false"><span aria-hidden="true">&times;</span></button>
        <h4 class="modal-title">{{ErrorTitle}}</h4>
      </div>
      <div class="modal-body">
        <p>{{ErrorMessage}}</p>
		<ul ng-repeat="error in Errors">
			<li>{{error | titlecase}}</li>
		</ul>
      </div>
    </div>
  </div>
</div>
</section>
