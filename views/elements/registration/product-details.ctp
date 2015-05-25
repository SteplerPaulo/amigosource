<div class="row TmpRegElement" id="product-details">			
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
							<?php echo $this->Form->input('Pr.monetary_currency_id',array('label'=>'Cost Currency','field'=>'monetary_currency','options'=>$monetaryCurrencies,'empty'=>'Select','class'=>'form-control input-sm','div'=>false))?>
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
								<th class="text-center w10">Add Product Image</th>
								<th class="text-center w80">Name</th>
								<th class="text-center w10">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr style="display:none">
								<td class="text-center" style="padding-top: 12px;"><a data-toggle="modal" class="glyphicon glyphicon-plus-sign add-product-image" data-toggle="tooltip" title="Add Product Image"></a></td>
								<td><?php echo $this->Form->input('TemporaryRegistrationProduct.name',array('type'=>'text','field'=>'name','class'=>'form-control input-sm','div'=>false,'label'=>false))?></td>
							
								<td class="hide">
									<?php echo $this->Form->input('TemporaryRegistrationProduct.general_category_id',array('field'=>'general_category_id','options'=>$generalCategoristLists,'empty'=>'Select','class'=>'form-control input-sm','div'=>false,'label'=>false))?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.classification_id',array('field'=>'classification_id','options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm','div'=>false,'label'=>false))?>
								
									<?php echo $this->Form->input('TemporaryRegistrationProduct.details',array('field'=>'details','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.standard_package',array('field'=>'standard_package','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.specification',array('field'=>'specification','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.technical_description',array('field'=>'technical_description','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.monetary_currency_id',array('field'=>'monetary_currency','options'=>$monetaryCurrencies,'label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.cost',array('field'=>'cost','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.unit_of_measure',array('field'=>'unit_of_measure','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.stock_on_hand',array('field'=>'stock_on_hand','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.minimun_order',array('field'=>'minimun_order','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.payment_terms',array('field'=>'payment_terms','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.shipping_terms',array('field'=>'shipping_terms','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.contact_name',array('field'=>'product_contact_name','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.contact_no',array('field'=>'contact_no','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.contact_email',array('field'=>'contact_email','label'=>false,'class'=>'form-control'));?>
									<?php echo $this->Form->input('TemporaryRegistrationProduct.image',array('field'=>'image','label'=>false,'class'=>'form-control'));?>
								</td>
								
								<td class="text-center" style="padding-top: 12px;">
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
				
	<div class="modal fade" id="AddProductImageModal" tabindex="-1" role="dialog" aria-labelledby="mySmallModalLabel" aria-hidden="true">
		<div class="modal-dialog modal-lg">
			<div class="modal-content">
				<div class="modal-header">
					<button type="button" class="close" data-dismiss="modal" aria-label="Close"><span aria-hidden="true">&times;</span></button>
					<h4 class="modal-title">Add Image</h4>
				</div>
				<div class="modal-body">
					<?php 
						echo $this->element("file_upload");
					?>
				
				</div>
			</div>
		</div>
	</div>

</div>			