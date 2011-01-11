<div class="complaints index">
	<h2><?php __('Complaints');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('repair_order_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($complaints as $complaint):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $complaint['Complaint']['id']; ?>&nbsp;</td>
		<td><?php echo $complaint['Complaint']['name']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($complaint['RepairOrder']['id'], array('controller' => 'repair_orders', 'action' => 'view', $complaint['RepairOrder']['id'])); ?>
		</td>
		<td><?php echo $complaint['Complaint']['created']; ?>&nbsp;</td>
		<td><?php echo $complaint['Complaint']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $complaint['Complaint']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $complaint['Complaint']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $complaint['Complaint']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $complaint['Complaint']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Complaint', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Repair Orders', true), array('controller' => 'repair_orders', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair Order', true), array('controller' => 'repair_orders', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repairs', true), array('controller' => 'repairs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair', true), array('controller' => 'repairs', 'action' => 'add')); ?> </li>
	</ul>
</div>