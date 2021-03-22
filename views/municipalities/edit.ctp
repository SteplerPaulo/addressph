<div class="municipalities form">
<?php echo $this->Form->create('Municipality');?>
	<fieldset>
		<legend><?php __('Edit Municipality'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('zipcode');
		echo $this->Form->input('province_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Municipality.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Municipality.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Municipalities', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Provinces', true), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province', true), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
	</ul>
</div>