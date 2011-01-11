<div class="partTransactions index">
	<h2><?php __('Part Transactions');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('part_id');?></th>
			<th><?php echo $this->Paginator->sort('repair_order_id');?></th>
			<th><?php echo $this->Paginator->sort('contact_id');?></th>
			<th><?php echo $this->Paginator->sort('transaction');?></th>
			<th><?php echo $this->Paginator->sort('balance');?></th>
			<th><?php echo $this->Paginator->sort('notes');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('price');?></th>
			<th><?php echo $this->Paginator->sort('discount');?></th>
			<th><?php echo $this->Paginator->sort('invoice_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($partTransactions as $partTransaction):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $partTransaction['PartTransaction']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($partTransaction['Part']['name'], array('controller' => 'parts', 'action' => 'view', $partTransaction['Part']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($partTransaction['RepairOrder']['id'], array('controller' => 'repair_orders', 'action' => 'view', $partTransaction['RepairOrder']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($partTransaction['Contact']['name'], array('controller' => 'contacts', 'action' => 'view', $partTransaction['Contact']['id'])); ?>
		</td>
		<td><?php echo $partTransaction['PartTransaction']['transaction']; ?>&nbsp;</td>
		<td><?php echo $partTransaction['PartTransaction']['balance']; ?>&nbsp;</td>
		<td><?php echo $partTransaction['PartTransaction']['notes']; ?>&nbsp;</td>
		<td><?php echo $partTransaction['PartTransaction']['status']; ?>&nbsp;</td>
		<td><?php echo $partTransaction['PartTransaction']['price']; ?>&nbsp;</td>
		<td><?php echo $partTransaction['PartTransaction']['discount']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($partTransaction['Invoice']['id'], array('controller' => 'invoices', 'action' => 'view', $partTransaction['Invoice']['id'])); ?>
		</td>
		<td><?php echo $partTransaction['PartTransaction']['created']; ?>&nbsp;</td>
		<td><?php echo $partTransaction['PartTransaction']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $partTransaction['PartTransaction']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $partTransaction['PartTransaction']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $partTransaction['PartTransaction']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $partTransaction['PartTransaction']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Part Transaction', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repair Orders', true), array('controller' => 'repair_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair Order', true), array('controller' => 'repair_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices', true), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice', true), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>