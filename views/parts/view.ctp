<div class="parts view">
<h2><?php  __('Part');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $part['Part']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $part['Part']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Model'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $part['Part']['model']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Dealer Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $part['Part']['dealer_price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Retail Price'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $part['Part']['retail_price']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $part['Part']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $part['Part']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Part', true), array('action' => 'edit', $part['Part']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Part', true), array('action' => 'delete', $part['Part']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $part['Part']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Parts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Part Transactions', true), array('controller' => 'part_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part Transaction', true), array('controller' => 'part_transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Part Transactions');?></h3>
	<?php if (!empty($part['PartTransaction'])):?>
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
		foreach ($part['PartTransaction'] as $partTransaction):
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
