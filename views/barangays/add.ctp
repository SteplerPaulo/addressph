<div class="barangays form">
<?php echo $this->Form->create('Barangay');?>
	<fieldset>
		<legend><?php __('Add Barangay'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('municipality_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Barangays', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Municipalities', true), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality', true), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
	</ul>
</div>