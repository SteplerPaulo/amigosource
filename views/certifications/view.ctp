<div class="certifications view">
<h2><?php  __('Certification');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certification['Certification']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Business'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($certification['Business']['name'], array('controller' => 'businesses', 'action' => 'view', $certification['Business']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Description'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certification['Certification']['description']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Issuing Agency'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certification['Certification']['issuing_agency']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Date Issued'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certification['Certification']['date_issued']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certification['Certification']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $certification['Certification']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Certification', true), array('action' => 'edit', $certification['Certification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Certification', true), array('action' => 'delete', $certification['Certification']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $certification['Certification']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Certifications', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Certification', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Businesses', true), array('controller' => 'businesses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Business', true), array('controller' => 'businesses', 'action' => 'add')); ?> </li>
	</ul>
</div>
