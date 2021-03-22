<div class="municipalities view">
<h2><?php  __('Municipality');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $municipality['Municipality']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $municipality['Municipality']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zipcode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $municipality['Municipality']['zipcode']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Province'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($municipality['Province']['name'], array('controller' => 'provinces', 'action' => 'view', $municipality['Province']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Municipality', true), array('action' => 'edit', $municipality['Municipality']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Municipality', true), array('action' => 'delete', $municipality['Municipality']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $municipality['Municipality']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces', true), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province', true), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
	</ul>
</div>
