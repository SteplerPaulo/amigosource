<div class="photos index">
	<h2><?php __('Photos');?></h2>
	<table class="table table-bordered">
	<tr>
		<th><?php echo $this->Paginator->sort('id');?></th>
		<th><?php echo $this->Paginator->sort('gallery_id');?></th>
		<th><?php echo $this->Paginator->sort('name');?></th>
		<th><?php echo $this->Paginator->sort('img_file');?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($photos as $photo):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $photo['Photo']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($photo['Gallery']['name'], array('controller' => 'galleries', 'action' => 'view', $photo['Gallery']['id'])); ?>
		</td>
		<td><?php echo $photo['Photo']['name']; ?>&nbsp;</td>
		<td><?php  echo $html->image('uploads' . DS . 'images' . DS . $photo['Photo']['img_file'], array('alt' => 'Gallery Photo')); ?></td>
		
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $photo['Photo']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $photo['Photo']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $photo['Photo']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $photo['Photo']['id'])); ?>
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
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Photo', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Galleries', true), array('controller' => 'galleries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Gallery', true), array('controller' => 'galleries', 'action' => 'add')); ?> </li>
	</ul>
</div>
