<div class="repairs index">
	<h2><?php __('Repairs');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('complaint_id');?></th>
			<th><?php echo $this->Paginator->sort('labour_id');?></th>
			<th><?php echo $this->Paginator->sort('fee');?></th>
			<th><?php echo $this->Paginator->sort('discount');?></th>
			<th><?php echo $this->Paginator->sort('start');?></th>
			<th><?php echo $this->Paginator->sort('finish');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('invoice_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($repairs as $repair):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $repair['Repair']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($repair['Complaint']['name'], array('controller' => 'complaints', 'action' => 'view', $repair['Complaint']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($repair['Labour']['name'], array('controller' => 'labours', 'action' => 'view', $repair['Labour']['id'])); ?>
		</td>
		<td><?php echo $repair['Repair']['fee']; ?>&nbsp;</td>
		<td><?php echo $repair['Repair']['discount']; ?>&nbsp;</td>
		<td><?php echo $repair['Repair']['start']; ?>&nbsp;</td>
		<td><?php echo $repair['Repair']['finish']; ?>&nbsp;</td>
		<td><?php echo $repair['Repair']['status']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($repair['Invoice']['id'], array('controller' => 'invoices', 'action' => 'view', $repair['Invoice']['id'])); ?>
		</td>
		<td><?php echo $repair['Repair']['created']; ?>&nbsp;</td>
		<td><?php echo $repair['Repair']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $repair['Repair']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $repair['Repair']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $repair['Repair']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $repair['Repair']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Repair', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Complaints', true), array('controller' => 'complaints', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Complaint', true), array('controller' => 'complaints', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Labours', true), array('controller' => 'labours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Labour', true), array('controller' => 'labours', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Invoices', true), array('controller' => 'invoices', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Invoice', true), array('controller' => 'invoices', 'action' => 'add')); ?> </li>
	</ul>
</div>