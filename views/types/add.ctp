<div class="types form">
<?php echo $this->Form->create('Type');?>
	<fieldset>
 		<legend><?php __('Add Type'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('service_km');
		echo $this->Form->input('service_period');
		echo $this->Form->input('Labour');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Types', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Labours', true), array('controller' => 'labours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Labour', true), array('controller' => 'labours', 'action' => 'add')); ?> </li>
	</ul>
</div>