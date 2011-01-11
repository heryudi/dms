<div class="labours view">
<h2><?php  __('Labour');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $labour['Labour']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $labour['Labour']['code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $labour['Labour']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Time'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $labour['Labour']['time']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $labour['Labour']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $labour['Labour']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Labour', true), array('action' => 'edit', $labour['Labour']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Labour', true), array('action' => 'delete', $labour['Labour']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $labour['Labour']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Labours', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Labour', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Repairs', true), array('controller' => 'repairs', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Repair', true), array('controller' => 'repairs', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Types', true), array('controller' => 'types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Type', true), array('controller' => 'types', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Repairs');?></h3>
	<?php if (!empty($labour['Repair'])):?>
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
		foreach ($labour['Repair'] as $repair):
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
<div class="related">
	<h3><?php __('Related Types');?></h3>
	<?php if (!empty($labour['Type'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Service Km'); ?></th>
		<th><?php __('Service Period'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($labour['Type'] as $type):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $type['id'];?></td>
			<td><?php echo $type['name'];?></td>
			<td><?php echo $type['service_km'];?></td>
			<td><?php echo $type['service_period'];?></td>
			<td><?php echo $type['created'];?></td>
			<td><?php echo $type['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'types', 'action' => 'view', $type['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'types', 'action' => 'edit', $type['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'types', 'action' => 'delete', $type['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $type['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Type', true), array('controller' => 'types', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
