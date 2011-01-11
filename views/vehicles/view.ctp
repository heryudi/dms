<div class="vehicles view">
<h2><?php  __('Vehicle');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vehicle['Vehicle']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vin'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vehicle['Vehicle']['vin']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Engine Nr'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vehicle['Vehicle']['engine_nr']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Type'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($vehicle['Type']['name'], array('controller' => 'types', 'action' => 'view', $vehicle['Type']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vehicle['Vehicle']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vehicle['Vehicle']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vehicle', true), array('action' => 'edit', $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Vehicle', true), array('action' => 'delete', $vehicle['Vehicle']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vehicle['Vehicle']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types', true), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type', true), array('controller' => 'types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registrations', true), array('controller' => 'registrations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration', true), array('controller' => 'registrations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repair Orders', true), array('controller' => 'repair_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair Order', true), array('controller' => 'repair_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Registrations');?></h3>
	<?php if (!empty($vehicle['Registration'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Vehicle Id'); ?></th>
		<th><?php __('Contact Id'); ?></th>
		<th><?php __('Account Id'); ?></th>
		<th><?php __('Year'); ?></th>
		<th><?php __('Registration Exp Date'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['Registration'] as $registration):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $registration['id'];?></td>
			<td><?php echo $registration['name'];?></td>
			<td><?php echo $registration['vehicle_id'];?></td>
			<td><?php echo $registration['contact_id'];?></td>
			<td><?php echo $registration['account_id'];?></td>
			<td><?php echo $registration['year'];?></td>
			<td><?php echo $registration['registration_exp_date'];?></td>
			<td><?php echo $registration['created'];?></td>
			<td><?php echo $registration['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'registrations', 'action' => 'view', $registration['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'registrations', 'action' => 'edit', $registration['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'registrations', 'action' => 'delete', $registration['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $registration['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Registration', true), array('controller' => 'registrations', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Repair Orders');?></h3>
	<?php if (!empty($vehicle['RepairOrder'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Vehicle Id'); ?></th>
		<th><?php __('Barcode'); ?></th>
		<th><?php __('Odometer'); ?></th>
		<th><?php __('Contact Id'); ?></th>
		<th><?php __('Repair Order Id'); ?></th>
		<th><?php __('In'); ?></th>
		<th><?php __('Out'); ?></th>
		<th><?php __('Cancel Note'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vehicle['RepairOrder'] as $repairOrder):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $repairOrder['id'];?></td>
			<td><?php echo $repairOrder['vehicle_id'];?></td>
			<td><?php echo $repairOrder['barcode'];?></td>
			<td><?php echo $repairOrder['odometer'];?></td>
			<td><?php echo $repairOrder['contact_id'];?></td>
			<td><?php echo $repairOrder['repair_order_id'];?></td>
			<td><?php echo $repairOrder['in'];?></td>
			<td><?php echo $repairOrder['out'];?></td>
			<td><?php echo $repairOrder['cancel_note'];?></td>
			<td><?php echo $repairOrder['created'];?></td>
			<td><?php echo $repairOrder['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'repair_orders', 'action' => 'view', $repairOrder['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'repair_orders', 'action' => 'edit', $repairOrder['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'repair_orders', 'action' => 'delete', $repairOrder['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $repairOrder['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Repair Order', true), array('controller' => 'repair_orders', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
