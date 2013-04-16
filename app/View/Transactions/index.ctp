<div class="transactions index">
	<h2><?php echo __('Transactions'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('payment_type_id'); ?></th>
			<th><?php echo $this->Paginator->sort('accounts_user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('amount_rmb'); ?></th>
			<th><?php echo $this->Paginator->sort('amount_need'); ?></th>
			<th><?php echo $this->Paginator->sort('currency'); ?></th>
			<th><?php echo $this->Paginator->sort('amount_paid'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($transactions as $transaction): ?>
	<tr>
		<td><?php echo h($transaction['Transaction']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($transaction['User']['id'], array('controller' => 'users', 'action' => 'view', $transaction['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transaction['PaymentType']['name'], array('controller' => 'payment_types', 'action' => 'view', $transaction['PaymentType']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($transaction['AccountsUser']['id'], array('controller' => 'accounts_users', 'action' => 'view', $transaction['AccountsUser']['id'])); ?>
		</td>
		<td><?php echo h($transaction['Transaction']['amount_rmb']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['amount_need']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['currency']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['amount_paid']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['created']); ?>&nbsp;</td>
		<td><?php echo h($transaction['Transaction']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $transaction['Transaction']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $transaction['Transaction']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $transaction['Transaction']['id']), null, __('Are you sure you want to delete # %s?', $transaction['Transaction']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page {:page} of {:pages}, showing {:current} records out of {:count} total, starting on record {:start}, ending on {:end}')
	));
	?>	</p>
	<div class="paging">
	<?php
		echo $this->Paginator->prev('< ' . __('previous'), array(), null, array('class' => 'prev disabled'));
		echo $this->Paginator->numbers(array('separator' => ''));
		echo $this->Paginator->next(__('next') . ' >', array(), null, array('class' => 'next disabled'));
	?>
	</div>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Transaction'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types'), array('controller' => 'payment_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type'), array('controller' => 'payment_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts Users'), array('controller' => 'accounts_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounts User'), array('controller' => 'accounts_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
