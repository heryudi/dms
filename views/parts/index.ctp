<div class="parts index">
	<h2><?php __('Parts');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('model');?></th>
			<th><?php echo $this->Paginator->sort('part_id');?></th>
			<th><?php echo $this->Paginator->sort('accessories');?></th>
			<th><?php echo $this->Paginator->sort('material');?></th>
			<th><?php echo $this->Paginator->sort('non_gm');?></th>
			<th><?php echo $this->Paginator->sort('std_pack');?></th>
			<th><?php echo $this->Paginator->sort('dealer_price');?></th>
			<th><?php echo $this->Paginator->sort('retail_price');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($parts as $part):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $part['Part']['id']; ?>&nbsp;</td>
		<td><?php echo $part['Part']['name']; ?>&nbsp;</td>
		<td><?php echo $part['Part']['model']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($part['Part']['part_id'], array('controller' => 'parts', 'action' => 'view', $part['Part']['part_id'])); ?>
		</td>
		<td><?php echo $part['Part']['accessories']; ?>&nbsp;</td>
		<td><?php echo $part['Part']['material']; ?>&nbsp;</td>
		<td><?php echo $part['Part']['non_gm']; ?>&nbsp;</td>
		<td><?php echo $part['Part']['std_pack']; ?>&nbsp;</td>
		<td><?php echo $part['Part']['dealer_price']; ?>&nbsp;</td>
		<td><?php echo $part['Part']['retail_price']; ?>&nbsp;</td>
		<td><?php echo $part['Part']['created']; ?>&nbsp;</td>
		<td><?php echo $part['Part']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $part['Part']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $part['Part']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $part['Part']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $part['Part']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Part', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Parts', true), array('controller' => 'parts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Parent Part', true), array('controller' => 'parts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Part Transactions', true), array('controller' => 'part_transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Part Transaction', true), array('controller' => 'part_transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>