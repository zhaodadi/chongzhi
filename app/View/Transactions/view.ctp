<div class="transactions view">
<h2><?php  echo __('Transaction'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['User']['id'], array('controller' => 'users', 'action' => 'view', $transaction['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['PaymentType']['name'], array('controller' => 'payment_types', 'action' => 'view', $transaction['PaymentType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Accounts User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($transaction['AccountsUser']['id'], array('controller' => 'accounts_users', 'action' => 'view', $transaction['AccountsUser']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount Rmb'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['amount_rmb']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount Need'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['amount_need']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Currency'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['currency']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Amount Paid'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['amount_paid']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($transaction['Transaction']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Transaction'), array('action' => 'edit', $transaction['Transaction']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Transaction'), array('action' => 'delete', $transaction['Transaction']['id']), null, __('Are you sure you want to delete # %s?', $transaction['Transaction']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types'), array('controller' => 'payment_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type'), array('controller' => 'payment_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts Users'), array('controller' => 'accounts_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounts User'), array('controller' => 'accounts_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
