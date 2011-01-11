<div class="repairOrders form">
<?php echo $this->Form->create('RepairOrder');?>
	<fieldset>
 		<legend><?php __('Edit Repair Order'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('vehicle_id');
		echo $this->Form->input('barcode');
		echo $this->Form->input('odometer');
		echo $this->Form->input('contact_id');
		echo $this->Form->input('repair_order_id');
		echo $this->Form->input('in');
		echo $this->Form->input('out');
		echo $this->Form->input('cancel_note');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('RepairOrder.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('RepairOrder.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Repair Orders', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repair Orders', true), array('controller' => 'repair_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Repair Order', true), array('controller' => 'repair_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints', true), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint', true), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Part Transactions', true), array('controller' => 'part_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part Transaction', true), array('controller' => 'part_transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>