<div class="businesses index container">
	
	<div class="row">
		<div class="col-sm-9">
			<h2><?php __('Businesses');?></h2>
		</div>
		<div class="col-sm-3">
			<form class="form-inline pull-right" action="businesses">
			  <div class="form-group">
				<label>Status:</label>
				<select class="form-control" name="status" id="StatusFilter">
					<option value="all" <?php if($status=='all') echo "selected"; ?>>All Pending</option>
					<option value="submitted" <?php if($status=='SUBMT') echo "selected"; ?>>Submitted</option>
					<option value="returned" <?php if($status=='RETRN') echo "selected"; ?>>Returned</option>
					<option value="resubmitted" <?php if($status=='RSMBT') echo "selected"; ?>>Resubmitted</option>
					<option value="approved" <?php if($status=='APPRV') echo "selected"; ?>>Approved</option>
				</select> 
			  </div>
			  <button class="btn btn-default">Filter</button>
			</form>
		</div>
	</div>
	
	<table cellpadding="0" cellspacing="0" class="table table-bordered">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('business_type_id');?></th>
			<th><?php echo $this->Paginator->sort('country');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($businesses as $business):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $business['Business']['id']; ?>&nbsp;</td>
		<td><?php echo $business['Business']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($business['BusinessType']['name'], array('controller' => 'business_types', 'action' => 'view', $business['BusinessType']['id'])); ?>
		</td>
		<td><?php echo $business['Business']['country']; ?>&nbsp;</td>
		<td>
			<?php 
				$status = $business['Business']['status'];
				if($status=='SUBMT') echo 'Submitted';
				if($status=='RETRN') echo 'Returned';
				if($status=='RSBMT') echo 'Resubmitted';
				if($status=='APPRV') echo 'Approved';
			?>
		</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $business['Business']['id'],md5($status.$business['Business']['id']))); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $business['Business']['id'],$status=='APPRV'), null, sprintf(__('Are you sure you want to delete # %s?', true), $business['Business']['name'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions hide">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Business', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Business Types', true), array('controller' => 'business_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business Type', true), array('controller' => 'business_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Certifications', true), array('controller' => 'certifications', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification', true), array('controller' => 'certifications', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Factories', true), array('controller' => 'factories', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Factory', true), array('controller' => 'factories', 'action' => 'add')); ?> </li>
	</ul>
</div>