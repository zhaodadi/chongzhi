<div class="accountsUsers view">
<h2><?php  echo __('Accounts User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($accountsUser['AccountsUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $accountsUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account'); ?></dt>
		<dd>
			<?php echo $this->Html->link($accountsUser['Account']['name'], array('controller' => 'accounts', 'action' => 'view', $accountsUser['Account']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Name'); ?></dt>
		<dd>
			<?php echo h($accountsUser['AccountsUser']['account_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Account Password'); ?></dt>
		<dd>
			<?php echo h($accountsUser['AccountsUser']['account_password']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default'); ?></dt>
		<dd>
			<?php echo h($accountsUser['AccountsUser']['default']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($accountsUser['AccountsUser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($accountsUser['AccountsUser']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Accounts User'), array('action' => 'edit', $accountsUser['AccountsUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Accounts User'), array('action' => 'delete', $accountsUser['AccountsUser']['id']), null, __('Are you sure you want to delete # %s?', $accountsUser['AccountsUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounts User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($accountsUser['Transaction'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('User Id'); ?></th>
		<th><?php echo __('Payment Type Id'); ?></th>
		<th><?php echo __('Accounts User Id'); ?></th>
		<th><?php echo __('Amount Rmb'); ?></th>
		<th><?php echo __('Amount Need'); ?></th>
		<th><?php echo __('Currency'); ?></th>
		<th><?php echo __('Amount Paid'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($accountsUser['Transaction'] as $transaction): ?>
		<tr>
			<td><?php echo $transaction['id']; ?></td>
			<td><?php echo $transaction['user_id']; ?></td>
			<td><?php echo $transaction['payment_type_id']; ?></td>
			<td><?php echo $transaction['accounts_user_id']; ?></td>
			<td><?php echo $transaction['amount_rmb']; ?></td>
			<td><?php echo $transaction['amount_need']; ?></td>
			<td><?php echo $transaction['currency']; ?></td>
			<td><?php echo $transaction['amount_paid']; ?></td>
			<td><?php echo $transaction['created']; ?></td>
			<td><?php echo $transaction['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'transactions', 'action' => 'view', $transaction['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'transactions', 'action' => 'edit', $transaction['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'transactions', 'action' => 'delete', $transaction['id']), null, __('Are you sure you want to delete # %s?', $transaction['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
