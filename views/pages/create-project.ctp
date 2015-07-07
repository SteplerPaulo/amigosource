<nav class="navbar navbar-default navbar-static-top" id="search-types-nav">
	<div class="container">
		<div id="search-types" class="collapse navbar-collapse">
			<ul class="nav navbar-nav search-tabs ">
				<li role="presentation" class="active"><a href="#">Create Project</a></li>
				<li role="presentation">
					<?php echo $this->Html->link('View Projects',array('controller'=>'/','action'=>'view-projects'));?>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row-fluid">
		<div class="col-lg-6 col-lg-offset-3">
			<div class="row">
				<div class="col-lg-6">
					<?php echo $this->Form->input('general_category_id',array('options'=>$generalCategoristLists,'empty'=>'Select','class'=>'form-control input-sm general-category','div'=>false))?>			
				</div>
				<div class="col-lg-6">
					<?php echo $this->Form->input('classification_id',array('options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm general-category-classification','div'=>false))?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<?php echo $this->Form->input('title',array('rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','div'=>false))?>			
				</div>
				<div class="col-lg-6">
					<?php echo $this->Form->input('description',array('rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','div'=>false))?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<?php echo $this->Form->input('packing',array('rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','div'=>false))?>			
				</div>
				<div class="col-lg-6">
					<?php echo $this->Form->input('specifications',array('rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','div'=>false))?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<?php echo $this->Form->input('technical_description',array('rows'=>'3','type'=>'textbox','class'=>'form-control input-sm','div'=>false))?>			
				</div>
				<div class="col-lg-6">
					<?php echo $this->Form->input('quantity_required',array('class'=>'form-control input-sm','div'=>false))?>
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<?php echo $this->Form->input('contact_name',array('class'=>'form-control input-sm','div'=>false))?>			
				</div>
				<div class="col-lg-6">
					<?php echo $this->Form->input('contact_email',array('class'=>'form-control input-sm','div'=>false))?>			
				</div>
			</div>
			<div class="row">
				<div class="col-lg-6">
					<?php echo $this->Form->input('suplier_qualifications',array('empty'=>'Select','options'=>array('0'=>'All','1'=>'Regular','2'=>'Gold'),'class'=>'form-control input-sm toUpperCase','div'=>false))?>			
				</div>
				<div class="col-lg-6">
					<?php echo $this->Form->input('contract_value',array('class'=>'form-control input-sm','div'=>false))?>			
				</div>
			</div>
			
			<div class="row">
				<div class="col-lg-6">
					<?php echo $this->Form->input('incoterms',array('class'=>'form-control input-sm','div'=>false))?>			
				</div>
				<div class="col-lg-6">
					<?php echo $this->Form->input('payment_tearms',array('class'=>'form-control input-sm','div'=>false))?>			
				</div>
			</div>
			<div class="row">
				<br/>
				<div class="col-lg-6 col-lg-offset-6 text-right">
					<button type="button" class="btn">Post</button>
					<button type="button" class="btn btn-primary">Request for List</button>
				</div>
			</div>

		</div>
	</div>
</div>
<div class="row hide">
	<?php echo $this->Form->input('city_municipality_lists',array('id'=>'CityAndMunicipalityList','options'=>$cityAndMunicipalities,'empty'=>'Select','class'=>'form-control input-sm','label'=>'City/Municipality'));?>
	<?php echo $this->Form->input('classification',array('options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm classification-category hide','div'=>false,'label'=>false))?>
</div>
<br/><br/>