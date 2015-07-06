<style>
.border-none{
	border: none !important;
}
.pagination{
	margin: 2px 0; 
}
.padding-bottom-10px{
	padding-bottom: 10px !important;
}
</style>
<nav class="navbar navbar-default navbar-static-top" id="search-types-nav">
	<div class="container">
		<div id="search-types" class="collapse navbar-collapse">
			<ul class="nav navbar-nav search-tabs ">
				<li role="presentation" class="active"><a href="#">View Projects</a></li>
				<li role="presentation">
					<?php echo $this->Html->link('Create Project',array('controller'=>'pages','action'=>'create-project'));?>
				</li>
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row-fluid">
		<table class="table table-bordered table-condensed border-none">
			<thead>
				<tr >
					<th class="border-none text-right padding-bottom-10px">Filter:</th>
					<th class="border-none"><?php echo $this->Form->input('description',array('label'=>false,'class'=>'form-control input-sm'));?></th>
					<th class="border-none"><?php echo $this->Form->input('category_id',array('options'=>$generalCategoristLists,'empty'=>'Select','label'=>false,'class'=>'form-control input-sm general-category'));?></th>
					<th class="border-none"><?php echo $this->Form->input('classification_id',array('options'=>$classificationLists,'empty'=>'Select','label'=>false,'class'=>'form-control input-sm general-category-classification'));?></th>
					<th class="border-none"><?php echo $this->Form->input('proponent',array('label'=>false,'class'=>'form-control input-sm'));?></th>
					<th class="border-none"><?php echo $this->Form->input('location',array('label'=>false,'class'=>'form-control input-sm'));?></th>
					<th class="border-none"><?php echo $this->Form->input('status',array('label'=>false,'class'=>'form-control input-sm'));?></th>
					<th class="border-none"><?php echo $this->Form->input('date_created',array('label'=>false,'class'=>'form-control input-sm'));?></th>
					<th class="text-center border-none padding-bottom-10px"><a href="#" class="glyphicon glyphicon-search"></a></th>
				
				</tr>
				<tr>
					<th class="w15 text-center">Name</th>
					<th class="text-center">Description</th>
					<th class="text-center">Category</th>
					<th class="text-center">Classifications</th>
					<th class="text-center">Proponent</th>
					<th class="text-center">Location</th>
					<th class="text-center">Status</th>
					<th class="text-center">Date Created</th>
					<th class="w5 text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php for($i=1;$i<7;$i++):?>
				<tr>
					<td>Test Data <?php echo $i; ?></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td></td>
					<td class="text-center">
						<?php
							echo $this->Html->link(
								$this->Html->tag('i', '', array('class' =>'glyphicon glyphicon-eye-open view-product')),
								array('controller' => 'pages', 'action' => 'project'),
								array('data-toggle' => 'tooltip','title'=>'View Row', 'escape' => false)
							);
						?>
					</td>
				</tr>
				<?php endfor; ?>
			</tbody>
			<tfoot>
				<td colspan="9" class="text-center">
					<nav>
						<ul class="pagination">
							<li>
								<a href="#" aria-label="Previous">
									<span aria-hidden="true">&laquo;</span>
								</a>
							</li>
							<li><a href="#">1</a></li>
							<li><a href="#">2</a></li>
							<li><a href="#">3</a></li>
							<li><a href="#">4</a></li>
							<li><a href="#">5</a></li>
							<li>
								<a href="#" aria-label="Next">
									<span aria-hidden="true">&raquo;</span>
								</a>
							</li>
						</ul>
					</nav>
				</td>
			</tfoot>
		</table>
	</div>
</div>
<br/><br/>
<div class="row hide">
	<?php echo $this->Form->input('city_municipality_lists',array('id'=>'CityAndMunicipalityList','options'=>$cityAndMunicipalities,'empty'=>'Select','class'=>'form-control input-sm','label'=>'City/Municipality'));?>
	<?php echo $this->Form->input('classification',array('options'=>$classificationLists,'empty'=>'Select','class'=>'form-control input-sm classification-category hide','div'=>false,'label'=>false))?>
</div>

