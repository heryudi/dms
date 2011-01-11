<div class="contacts view">
<h2><?php  __('Contact');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Account'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($contact['Account']['name'], array('controller' => 'accounts', 'action' => 'view', $contact['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Gender'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['gender']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address1'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['address1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address2'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['address2']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Postal Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['postal_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birth Place'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['birth_place']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Birth Date'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['birth_date']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $contact['Contact']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contact', true), array('action' => 'edit', $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Contact', true), array('action' => 'delete', $contact['Contact']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contact['Contact']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contact Phones', true), array('controller' => 'contact_phones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact Phone', true), array('controller' => 'contact_phones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Part Transactions', true), array('controller' => 'part_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part Transaction', true), array('controller' => 'part_transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registrations', true), array('controller' => 'registrations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration', true), array('controller' => 'registrations', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repair Orders', true), array('controller' => 'repair_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair Order', true), array('controller' => 'repair_orders', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Contact Phones');?></h3>
	<?php if (!empty($contact['ContactPhone'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Contact Id'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($contact['ContactPhone'] as $contactPhone):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $contactPhone['id'];?></td>
			<td><?php echo $contactPhone['contact_id'];?></td>
			<td><?php echo $contactPhone['phone'];?></td>
			<td><?php echo $contactPhone['created'];?></td>
			<td><?php echo $contactPhone['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'contact_phones', 'action' => 'view', $contactPhone['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'contact_phones', 'action' => 'edit', $contactPhone['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'contact_phones', 'action' => 'delete', $contactPhone['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contactPhone['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contact Phone', true), array('controller' => 'contact_phones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Part Transactions');?></h3>
	<?php if (!empty($contact['PartTransaction'])):?>
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
		foreach ($contact['PartTransaction'] as $partTransaction):
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
<div class="related">
	<h3><?php __('Related Registrations');?></h3>
	<?php if (!empty($contact['Registration'])):?>
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
		foreach ($contact['Registration'] as $registration):
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
	<?php if (!empty($contact['RepairOrder'])):?>
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
		foreach ($contact['RepairOrder'] as $repairOrder):
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
