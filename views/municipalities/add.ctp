<div class="municipalities form">
<?php echo $this->Form->create('Municipality');?>
	<fieldset>
		<legend><?php __('Add Municipality'); ?></legend>
	<?php
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

		<li><?php echo $this->Html->link(__('List Municipalities', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Provinces', true), array('controller' => 'provinces', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Province', true), array('controller' => 'provinces', 'action' => 'add')); ?> </li>
	</ul>
</div>