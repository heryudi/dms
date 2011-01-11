<div class="contactPhones form">
<?php echo $this->Form->create('ContactPhone');?>
	<fieldset>
 		<legend><?php __('Add Contact Phone'); ?></legend>
	<?php
		echo $this->Form->input('contact_id');
		echo $this->Form->input('phone');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Contact Phones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
	</ul>
</div>