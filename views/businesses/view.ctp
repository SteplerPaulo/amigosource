<style type="text/css">
	.dl-horizontal dd{padding:0.33rem;}
	.dl-horizontal dd:hover{background-color:#F8F8F8;}
	.action-buttons button.btn{opacity:0.2;  font-size: 2rem; padding: 0rem 0.66rem;}
	dd:hover button.btn-default,dd button.btn-success,dd button.btn-warning{opacity:1 !important;}
	.modal.fade.in{display:block;background:rgba(0,0,0,0.333);}
	div.action-buttons.loading{display:none;}
	div#action-button-help{padding-top:2rem;}
	dd.change,dd.change:hover {
		background-color: rgb(198, 225, 247);
	}
</style>

<?php echo $this->Html->script(array('/countries','/provinces','/barangays','/categories','/business_types','/currencies','directives/default','controllers/approval'),array('inline'=>false));?>
<div class="businesses view col-sm-10 col-sm-offset-1" ng-controller="BusinessApprovalController" ng-init='initializeController(<?php echo json_encode($business); ?>)'>
	<div class="row">
		<div class="col-sm-6">
			<ol class="breadcrumb">
				<li>
				<?php 
					echo $this->Html->link('Businesses',array('controller'=>'businesses','action'=>'index'));
				?>
				</li>
				<li class="active">
					<?php  __('Business Registration Approval');?>
				</li>
			</ol>
		</div>
	</div>
	<div class="row">
		<h2 class="col-sm-6"><?php  __('Business Registration Approval');?></h2>
		<div class="col-sm-6 text-right" id="action-button-help">
		<?php if(!$has_approve_token): ?>
			<button class="btn btn-default">&#10003;</button> Approve <button class="btn btn-default">&#10000;</button> For edit <button class="btn btn-default">&#10077;</button> Comment</div>
		<?php else: ?>
				<button class="btn btn-success">&#10003; Approved</button>
		<?php endif;?>
	</div>
	<div class="clearfix"></div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>User Account</h3>
		</div>
		<div class="panel-body">
			<dl class="dl-horizontal">
				<dt><?php __('Email'); ?></dt>
				<dd>
					<?php echo $business['User']['email']; ?>
					<?php if(!$has_approve_token) echo $this->element('approval_action_buttons',array('model'=>'User.email','fields'=>$business['RegistrationComment']));?>
				</dd>
				<dt><?php __('Type'); ?></dt>
				<dd>
					<?php echo $business['User']['user_type']; ?>
					<?php if(!$has_approve_token)  echo $this->element('approval_action_buttons',array('model'=>'User.type','fields'=>$business['RegistrationComment']));?>
				</dd>
			</dl>
		</div>
	</div>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Member Details</h3>
		</div>
		<div class="panel-body">
	<dl class="dl-horizontal"><?php $i = 0; $class = ' class="altrow"';?>
		<h4><dt><?php __('Business Name'); ?></dt>
			<dd>
			<?php echo $business['Business']['name']; ?>
			<?php if(!$has_approve_token)  echo $this->element('approval_action_buttons',array('model'=>'Business.name','fields'=>$business['RegistrationComment']));?>
		</dd>
		</h4>
		<dt><?php __('Business Type'); ?></dt>
		<dd>
			<?php echo $business['BusinessType']['name']; ?>
			<?php if(!$has_approve_token)  echo $this->element('approval_action_buttons',array('model'=>'Business.business_type_id','fields'=>$business['RegistrationComment']));?>
		</dd>
		<?php foreach($business['Business'] as $key=>$value):?>
		<dt>
			<?php 
				if($key=='name' || $key=='id' ||$key=='business_type_id' || $key == 'user_id' || $key == 'created' || $key == 'modified' || $key =='status' || $key =='access_code') continue; 
				?>
				<?php  echo Inflector::humanize($key); ?>
		</dt>
		<dd>
			<?php if($key== 'country'): ?>
					<span ng-repeat="country in Countries | filter:{id:__Business.country}:true ">{{country.name}}</span>
			<?php elseif($key== 'province'): ?>
					 <span ng-repeat="province in Provinces | filter : {id:__Business.province} ">{{province.name}}</span>
			<?php elseif($key== 'city'): ?>
					<span ng-repeat="province in Provinces | filter : {id:__Business.province} "><span ng-repeat="city in province.cities | filter : {id:__Business.city} :true ">{{city.name}}</span></span>
			<?php elseif($key== 'barangay'): ?>
					<span ng-repeat="barangay in Barangays | filter : {id:__Business.barangay}:true ">{{barangay.name}}</span>
			<?php elseif($key== 'logo'): ?>
					<a href="../../img/files/<?php echo $value;?>" target="_blank"><img src="../../img/files/thumb/thumb-<?php echo $value;?>" alt="Business logo" class="thumbnail col-sm-2" /></a>
			<?php else:
					echo $value;
				endif;
			?>
			<?php if(!$has_approve_token)  echo $this->element('approval_action_buttons',array('model'=>'Business.'.$key,'fields'=>$business['RegistrationComment']));?>
		</dd>
		<?php endforeach; ?>
	</dl>
	</div>
	</div>
	
	
	<?php if ($business['User']['user_type'] =="supplier"):?>
	<div class="panel panel-primary">
		<div class="panel-heading">
			<h3>Certifications</h3>
		</div>
		<div class="panel-body">
		<?php if (!empty($business['Certification'])):?>
			<dl class="dl-horizontal">
				
			<?php for($index=0,$certification =$business['Certification'][$index];$index<count($business['Certification']);$index++):?>
				<dt>&nbsp;</dt>
				<dd></dd>
				<?php foreach($certification as $key=>$value):?>
					<?php if($key=='description' || $key=='issuing_agency' ||$key=='date_issued'): ?>
					<dt>
						<?php 
						echo Inflector::humanize($key); 
						?>
					</dt>
					<dd>
						<?php echo $value;?>
						<?php if(!$has_approve_token)  echo $this->element('approval_action_buttons',array('model'=>'Certification['.$index.'].'.$key,'fields'=>$business['RegistrationComment']));?>
					</dd>
				<?php endif; ?>
				<?php endforeach; ?>
			<?php endfor; ?>
			</dl>
		<?php endif; ?>
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
				<dl class="dl-horizontal">
					<dt>Location</dt>
					<dd>
						<?php echo $factory['location'];?>
						<?php if(!$has_approve_token)  echo $this->element('approval_action_buttons',array('model'=>'Factory.location','fields'=>$business['RegistrationComment']));?>
					</dd>
					<dt>Contract Manufacturing</dt>
					<dd>
						<?php echo $factory['contract_manufacturing'];?>
						<?php if(!$has_approve_token)  echo $this->element('approval_action_buttons',array('model'=>'Factory.contract_manufacturing','fields'=>$business['RegistrationComment']));?>
					</dd>
					<dt>No of Product Line</dt>
					<dd>
						<?php echo $factory['product_line_count'];?>
						<?php if(!$has_approve_token)  echo $this->element('approval_action_buttons',array('model'=>'Factory.product_line_count','fields'=>$business['RegistrationComment']));?>
					</dd>
					<dt>No of R and D Staff</dt>
					<dd>
						<?php echo $factory['r_and_d_staff_count'];?>
						<?php if(!$has_approve_token)  echo $this->element('approval_action_buttons',array('model'=>'Factory.r_and_d_staff_count','fields'=>$business['RegistrationComment']));?>
					</dd>
					<dt>No of QC Staff</dt>
					<dd>
						<?php echo $factory['qc_staff_count'];?>
						<?php if(!$has_approve_token) echo $this->element('approval_action_buttons',array('model'=>'Factory.qc_staff_count','fields'=>$business['RegistrationComment']));?>
					</dd>
					<dt>No of Employees</dt>
					<dd>
						<?php echo $factory['employee_count'];?>
						<?php if(!$has_approve_token) echo $this->element('approval_action_buttons',array('model'=>'Factory.employee_count','fields'=>$business['RegistrationComment']));?>
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
		<dl class="dl-horizontal">
		<?php for($index=0,$product =$business['Product'][$index];$index<count($business['Product']);$index++):?>
			<dt>&nbsp;</dt>
			<dd>&nbsp;</dd>
			<?php foreach($product as $key=>$value):?>
				<dt>
					<?php 
					if( $key=='id' ||$key=='business_id' ||  $key == 'created' || $key == 'modified'  || is_array($value)) continue; 
						if( $key=='category_id') echo 'Category';
						else if( $key=='classification_id') echo 'Classification';
						else echo Inflector::humanize($key); 
					?>
				</dt>
				<dd>
					<?php if( $key=='category_id'):?>
							<?php echo $business['Product'][$index]['Category']['name']; ?>
					<?php elseif( $key=='classification_id'):?>
							<?php echo $business['Product'][$index]['Classification']['name']; ?>
					<?php else:?>
					<?php echo $value;?>
					<?php endif;?>
					<?php if(!$has_approve_token) echo $this->element('approval_action_buttons',array('model'=>'Product['.$index.'].'.$key,'fields'=>$business['RegistrationComment']));?>
				</dd>
			<?php endforeach; ?>
				<?php if (count($business['Product'][$index]['Picture'])):?>
					<dt>Pictures</dt>
					<dd>
					<?php foreach($business['Product'][$index]['Picture'] as $picture):?>
						<a href="../../img/files/<?php echo $picture['url']?>" target="_blank" ><img class="thumbnail col-sm-2" src="../../img/files/thumb/thumb-<?php echo $picture['url']?>" /></a>
					<?php endforeach; ?>
					<?php if(!$has_approve_token) echo $this->element('approval_action_buttons',array('model'=>'Product['.$index.'].product_image','fields'=>$business['RegistrationComment']));?>
					</dd>
				<?php endif; ?>
		<?php endfor; ?>
		</dl>
	<?php endif; ?>
		</div>
	</div>
	
	<?php endif; ?>
	<div class="approval-buttons pull-right">
		<button class="btn btn-primary" ng-disabled="!ValidForApproval || SubmitInProgress" ng-click="submitApproval('approve')">Approve</button>
	</div>
	<div class="approval-buttons pull-left">
		<button class="btn btn-default" ng-disabled="SubmitInProgress" ng-click="resetApproval()">Reset</button>
		<button class="btn btn-danger" ng-disabled="!ValidForReturn || SubmitInProgress"  ng-click="submitApproval('return')">Return</button>
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
				<h3>{{RedirectCountDown}} second(s)</h3>
				<p>or</p>
				<a href="../" class="btn btn-primary">Click here</a>
			</div>
		  </div>
		</div>
	  </div>
	</div>
</div>