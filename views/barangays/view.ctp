<div class="barangays view">
<h2><?php  __('Barangay');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $barangay['Barangay']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $barangay['Barangay']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Municipality'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($barangay['Municipality']['name'], array('controller' => 'municipalities', 'action' => 'view', $barangay['Municipality']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Barangay', true), array('action' => 'edit', $barangay['Barangay']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Barangay', true), array('action' => 'delete', $barangay['Barangay']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $barangay['Barangay']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Barangays', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Barangay', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities', true), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality', true), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
	</ul>
</div>
