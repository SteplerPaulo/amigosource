<?php echo $this->Form->create('TemporaryRegistration',array('action'=>'test_file','id'=>'TemporaryRegistrationAddForm','enctype'=>'multipart/form-data'));?>
<div class="row" id="product-details">			
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
								<th class="text-center">Add Image</th>
								<th class="text-center">Name</th>
								<th class="text-center">General Category</th>
								<th class="text-center">Classification</th>
								<th class="text-center">Actions</th>
							</tr>
						</thead>
						<tbody>
							<tr style="display:">
								<td class="text-center"><a class="glyphicon glyphicon-plus-sign" data-toggle="tooltip" title="Add Image"></a></td>
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

<?php echo $this->Form->submit();?>
<?php echo $this->Form->end();?>
<div class="row hide">
	<?php echo $this->Form->input('classification',array('options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm classification-category hide','div'=>false,'label'=>false))?>
</div>
<?php echo $this->Html->script('biz/registration/products',array('inline'=>false));?>
