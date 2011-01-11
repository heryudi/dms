<div class="vehicles form">
<?php echo $this->Form->create('Vehicle');?>
	<fieldset>
 		<legend><?php __('Edit Vehicle'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vin');
		echo $this->Form->input('engine_nr');
		echo $this->Form->input('type_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Vehicle.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Vehicle.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Types', true), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type', true), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registrations', true), array('controller' => 'registrations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration', true), array('controller' => 'registrations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repair Orders', true), array('controller' => 'repair_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair Order', true), array('controller' => 'repair_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>