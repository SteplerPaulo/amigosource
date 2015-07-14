<style>
.pagination{
	margin: 2px 0; 
}
</style>
<nav class="navbar navbar-default navbar-static-top" id="search-types-nav">
	<div class="container">
		<div id="search-types" class="collapse navbar-collapse">
			<ul class="nav navbar-nav search-tabs ">
				<li role="presentation" class="active">
					<a href="javascript:void()">View Projects</a>
				</li>
				<li role="presentation">
					<?php echo $this->Html->link('Create Project',array('controller'=>'/','action'=>'create-project'));?>
				</li>
				
			</ul>
		</div>
	</div>
</nav>
<div class="container">
	<div class="row-fluid">
		<div class="col-lg-6">
			<h3> Projects</h3>
		</div>
		<div class="col-lg-6 text-right">
			<form class="form-inline">
			  <div class="form-group">
				<label for="Status">Status</label>
				<select class="form-control" id="Status">
					<option value="all">All</option>
				</select>
			  </div>
			  <button type="submit" class="btn btn-default">Filter</button>
			</form>
		</div>
	</div>
	<div class="row-fluid">
		<table class="table table-bordered table-condensed">
			<thead>
				<tr>
					<th class="w15 text-center">ID</th>
					<th class="w15 text-center">Name</th>
					<th class="text-center">Business Type</th>
					<th class="text-center">Country</th>
					<th class="text-center">Status</th>
					<th class="w5 text-center">Actions</th>
				</tr>
			</thead>
			<tbody>
				<?php for($i=1;$i<7;$i++):?>
				<tr>
					<td><?php echo $i; ?></td>
					<td>Test Data <?php echo $i; ?></td>		
					<td></td>
					<td></td>
					<td></td>
					<td class="text-center">
						<a href="/amigosource/view-project-details"><i type="button" class="glyphicon glyphicon-eye-open"></i></a>
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
