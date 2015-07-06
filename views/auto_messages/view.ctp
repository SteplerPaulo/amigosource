<div class="autoMessages view">
<h2><?php  __('Auto Message');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $autoMessage['AutoMessage']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Message'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $autoMessage['AutoMessage']['message']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tags'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $autoMessage['AutoMessage']['tags']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $autoMessage['AutoMessage']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $autoMessage['AutoMessage']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Auto Message', true), array('action' => 'edit', $autoMessage['AutoMessage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Auto Message', true), array('action' => 'delete', $autoMessage['AutoMessage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $autoMessage['AutoMessage']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Auto Messages', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Auto Message', true), array('action' => 'add')); ?> </li>
	</ul>
</div>
