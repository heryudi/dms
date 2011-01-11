<div class="complaints form">
<?php echo $this->Form->create('Complaint');?>
	<fieldset>
 		<legend><?php __('Edit Complaint'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('name');
		echo $this->Form->input('repair_order_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Complaint.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Complaint.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Complaints', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Repair Orders', true), array('controller' => 'repair_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair Order', true), array('controller' => 'repair_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repairs', true), array('controller' => 'repairs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair', true), array('controller' => 'repairs', 'action' => 'add')); ?> </li>
	</ul>
</div>