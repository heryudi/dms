<div class="accounts form">
<?php echo $this->Form->create('Account');?>
	<fieldset>
 		<legend><?php __('Add Account'); ?></legend>
	<?php
		echo $this->Form->input('name');
		echo $this->Form->input('npwp');
		echo $this->Form->input('address1');
		echo $this->Form->input('address2');
		echo $this->Form->input('postal_code');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Accounts', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Account Phones', true), array('controller' => 'account_phones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Phone', true), array('controller' => 'account_phones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registrations', true), array('controller' => 'registrations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration', true), array('controller' => 'registrations', 'action' => 'add')); ?> </li>
	</ul>
</div>