<div class="paymentTypes view">
<h2><?php  echo __('Payment Type'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Name'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Alter Name'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['alter_name']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($paymentType['PaymentType']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Type'), array('action' => 'edit', $paymentType['PaymentType']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment Type'), array('action' => 'delete', $paymentType['PaymentType']['id']), null, __('Are you sure you want to delete # %s?', $paymentType['PaymentType']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php echo __('Related Transactions'); ?></h3>
	<?php if (!empty($paymentType['Transaction'])): ?>
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
		foreach ($paymentType['Transaction'] as $transaction): ?>
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
<div class="related">
	<h3><?php echo __('Related Users'); ?></h3>
	<?php if (!empty($paymentType['User'])): ?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php echo __('Id'); ?></th>
		<th><?php echo __('Username'); ?></th>
		<th><?php echo __('Password'); ?></th>
		<th><?php echo __('Role'); ?></th>
		<th><?php echo __('Email'); ?></th>
		<th><?php echo __('Chinese Name'); ?></th>
		<th><?php echo __('English Name'); ?></th>
		<th><?php echo __('Nick Name'); ?></th>
		<th><?php echo __('Phone Number'); ?></th>
		<th><?php echo __('Current Country'); ?></th>
		<th><?php echo __('Created'); ?></th>
		<th><?php echo __('Modified'); ?></th>
		<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($paymentType['User'] as $user): ?>
		<tr>
			<td><?php echo $user['id']; ?></td>
			<td><?php echo $user['username']; ?></td>
			<td><?php echo $user['password']; ?></td>
			<td><?php echo $user['role']; ?></td>
			<td><?php echo $user['email']; ?></td>
			<td><?php echo $user['chinese_name']; ?></td>
			<td><?php echo $user['english_name']; ?></td>
			<td><?php echo $user['nick_name']; ?></td>
			<td><?php echo $user['phone_number']; ?></td>
			<td><?php echo $user['current_country']; ?></td>
			<td><?php echo $user['created']; ?></td>
			<td><?php echo $user['modified']; ?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View'), array('controller' => 'users', 'action' => 'view', $user['id'])); ?>
				<?php echo $this->Html->link(__('Edit'), array('controller' => 'users', 'action' => 'edit', $user['id'])); ?>
				<?php echo $this->Form->postLink(__('Delete'), array('controller' => 'users', 'action' => 'delete', $user['id']), null, __('Are you sure you want to delete # %s?', $user['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		</ul>
	</div>
</div>
