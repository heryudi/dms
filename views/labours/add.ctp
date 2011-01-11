<div class="labours form">
<?php echo $this->Form->create('Labour');?>
	<fieldset>
 		<legend><?php __('Add Labour'); ?></legend>
	<?php
		echo $this->Form->input('code');
		echo $this->Form->input('name');
		echo $this->Form->input('time');
		echo $this->Form->input('Type');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Labours', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Repairs', true), array('controller' => 'repairs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair', true), array('controller' => 'repairs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types', true), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type', true), array('controller' => 'types', 'action' => 'add')); ?> </li>
	</ul>
</div>