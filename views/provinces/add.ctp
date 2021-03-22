<div class="provinces form">
<?php echo $this->Form->create('Province');?>
	<fieldset>
		<legend><?php __('Add Province'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('country_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Provinces', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Countries', true), array('controller' => 'countries', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Country', true), array('controller' => 'countries', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipalities', true), array('controller' => 'municipalities', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipality', true), array('controller' => 'municipalities', 'action' => 'add')); ?> </li>
	</ul>
</div>