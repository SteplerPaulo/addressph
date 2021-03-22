<div class="provinces form">
<?php echo $this->Form->create('Province');?>
	<fieldset>
		<legend><?php __('Edit Province'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('country_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Province.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Province.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Provinces', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities', true), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality', true), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
	</ul>
</div>