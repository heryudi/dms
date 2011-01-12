<div class="repairOrders view">
<h2><?php  __('Repair Order');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $repairOrder['RepairOrder']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vehicle'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($repairOrder['Vehicle']['vin'], array('controller' => 'vehicles', 'action' => 'view', $repairOrder['Vehicle']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Barcode'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $repairOrder['RepairOrder']['barcode']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Odometer'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $repairOrder['RepairOrder']['odometer']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contact'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($repairOrder['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $repairOrder['Contact']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Parent Repair Order'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($repairOrder['ParentRepairOrder']['id'], array('controller' => 'repair_orders', 'action' => 'view', $repairOrder['ParentRepairOrder']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('In'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $repairOrder['RepairOrder']['in']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Out'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $repairOrder['RepairOrder']['out']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cancel Note'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $repairOrder['RepairOrder']['cancel_note']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $repairOrder['RepairOrder']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $repairOrder['RepairOrder']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Repair Order', true), array('action' => 'edit', $repairOrder['RepairOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Repair Order', true), array('action' => 'delete', $repairOrder['RepairOrder']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $repairOrder['RepairOrder']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Repair Orders', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair Order', true), array('action' => 'add')); ?> </li>
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
	<div class="related">
		<h3><?php __('Related Repair Orders');?></h3>
	<?php if (!empty($repairOrder['ChildRepairOrder'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $repairOrder['ChildRepairOrder']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vehicle Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $repairOrder['ChildRepairOrder']['vehicle_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Barcode');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $repairOrder['ChildRepairOrder']['barcode'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Odometer');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $repairOrder['ChildRepairOrder']['odometer'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contact Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $repairOrder['ChildRepairOrder']['contact_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Repair Order Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $repairOrder['ChildRepairOrder']['repair_order_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('In');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $repairOrder['ChildRepairOrder']['in'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Out');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $repairOrder['ChildRepairOrder']['out'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cancel Note');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $repairOrder['ChildRepairOrder']['cancel_note'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $repairOrder['ChildRepairOrder']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $repairOrder['ChildRepairOrder']['modified'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Child Repair Order', true), array('controller' => 'repair_orders', 'action' => 'edit', $repairOrder['ChildRepairOrder']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php __('Related Complaints');?></h3>
	<?php if (!empty($repairOrder['Complaint'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Repair Order Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($repairOrder['Complaint'] as $complaint):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $complaint['id'];?></td>
			<td><?php echo $complaint['name'];?></td>
			<td><?php echo $complaint['repair_order_id'];?></td>
			<td><?php echo $complaint['created'];?></td>
			<td><?php echo $complaint['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'complaints', 'action' => 'view', $complaint['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'complaints', 'action' => 'edit', $complaint['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'complaints', 'action' => 'delete', $complaint['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $complaint['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Complaint', true), array('controller' => 'complaints', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Part Transactions');?></h3>
	<?php if (!empty($repairOrder['PartTransaction'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Part Id'); ?></th>
		<th><?php __('Repair Order Id'); ?></th>
		<th><?php __('Contact Id'); ?></th>
		<th><?php __('Transaction'); ?></th>
		<th><?php __('Balance'); ?></th>
		<th><?php __('Notes'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Price'); ?></th>
		<th><?php __('Discount'); ?></th>
		<th><?php __('Invoice Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($repairOrder['PartTransaction'] as $partTransaction):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $partTransaction['id'];?></td>
			<td><?php echo $partTransaction['part_id'];?></td>
			<td><?php echo $partTransaction['repair_order_id'];?></td>
			<td><?php echo $partTransaction['contact_id'];?></td>
			<td><?php echo $partTransaction['transaction'];?></td>
			<td><?php echo $partTransaction['balance'];?></td>
			<td><?php echo $partTransaction['notes'];?></td>
			<td><?php echo $partTransaction['status'];?></td>
			<td><?php echo $partTransaction['price'];?></td>
			<td><?php echo $partTransaction['discount'];?></td>
			<td><?php echo $partTransaction['invoice_id'];?></td>
			<td><?php echo $partTransaction['created'];?></td>
			<td><?php echo $partTransaction['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'part_transactions', 'action' => 'view', $partTransaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'part_transactions', 'action' => 'edit', $partTransaction['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'part_transactions', 'action' => 'delete', $partTransaction['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $partTransaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Part Transaction', true), array('controller' => 'part_transactions', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
