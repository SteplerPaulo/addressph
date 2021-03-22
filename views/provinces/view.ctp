<div class="provinces view">
<h2><?php  __('Province');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $province['Province']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $province['Province']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($province['Country']['name'], array('controller' => 'countries', 'action' => 'view', $province['Country']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Province', true), array('action' => 'edit', $province['Province']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Province', true), array('action' => 'delete', $province['Province']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $province['Province']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities', true), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality', true), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Municipalities');?></h3>
	<?php if (!empty($province['Municipality'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Zipcode'); ?></th>
		<th><?php __('Province Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($province['Municipality'] as $municipality):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $municipality['id'];?></td>
			<td><?php echo $municipality['name'];?></td>
			<td><?php echo $municipality['zipcode'];?></td>
			<td><?php echo $municipality['province_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'municipalities', 'action' => 'view', $municipality['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'municipalities', 'action' => 'edit', $municipality['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'municipalities', 'action' => 'delete', $municipality['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $municipality['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Municipality', true), array('controller' => 'municipalities', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
