<div class="repairOrders index">
	<h2><?php __('Repair Orders');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('vehicle_id');?></th>
			<th><?php echo $this->Paginator->sort('barcode');?></th>
			<th><?php echo $this->Paginator->sort('odometer');?></th>
			<th><?php echo $this->Paginator->sort('contact_id');?></th>
			<th><?php echo $this->Paginator->sort('repair_order_id');?></th>
			<th><?php echo $this->Paginator->sort('in');?></th>
			<th><?php echo $this->Paginator->sort('out');?></th>
			<th><?php echo $this->Paginator->sort('cancel_note');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($repairOrders as $repairOrder):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $repairOrder['RepairOrder']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($repairOrder['Vehicle']['id'], array('controller' => 'vehicles', 'action' => 'view', $repairOrder['Vehicle']['id'])); ?>
		</td>
		<td><?php echo $repairOrder['RepairOrder']['barcode']; ?>&nbsp;</td>
		<td><?php echo $repairOrder['RepairOrder']['odometer']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($repairOrder['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $repairOrder['Contact']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($repairOrder['ParentRepairOrder']['id'], array('controller' => 'repair_orders', 'action' => 'view', $repairOrder['ParentRepairOrder']['id'])); ?>
		</td>
		<td><?php echo $repairOrder['RepairOrder']['in']; ?>&nbsp;</td>
		<td><?php echo $repairOrder['RepairOrder']['out']; ?>&nbsp;</td>
		<td><?php echo $repairOrder['RepairOrder']['cancel_note']; ?>&nbsp;</td>
		<td><?php echo $repairOrder['RepairOrder']['created']; ?>&nbsp;</td>
		<td><?php echo $repairOrder['RepairOrder']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $repairOrder['RepairOrder']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $repairOrder['RepairOrder']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $repairOrder['RepairOrder']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $repairOrder['RepairOrder']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Repair Order', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repair Orders', true), array('controller' => 'repair_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Repair Order', true), array('controller' => 'repair_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Complaints', true), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint', true), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Part Transactions', true), array('controller' => 'part_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part Transaction', true), array('controller' => 'part_transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>