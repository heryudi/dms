<div class="parts form">
<?php echo $this->Form->create('Part');?>
	<fieldset>
 		<legend><?php __('Add Part'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('model');
		echo $this->Form->input('dealer_price');
		echo $this->Form->input('retail_price');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Parts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Part Transactions', true), array('controller' => 'part_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part Transaction', true), array('controller' => 'part_transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>