	<div class="row TmpRegElement" id="certification-and-profile">
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
							<a class="glyphicon glyphicon-plus-sign add-certificate" data-toggle="tooltip" title="Add Row"></a>
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
					<?php echo $this->Form->input('production_line_count',array('label'=>'No. of Production Line','options'=>$noOf,'empty'=>'Select','class'=>'form-control input-sm'));?>
				</div>
				<div class="col-lg-2">
					<?php echo $this->Form->input('r_and_d_staff_count',array('label'=>'No Of R&D Staff','options'=>$noOf,'empty'=>'Select','class'=>'form-control input-sm'));?>
				</div>
				<div class="col-lg-2">
					<?php echo $this->Form->input('qc_staff_count',array('label'=>'No Of QC Staff','options'=>$noOf,'empty'=>'Select','class'=>'form-control input-sm'));?>
				</div>
				<div class="col-lg-2">
					<?php echo $this->Form->input('employee_count',array('label'=>'No. of Employees','options'=>$noOfEmployees,'empty'=>'Select','class'=>'form-control input-sm'));?>
				</div>
			</div>
		</div>
	</div>
</div>
