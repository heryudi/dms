<div class="accounts view">
<h2><?php  __('Account');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Name'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['name']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Npwp'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['npwp']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address1'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['address1']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Address2'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['address2']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Postal Code'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['postal_code']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $account['Account']['modified']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Account', true), array('action' => 'edit', $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Account', true), array('action' => 'delete', $account['Account']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $account['Account']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Account Phones', true), array('controller' => 'account_phones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account Phone', true), array('controller' => 'account_phones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Contacts', true), array('controller' => 'contacts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Registrations', true), array('controller' => 'registrations', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Registration', true), array('controller' => 'registrations', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Account Phones');?></h3>
	<?php if (!empty($account['AccountPhone'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Account Id'); ?></th>
		<th><?php __('Phone'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($account['AccountPhone'] as $accountPhone):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $accountPhone['id'];?></td>
			<td><?php echo $accountPhone['account_id'];?></td>
			<td><?php echo $accountPhone['phone'];?></td>
			<td><?php echo $accountPhone['created'];?></td>
			<td><?php echo $accountPhone['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'account_phones', 'action' => 'view', $accountPhone['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'account_phones', 'action' => 'edit', $accountPhone['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'account_phones', 'action' => 'delete', $accountPhone['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $accountPhone['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Account Phone', true), array('controller' => 'account_phones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Contacts');?></h3>
	<?php if (!empty($account['Contact'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Account Id'); ?></th>
		<th><?php __('Name'); ?></th>
		<th><?php __('Gender'); ?></th>
		<th><?php __('Address1'); ?></th>
		<th><?php __('Address2'); ?></th>
		<th><?php __('Postal Code'); ?></th>
		<th><?php __('Birth Place'); ?></th>
		<th><?php __('Birth Date'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($account['Contact'] as $contact):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $contact['id'];?></td>
			<td><?php echo $contact['account_id'];?></td>
			<td><?php echo $contact['name'];?></td>
			<td><?php echo $contact['gender'];?></td>
			<td><?php echo $contact['address1'];?></td>
			<td><?php echo $contact['address2'];?></td>
			<td><?php echo $contact['postal_code'];?></td>
			<td><?php echo $contact['birth_place'];?></td>
			<td><?php echo $contact['birth_date'];?></td>
			<td><?php echo $contact['created'];?></td>
			<td><?php echo $contact['modified'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'contacts', 'action' => 'view', $contact['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'contacts', 'action' => 'edit', $contact['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'contacts', 'action' => 'delete', $contact['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $contact['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Contact', true), array('controller' => 'contacts', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Registrations');?></h3>
	<?php if (!empty($account['Registration'])):?>
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
		foreach ($account['Registration'] as $registration):
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
