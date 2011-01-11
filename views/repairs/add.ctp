<div class="repairs form">
<?php echo $this->Form->create('Repair');?>
	<fieldset>
 		<legend><?php __('Add Repair'); ?></legend>
	<?php
		echo $this->Form->input('complaint_id');
		echo $this->Form->input('labour_id');
		echo $this->Form->input('fee');
		echo $this->Form->input('discount');
		echo $this->Form->input('start');
		echo $this->Form->input('finish');
		echo $this->Form->input('status');
		echo $this->Form->input('invoice_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Repairs', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Complaints', true), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint', true), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Labours', true), array('controller' => 'labours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Labour', true), array('controller' => 'labours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices', true), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice', true), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>