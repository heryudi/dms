<div class="invoices view">
<h2><?php  __('Invoice');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $invoice['Invoice']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Printed'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $invoice['Invoice']['printed']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $invoice['Invoice']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $invoice['Invoice']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Invoice', true), array('action' => 'edit', $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Invoice', true), array('action' => 'delete', $invoice['Invoice']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $invoice['Invoice']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Part Transactions', true), array('controller' => 'part_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part Transaction', true), array('controller' => 'part_transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repairs', true), array('controller' => 'repairs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair', true), array('controller' => 'repairs', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Part Transactions');?></h3>
	<?php if (!empty($invoice['PartTransaction'])):?>
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
		foreach ($invoice['PartTransaction'] as $partTransaction):
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
	<h3><?php __('Related Repairs');?></h3>
	<?php if (!empty($invoice['Repair'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Complaint Id'); ?></th>
		<th><?php __('Labour Id'); ?></th>
		<th><?php __('Fee'); ?></th>
		<th><?php __('Discount'); ?></th>
		<th><?php __('Start'); ?></th>
		<th><?php __('Finish'); ?></th>
		<th><?php __('Status'); ?></th>
		<th><?php __('Invoice Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($invoice['Repair'] as $repair):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $repair['id'];?></td>
			<td><?php echo $repair['complaint_id'];?></td>
			<td><?php echo $repair['labour_id'];?></td>
			<td><?php echo $repair['fee'];?></td>
			<td><?php echo $repair['discount'];?></td>
			<td><?php echo $repair['start'];?></td>
			<td><?php echo $repair['finish'];?></td>
			<td><?php echo $repair['status'];?></td>
			<td><?php echo $repair['invoice_id'];?></td>
			<td><?php echo $repair['created'];?></td>
			<td><?php echo $repair['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'repairs', 'action' => 'view', $repair['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'repairs', 'action' => 'edit', $repair['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'repairs', 'action' => 'delete', $repair['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $repair['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Repair', true), array('controller' => 'repairs', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
