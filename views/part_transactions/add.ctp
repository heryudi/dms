<div class="partTransactions form">
<?php echo $this->Form->create('PartTransaction');?>
	<fieldset>
 		<legend><?php __('Add Part Transaction'); ?></legend>
	<?php
		echo $this->Form->input('part_id');
		echo $this->Form->input('repair_order_id');
		echo $this->Form->input('contact_id');
		echo $this->Form->input('transaction');
		echo $this->Form->input('balance');
		echo $this->Form->input('notes');
		echo $this->Form->input('status');
		echo $this->Form->input('price');
		echo $this->Form->input('discount');
		echo $this->Form->input('invoice_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Part Transactions', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repair Orders', true), array('controller' => 'repair_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair Order', true), array('controller' => 'repair_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices', true), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice', true), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>