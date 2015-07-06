<style type="text/css">
	.dl-horizontal dd{padding:0.33rem;}
	.action-buttons button.btn{opacity:0.2;  font-size: 2rem; padding: 0rem 0.66rem;}
	.modal.fade.in{display:block;background:rgba(0,0,0,0.333);}
	div.action-buttons.loading{display:none;}
	dd.change {
	  background-color: rgb(198, 225, 247);
	  padding: 1rem !important;
	}
</style>
<?php echo $this->Html->css(array('plugins/fileinput/fileinput.min'));	?>
<?php echo $this->Html->script(array('/countries','/provinces','/barangays','/categories','/business_types','/currencies','plugins/fileinput/fileinput.min','directives/default','controllers/return'),array('inline'=>false));?>
<form name="BusinessReturnForm">
<div class="businesses view col-sm-10 col-sm-offset-1" ng-controller="BusinessApprovalController" ng-init='initializeController(<?php echo json_encode($business); ?>)'>
	<h2><?php  __('Business Registration Return');?></h2>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>User Account</h3>
		</div>
		<div class="panel-body">
			<input type="hidden"  name="data[User][id]" value="<?php echo $business['User']['id'] ?>" />
			<dl class="dl-horizontal form-inline">
				<dt><?php __('Email'); ?></dt>
				<dd <?php 
					$value = $business['User']['email'];
					$field = 'User.email';
					if(isset($comments[$field])) echo 'class="change"';?>>
				<?php 
					
					if(!isset($comments[$field])): ?> <?php echo $value ?>
					<?php else: ?>
						<input type="text"  name="data[User][email]" value="<?php echo $value ?>" ng-model="<?php echo $field ?>" class="form-control"/>
						<div class="pull-right"><?php echo $comments[$field];?></div>
					<?php endif; ?>
				</dd>
				<dt><?php __('Type'); ?></dt>
				<dd <?php 
					$value = $business['User']['user_type'];
					$field = 'User.user_type';
					if(isset($comments[$field])) echo 'class="change"';?>>
				<?php 
					
					if(!isset($comments[$field])): ?> <?php echo $value ?>
					<?php else: ?>
						<input type="text"   name="data[User][user_type]"  value="<?php echo $value ?>" ng-model="<?php echo $field ?>" class="form-control"/>
						<div class="pull-right"><?php echo $comments[$field];?></div>
					<?php endif; ?>
				</dd>
			</dl>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Member Details</h3>
		</div>
		<div class="panel-body">
			<dl class="dl-horizontal form-inline">
			<input type="hidden"  name="data[Business][id]"  value="<?php echo $business['Business']['id'] ?>" />
				<h4><dt><?php __('Business Name'); ?></dt>
					<dd <?php 
						$value = $business['Business']['name'];
						$field = 'Business.name';
						if(isset($comments[$field])) echo 'class="change"';?>>
					<?php 
						
						if(!isset($comments[$field])): ?> <?php echo $value ?>
						<?php else: ?>
							<input type="text"  name="data[Business][name]"  value="<?php echo $value ?>" ng-model="<?php echo $field ?>" class="form-control"/>
							<div class="pull-right"><?php echo $comments[$field];?></div>
						<?php endif; ?>
					</dd>
				</h4>
				<dt><?php __('Business Type'); ?></dt>
				<dd <?php
						$value = $business['BusinessType']['name'];
						$field = 'Business.business_type_id';
						if(isset($comments[$field])) echo 'class="change"';?>>
					<?php 
						if(!isset($comments[$field])): ?> 
							<?php echo $value; ?>
						<?php else: ?>
							<select name="data[Business][business_type_id]" required id="BusinessType" class="form-control"  ng-model="Business.business_type_id">
								<option value="">Select Business Type</option>
								<option ng-selected="bussiness_type.id===Business.business_type_id"  ng-repeat="bussiness_type in BusinessTypes" ng-value="bussiness_type.id">{{bussiness_type.name}}</option>
							</select>
							<div class="pull-right"><?php echo $comments[$field];?></div>
						<?php endif; ?>
					</dd>
				<?php 
					foreach($business['Business'] as $key=>$value):
						$field = 'Business.'.$key;
				?>
				<?php if($key=='name' || $key=='id' ||$key=='business_type_id' || $key == 'user_id' || $key == 'created' || $key == 'modified' || $key =='status' || $key =='access_code') continue;  ?>
					<?php if($key=='barangay' ):?>
					<dt ng-show="Business.province=='MNL'">
						Barangay
					</dt>
					<?php else:?>
					<dt>
						<?php echo Inflector::humanize($key); ?>
					</dt>
					<?php endif; ?>
					<dd <?php if(isset($comments[$field])) echo 'class="change"';?>>
						<?php if(!isset($comments[$field])): ?>
							<?php if($key== 'country'): ?>
							<span ng-repeat="country in Countries | filter:{id:__Business.country}:true ">{{country.name}}</span>
							<?php elseif($key== 'province'): ?>
							 <span ng-repeat="province in Provinces | filter : {id:__Business.province} ">{{province.name}}</span>
							<?php elseif($key== 'city'): ?>
							<span ng-repeat="province in Provinces | filter : {id:__Business.province} "><span ng-repeat="city in province.cities | filter : {id:__Business.city} :true ">{{city.name}}</span></span>
							<?php else:?>
							<?php echo $value; ?>
							<?php endif; ?>
						<?php else: ?>
							<?php if($key=='country'): ?>
								<select name="data[Business][country]" required id="BusinessCountry" class="form-control"  ng-model="Business.country" ng-change="Business.province=''">
									<option value="">Select Country</option>
									<option ng-selected="country.id===Business.country"  ng-repeat="country in Countries" ng-value="country.id">{{country.name}}</option>
								</select>
							<?php elseif($key=='province'):?>
								<select name="data[Business][province]" required  id="BusinessProvince" class="form-control"  ng-model="Business.province" ng-change="Business.city=''" >
									<option value="">Select Province</option>
									<option ng-selected="province.id===Business.province" ng-repeat="province in Provinces | filter:filterCountry" ng-value="province.id">{{province.name}}</option>
								</select>
							<?php elseif($key=='city'):?>
								<select  required id="BusinessCity" class="form-control"   ng-model="Business.city" ng-hide="Business.province">
									<option value="">Select City/Municipality</option>
								</select>
								<select name="data[Business][city]" required id="BusinessCity" class="form-control"  ng-model="Business.city"  ng-repeat="province in Provinces | filter:filterProvince ">
									<option value="">Select City/Municipality</option>
									<option ng-selected="city.id===Business.city" ng-repeat="city in province.cities"  ng-value="city.id">{{city.name}}</option>
								</select>
							<?php elseif($key=='barangay'):?>
								<span ng-show="Business.province=='MNL'">
									<select required id="BusinessCity" class="form-control"   ng-model="Business.barangay" ng-hide="Business.city">
										<option value="">Select Town/Barangay</option>
									</select>
									<select name="data[Business][barangay]" required id="BusinessCity" class="form-control"  ng-model="Business.barangay" ng-show="Business.city"  >
										<option value="">Select Town/Barangay</option>
										<option ng-selected="barangay.id===Business.barangay" ng-repeat="barangay in Barangays | filter:{city_id:Business.city}:true"  ng-value="barangay.id">{{barangay.name}}</option>
									</select>
								</span>
							<?php elseif($key=='landline' || $key=='mobile' || $key=='fax' ):?>
								<?php 
									$lens = array(
											'landline'=>array('minlen'=>8,'maxlen'=>9),
											'mobile'=>array('minlen'=>10,'maxlen'=>10),
											'fax'=>array('minlen'=>8,'maxlen'=>9),
											);
									$minlen = $lens[$key]['minlen'];
									$maxlen = $lens[$key]['maxlen'];
								?>
								<div class="input-group">
									<span class="input-group-addon">+{{CountryCode}}</span>
									<input type="text" numeric-only  ng-model="<?php echo $field ?>"  name="data[Business][<?php echo $key;?>]" maxlength="<?php echo $maxlen;?>" ng-minlength="<?php echo $minlen;?>" ng-maxlength="<?php echo $maxlen;?>" class="form-control" placeholder="Area+<?php echo Inflector::humanize($key); ?>" />
								</div>
							<?php elseif($key=='website' ):?>

								<input type="url"  ng-model="<?php echo $field ?>"  name="data[Business][website]" class="form-control" placeholder="http://www.example.com" />
							<?php elseif($key=='logo' ):?>
								<div class="gallery row-fluid" ng-show="Business.logo">
									<div class="thumbnail col-sm-6" >
										<button class="btn btn-sm btn-danger logo-delete" type="button" ng-click="removeLogo()" >&times;</button>
										<img ng-src="../../img/files/{{Business.logo}}"  />
									</div>
									<div class="clearfix"></div>
								</div>
								<input type="hidden" name="data[Business][logo]" ng-value="Business.logo"/>
								<div class="row-fluid">
									<div class="col-sm-10">
										<?php echo $this->Form->input('Business.logo_uploader',array('type'=>'file','name'=>'pictures[]','label'=>false)); ?>
									</div>
								</div>
							<?php else: ?>
								<input type="text" name="data[Business][<?php echo $key;?>]" value="<?php echo $value ?>" ng-model="<?php echo $field ?>" class="form-control"/>
							<?php endif;?>
							<div class="pull-right"><?php echo $comments[$field];?></div>
						<?php endif; ?>
					</dd>
			
				<?php endforeach; ?>
			</dl>
		</div>
	</div>
	
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Certifications</h3>
		</div>
		<div class="panel-body">
		<div class="panel-body">
			<?php if (!empty($business['Certification'])):?>
				<dl class="dl-horizontal form-inline">
					
				<?php for($index=0,$certification =$business['Certification'][$index];$index<count($business['Certification']);$index++):?>
					<dt>&nbsp;</dt>
					<dd>
					<?php 
						$field = 'Certification['.$index.'].id';
						$value = $certification['id'];
					?>
					<input type="hidden" name="data[Certification][<?php echo $index?>][id]" value="<?php echo $value ?>"/>
					<input type="hidden" name="data[Certification][<?php echo $index?>][business_id]" value="<?php echo $business['Business']['id']; ?>"/>
					</dd>
					<?php foreach($certification as $key=>$value):?>
						<?php if($key=='description' || $key=='issuing_agency' ||$key=='date_issued'): ?>
						<dt>
							<?php 
							echo Inflector::humanize($key); 
							?>
						</dt>
						<dd>
							<?php $field = 'Certification['.$index.'].'.$key; ?>
							<?php if(!isset($comments[$field])): ?> <?php echo $value ?>
							<?php else: ?>
								<input type="text"  name="data[Certification][<?php echo $index?>][<?php echo $key?>]" required  value="<?php echo $value ?>"  ng-model="<?php echo $field ?>"   class="form-control"/>
								<div class="pull-right"><?php echo $comments[$field];?></div>
							<?php endif; ?>
						</dd>
					<?php endif; ?>
					<?php endforeach; ?>
				<?php endfor; ?>
				</dl>
			<?php endif; ?>
			
		</div>
	</div>
	</div>
	
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Factory</h3>
		</div>
		<div class="panel-body">
			<?php if (!empty($business['Factory'])):?>
				<?php if(count($business['Factory'])):
						$factory = $business['Factory'][0];
					?>
					<dl class="dl-horizontal form-inline">
						<dt>Location</dt>
						<?php $field = 'Factory[0].id'; ?>
						<?php $value = $factory['id']; ?>
						<dd <?php if(isset($comments[$field])) echo 'class="change"';?>>
							
							<input type="hidden"   name="data[Factory][id]"  value="<?php echo $value ?>" />
							<input type="hidden"   name="data[Factory][business_id]"  value="<?php echo $business['Business']['id'] ?>"   />
							<?php $value= $factory['location'];?>
							<?php $field = 'Factory.location'; ?>
							<?php if(!isset($comments[$field])): ?> <?php echo $value ?>
							<?php else: ?>
								<input type="text" required  value="<?php echo $value ?>" ng-model="<?php echo $field ?>"   class="form-control"/>
								<div class="pull-right"><?php echo $comments[$field];?></div>
							<?php endif; ?>
						</dd>
						<dt>Contract Manufacturing</dt>
							<?php $value= $factory['contract_manufacturing'];?>
							<?php $field = 'Factory.contract_manufacturing'; ?>
						<dd <?php if(isset($comments[$field])) echo 'class="change"';?>>
							<?php if(!isset($comments[$field])): ?> <?php echo $value ?>
							<?php else: ?>
								<input type="text" name="data[Factory][contract_manufacturing]"  required  value="<?php echo $value ?>" ng-model="<?php echo $field ?>"   class="form-control"/>
								<div class="pull-right"><?php echo $comments[$field];?></div>
							<?php endif; ?>
						</dd>
						<dt>No of Product Line</dt>
							<?php $value= $factory['product_line_count'];?>
							<?php $field = 'Factory.product_line_count'; ?>
						<dd <?php if(isset($comments[$field])) echo 'class="change"';?>>
							<?php if(!isset($comments[$field])): ?> <?php echo $value ?>
							<?php else: ?>
								<?php echo $this->CustomForm->input($field,array('class'=>'form-control','empty'=>'Select one','options'=>$noOfRange,'ng-model'=>$field,'div'=>false, 'label'=>false)); ?>
								<div class="pull-right"><?php echo $comments[$field];?></div>
							<?php endif; ?>
						</dd>
						<dt>No of R and D Staff</dt>
							<?php $value= $factory['r_and_d_staff_count'];?>
							<?php $field = 'Factory.r_and_d_staff_count'; ?>
						<dd <?php if(isset($comments[$field])) echo 'class="change"';?>>
							<?php if(!isset($comments[$field])): ?> <?php echo $value ?>
							<?php else: ?>
								<?php echo $this->CustomForm->input($field,array('class'=>'form-control','empty'=>'Select one','options'=>$noOfRange,'ng-model'=>$field,'div'=>false, 'label'=>false)); ?>
								<div class="pull-right"><?php echo $comments[$field];?></div>
							<?php endif; ?>
						</dd>
						<dt>No of QC Staff</dt>
							<?php $value= $factory['qc_staff_count'];?>
							<?php $field = 'Factory.qc_staff_count'; ?>
						<dd <?php if(isset($comments[$field])) echo 'class="change"';?>>
							<?php if(!isset($comments[$field])): ?> <?php echo $value ?>
							<?php else: ?>
								<?php echo $this->CustomForm->input($field,array('class'=>'form-control','empty'=>'Select one','options'=>$noOfRange,'ng-model'=>$field,'div'=>false, 'label'=>false)); ?>
								<div class="pull-right"><?php echo $comments[$field];?></div>
							<?php endif; ?>
						</dd>
						<dt>No of Employees</dt>
							<?php $value= $factory['employee_count'];?>
							<?php $field = 'Factory.employee_count'; ?>
						<dd <?php if(isset($comments[$field])) echo 'class="change"';?>>
							<?php if(!isset($comments[$field])): ?> <?php echo $value ?>
							<?php else: ?>
								<?php echo $this->CustomForm->input($field,array('class'=>'form-control','empty'=>'Select one','options'=>$noOfEmployees,'ng-model'=>$field,'div'=>false, 'label'=>false)); ?>
								<div class="pull-right"><?php echo $comments[$field];?></div>
							<?php endif; ?>
						</dd>
					</dl>
				<?php endif; ?>
				<?php else: ?>
				<dl class="dl-horizontal">
					
				<dd>No factory details</dd>
				</dl>
			<?php endif; ?>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Products</h3>
		</div>
		<div class="panel-body">
			<?php if (!empty($business['Product'])):?>
				<dl class="dl-horizontal form-inline">
				<?php for($index=0,$product =$business['Product'][$index];$index<count($business['Product']);$index++):?>
					<dt>&nbsp;</dt>
					<dd>&nbsp;
					<input type="hidden" name="data[Product][<?php echo $index?>][id]" value="<?php echo $product['id']?>"/>
					<input type="hidden" name="data[Product][<?php echo $index?>][business_id]" value="<?php echo $business['Business']['id']?>"/>
					</dd>
					<?php foreach($product as $key=>$value):?>
						<dt>
							<?php 
							if( $key=='id' ||$key=='business_id' ||  $key == 'created' || $key == 'modified'  || is_array($value)) continue; 
								if( $key=='category_id') echo 'Category';
								else if( $key=='classification_id') echo 'Classification';
								else echo Inflector::humanize($key); 
							?>
						</dt>
						<?php $field = 'Product['.$index.'].'.$key; ?>
						<dd <?php if(isset($comments[$field])) echo 'class="change"';?>>
							<?php if(!isset($comments[$field])): ?> <?php echo $value ?>
							<?php else: ?>
							<input type="text" name="data[Product][<?php echo $index?>][<?php echo $key?>]" required  value="<?php echo $value ?>" ng-model="<?php echo $field ?>"   class="form-control"/>
							<div class="pull-right"><?php echo $comments[$field];?></div>
							<?php endif; ?>
				
						</dd>
					<?php endforeach; ?>
						<?php if (count($business['Product'][$index]['Picture'])):?>
							<dt>Pictures</dt>
							<dd>
							<?php foreach($business['Product'][$index]['Picture'] as $picture):?>
								<div class=""><img class="thumbnail col-sm-2" src="../../img/files/<?php echo $picture['url']?>" /></div>
							<?php endforeach; ?>
							
							</dd>
						<?php endif; ?>
				<?php endfor; ?>
				</dl>
			<?php endif; ?>
		</div>
	</div>
	<div class="approval-buttons pull-right">
		<button class="btn btn-primary" ng-disabled="!ValidForReturn || SubmitInProgress" ng-click="submitForm()">Submit</button>
	</div>
	<div class="approval-buttons pull-left">
		<button class="btn btn-default" ng-disabled="SubmitInProgress" ng-click="resetForm()">Reset</button>
	</div>
	<div class="modal fade" ng-class="{in:ShowModal}">
	  <div class="modal-dialog">
		<div class="modal-content">
		  <div class="modal-header">
			<button type="button" class="close" data-dismiss="modal" aria-label="Close" ng-click="ShowModal = false"><span aria-hidden="true">&times;</span></button>
			<h4 class="modal-title">{{ProcessingTitle}}</h4>
		  </div>
		  <div class="modal-body text-center">
			<p>{{ProcessingMessage}}</p>
			<div class="count-down" ng-show="RedirectCountDown">
				<a href="../" class="btn btn-primary">Click here</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</div>
</form>