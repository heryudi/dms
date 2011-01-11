<div class="accountPhones form">
<?php echo $this->Form->create('AccountPhone');?>
	<fieldset>
 		<legend><?php __('Edit Account Phone'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('account_id');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('AccountPhone.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('AccountPhone.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Account Phones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>