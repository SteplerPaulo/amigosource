<?php echo $this->element('breadcrumb');?>
<div class="panel panel-primary">
	<div class="panel-heading">Products</div>
	<div class="panel-body">
		<div class="row">
			<div class="col-lg-6">
				<center><h4><b>Add Product</b></h4></center>
				<div class="row">
					<div class="col-lg-6">
						<?php echo $this->Form->input('category_id',array('options'=>$generalCategoristLists,'empty'=>'Select','class'=>'form-control input-sm general-category','div'=>false))?>			
					</div>
					<div class="col-lg-6">
						<?php echo $this->Form->input('classification',array('options'=>'','empty'=>'Select','class'=>'form-control input-sm general-category-classification','div'=>false))?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<?php echo $this->Form->input('name',array('type'=>'textbox','class'=>'form-control input-sm general-category','div'=>false))?>			
					</div>
					<div class="col-lg-6">
						<?php echo $this->Form->input('details',array('type'=>'textbox','class'=>'form-control input-sm general-category-classification','div'=>false))?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<?php echo $this->Form->input('standard_packaging_&_ordering_leadtime',array('type'=>'textbox','class'=>'form-control input-sm general-category','div'=>false))?>			
					</div>
					<div class="col-lg-6">
						<?php echo $this->Form->input('specification',array('type'=>'textbox','class'=>'form-control input-sm general-category-classification','div'=>false))?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<?php echo $this->Form->input('technical_description',array('type'=>'textbox','class'=>'form-control input-sm general-category','div'=>false))?>			
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<?php echo $this->Form->input('cost_currency',array('class'=>'form-control input-sm general-category-classification','div'=>false))?>
					</div>
					<div class="col-lg-6">
						<?php echo $this->Form->input('cost',array('class'=>'form-control input-sm general-category','div'=>false))?>			
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<?php echo $this->Form->input('unit_of_measure_code',array('class'=>'form-control input-sm general-category-classification','div'=>false))?>
					</div>
					<div class="col-lg-3">
						<?php echo $this->Form->input('qty_on_hand',array('class'=>'form-control input-sm general-category','div'=>false))?>			
					</div>
					<div class="col-lg-3">
						<?php echo $this->Form->input('minimum_order_quantity',array('label'=>'Min. Order Qty','class'=>'form-control input-sm general-category-classification','div'=>false))?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<?php echo $this->Form->input('payment_terms',array('class'=>'form-control input-sm general-category','div'=>false))?>			
					</div>
					<div class="col-lg-6">
						<?php echo $this->Form->input('shipping_terms',array('class'=>'form-control input-sm general-category-classification','div'=>false))?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<?php echo $this->Form->input('product_contact_name',array('class'=>'form-control input-sm general-category','div'=>false))?>			
					</div>
					<div class="col-lg-6">
						<?php echo $this->Form->input('product_contact_number',array('class'=>'form-control input-sm general-category-classification','div'=>false))?>
					</div>
				</div>
				<div class="row">
					<div class="col-lg-6">
						<?php echo $this->Form->input('product_contact_email',array('class'=>'form-control input-sm general-category','div'=>false))?>			
					</div>
					<div class="col-lg-6">
						<label>Product Image</label>
						<div class="input-group">
							<input type="text" class="form-control input-sm">
							<span class="input-group-btn">
								<button class="btn btn-default btn-sm" type="file">Browse</button>
							</span>
						</div>
					</div>
				</div>
				<hr/>
				<div class="row text-right">
					<div class="col-lg-5 col-lg-offset-7">
						<button type="button" class="btn" id="ResetRelativeButton">Reset</button>
						<button type="button" class="btn btn-primary" id="AddRelativeButton">Add</button>
					</div>
				</div>
			</div>
			<div class="col-lg-6">
				
				<center><h4><b>Products Added</b></h4></center>
				<table class="table table-bordered table-hovered table-condensed">
					<thead>
						<tr>
							<th class="text-center">Name</th>
							<th class="text-center">General Category</th>
							<th class="text-center">Classification</th>
							<th class="text-center">Actions</th>
						</tr>
					</thead>
					<tbody>
						<tr>
							<td><?php echo $this->Form->input('name',array('readonly'=>'readonly','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
							<td><?php echo $this->Form->input('category_id',array('readonly'=>'readonly','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
							<td><?php echo $this->Form->input('classification',array('readonly'=>'readonly','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
							<td class="text-center">
								<a class="glyphicon glyphicon-eye-open" data-toggle="tooltip" title="View Row Details"></a>  &nbsp;
								<a class="glyphicon glyphicon-edit" data-toggle="tooltip" title="Edit Row"></a> &nbsp;
								<a class="glyphicon glyphicon-trash" data-toggle="tooltip" title="Delete Row"></a>
							</td>
						</tr>
					</tbody>
				</table>
			</div>
		</div>

	
	</div>
</div>


<div class="row">
	<div class="col-lg-2 col-lg-offset-4">
		<h3 class="pull-right"><a href="/amigosource/certification-profile" id="Next" class="glyphicon glyphicon-circle-arrow-left"></a> Back</h3>
	</div>
	<div class="col-lg-2">
		<h3 class="pull-left">Next <a href="javascript:void()" id="Next" class="glyphicon glyphicon-circle-arrow-right" onclick="alert('Your web page that are trying to access is under construction. Please contact your system administrator for updates')"></a></h3>
	</div>
	
	<div class="col-lg-3 col-lg-offset-1">
		<h3 class="pull-right">Back To Top <a href="#" id="Next" class="glyphicon glyphicon-circle-arrow-up" ></a></h3>
	</div>
</div>

<?php echo $this->Form->input('classification',array('options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm classification-category hide','div'=>false,'label'=>false))?>
