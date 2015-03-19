<style>
	.currency_symbol{
		padding-top: 10px !important;
		text-align:center;
		border-right: none !important;
	}
</style>
<?php echo $this->element('breadcrumb');?>
<div class="panel panel-primary">
	<div class="panel-heading">Certifications</div>
	<div class="panel-body">
		<table class="table table-bordered table-hovered table-condensed">
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
					<td><?php echo $this->Form->input('description',array('class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
					<td><?php echo $this->Form->input('issuing_agency',array('class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
					<td><?php echo $this->Form->input('date_issued',array('class'=>'form-control input-sm datepicker','data-date-format'=>'yyyy-mm-dd','div'=>false,'label'=>false))?></td>
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
					<td><?php echo $this->Form->input('main_market',array('type'=>'textbox','placeholder'=>'Countries, areas','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
					<td><?php echo $this->Form->input('main_costumer',array('type'=>'textbox','placeholder'=>'Countries, areas, companies','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
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
		
		<h4>Factory Information</h4>
		<div class="row">
			<div class="col-lg-4">
				<?php echo $this->Form->input('factory_location',array('type'=>'textbox','class'=>'form-control input-sm'));?>	
			</div>
			<div class="col-lg-4">
				<?php echo $this->Form->input('contract_manufacturing',array('type'=>'textbox','class'=>'form-control input-sm'));?>
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
			<div class="col-lg-2">
				<?php echo $this->Form->input('no_of_employees',array('options'=>$noOfEmployees,'empty'=>'Select','class'=>'form-control input-sm'));?>
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

