<?php echo $this->element('breadcrumb');?>
<div class="panel panel-primary">
	<div class="panel-heading">Credential</div>
	<div class="panel-body">
		<table class="table table-bordered table-hovered table-condensed">
			<thead>
				<tr>
					<th class="text-center">Description</th>
					<th class="text-center">Issuing Agency</th>
					<th class="text-center">Date Issued</th>
					<th class="text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				<tr>
					<td><?php echo $this->Form->input('description',array('class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
					<td><?php echo $this->Form->input('issuing_agency',array('class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
					<td><?php echo $this->Form->input('date_issued',array('class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
					<td class="text-center">
						<a class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" title="Add Row"></a>  &nbsp;
						<a class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit Row"></a> &nbsp;
						<a class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete Row"></a>
					</td>
				</tr>
			</tbody>
		</table>
	
	</div>
</div>	
<div class="panel panel-primary">
	<div class="panel-heading">Profile</div>
	<div class="panel-body">
		<h4>Trade & Market</h4>
		<div class="row">
			<div class="col-lg-5">
				<?php echo $this->Form->input('main_market',array('placeholder'=>'Countries, areas','class'=>'form-control input-sm'));?>
							
			</div>
			<div class="col-lg-5">
				<?php echo $this->Form->input('main_costumer',array('placeholder'=>'Countries, areas, companies','class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('total_annual_sales_volume',array('class'=>'form-control input-sm'));?>
			</div>
		</div>
		<h4>Factory Information</h4>
		<div class="row">
			<div class="col-lg-3">
				<?php echo $this->Form->input('factory_location',array('class'=>'form-control input-sm'));?>	
			</div>
		</div><br/>
		<div class="row">	
			<div class="col-lg-2">
				<?php echo $this->Form->input('no_of_production_line',array('class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('no_of_r_and_d_staff',array('label'=>'No Of R&D Staff','class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-2">
				<?php echo $this->Form->input('no_of_qc_staff',array('label'=>'No Of QC Staff','class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-3">
				<?php echo $this->Form->input('management_certification',array('class'=>'form-control input-sm'));?>
			</div>
			<div class="col-lg-3">
				<?php echo $this->Form->input('contract_manufacturing',array('class'=>'form-control input-sm'));?>
			</div>
		</div>
		
	</div>
</div>


<div class="row">
	<div class="col-lg-2 col-lg-offset-4">
		<h3 class="pull-right"><a href="/amigosource/supplier-member-details" id="Next" class="glyphicon glyphicon-circle-arrow-left"></a> Back</h3>
	</div>
	<div class="col-lg-2">
		<h3 class="pull-left">Next <a href="/amigosource/product-details" id="Next" class="glyphicon glyphicon-circle-arrow-right"></a></h3>
	</div>
	
	<div class="col-lg-3 col-lg-offset-1">
		<h3 class="pull-right">Back To Top <a href="#" id="Next" class="glyphicon glyphicon-circle-arrow-up" ></a></h3>
	</div>
</div>
