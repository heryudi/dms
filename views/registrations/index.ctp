<div class="registrations index">
	<h2><?php __('Registrations');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('reg_nr');?></th>
			<th><?php echo $this->Paginator->sort('vehicle_id');?></th>
			<th><?php echo $this->Paginator->sort('account_id');?></th>
			<th><?php echo $this->Paginator->sort('contact_id');?></th>
			<th><?php echo $this->Paginator->sort('year');?></th>
			<th><?php echo $this->Paginator->sort('color');?></th>
			<th><?php echo $this->Paginator->sort('reg_exp_date');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($registrations as $registration):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $registration['Registration']['id']; ?>&nbsp;</td>
		<td><?php echo $registration['Registration']['reg_nr']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($registration['Vehicle']['vin'], array('controller' => 'vehicles', 'action' => 'view', $registration['Vehicle']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($registration['Account']['name'], array('controller' => 'accounts', 'action' => 'view', $registration['Account']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($registration['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $registration['Contact']['id'])); ?>
		</td>
		<td><?php echo $registration['Registration']['year']; ?>&nbsp;</td>
		<td><?php echo $registration['Registration']['color']; ?>&nbsp;</td>
		<td><?php echo $registration['Registration']['reg_exp_date']; ?>&nbsp;</td>
		<td><?php echo $registration['Registration']['created']; ?>&nbsp;</td>
		<td><?php echo $registration['Registration']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $registration['Registration']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $registration['Registration']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $registration['Registration']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $registration['Registration']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Registration', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
	</ul>
</div>