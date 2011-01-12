<div class="registrations form">
<?php echo $this->Form->create('Registration');?>
	<fieldset>
 		<legend><?php __('Edit Registration'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('reg_nr');
		echo $this->Form->input('vehicle_id');
		echo $this->Form->input('account_id');
		echo $this->Form->input('contact_id');
		echo $this->Form->input('year');
		echo $this->Form->input('color');
		echo $this->Form->input('reg_exp_date');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Registration.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Registration.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Registrations', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>