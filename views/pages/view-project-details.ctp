<div class="container">
	<div class="row-fluid col-lg-10 col-lg-offset-1">
		<div class="row">
			<button id="Toggle" class="btn btn-info pull-right">Toggle</button>
			<b>
			<div>ID</div>
			<div>Name</div>
			<div>Business Type</div>
			<div>Country</div>
			<div>Status</div>
			<div>Actions</div>
			</b>
		</div>
		<br/>
		<div class="row" style="display:none">
			<?php echo $this->Form->create('Email',array('action'=>'send'));?>
			<?php echo $this->Form->input('message',array('type'=>'textarea','class'=>'form-control input-sm'))?>
			<br/>
			<button class="btn btn-primary pull-right">Send</button>
			<?php echo $this->Form->end();?>
		</div>
		<br/>
		<div class="row">
			<table class="table table-bordered table-condensed">
				<thead>
					<tr>
						<th class="w15 text-center">ID</th>
						<th class="w15 text-center">Name</th>
						<th class="text-center">Business Type</th>
						<th class="text-center">Country</th>
						<th class="text-center">Status</th>
						<th class="w15 text-center">Actions</th>
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
							<a class="btn btn-primary btn-sm">Accept</a>
							<a class="btn btn-warning btn-sm">Decline</a>
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
</div>
<?php 	
	echo $this->Html->script('biz/view-project-details',array('inline'=>false));
?>