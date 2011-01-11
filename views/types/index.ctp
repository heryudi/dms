<div class="types index">
	<h2><?php __('Types');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('name');?></th>
			<th><?php echo $this->Paginator->sort('service_km');?></th>
			<th><?php echo $this->Paginator->sort('service_period');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($types as $type):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $type['Type']['id']; ?>&nbsp;</td>
		<td><?php echo $type['Type']['name']; ?>&nbsp;</td>
		<td><?php echo $type['Type']['service_km']; ?>&nbsp;</td>
		<td><?php echo $type['Type']['service_period']; ?>&nbsp;</td>
		<td><?php echo $type['Type']['created']; ?>&nbsp;</td>
		<td><?php echo $type['Type']['modified']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $type['Type']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $type['Type']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $type['Type']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $type['Type']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Type', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Vehicles', true), array('controller' => 'vehicles', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vehicle', true), array('controller' => 'vehicles', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Labours', true), array('controller' => 'labours', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Labour', true), array('controller' => 'labours', 'action' => 'add')); ?> </li>
	</ul>
</div>