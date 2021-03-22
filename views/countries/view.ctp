<div class="countries view">
<h2><?php  __('Country');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $country['Country']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $country['Country']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Country Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $country['Country']['country_code']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Country', true), array('action' => 'edit', $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Country', true), array('action' => 'delete', $country['Country']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $country['Country']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Provinces', true), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province', true), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Provinces');?></h3>
	<?php if (!empty($country['Province'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Country Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($country['Province'] as $province):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $province['id'];?></td>
			<td><?php echo $province['name'];?></td>
			<td><?php echo $province['country_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'provinces', 'action' => 'view', $province['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'provinces', 'action' => 'edit', $province['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'provinces', 'action' => 'delete', $province['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $province['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Province', true), array('controller' => 'provinces', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
