<div class="accountsUsers index">
	<h2><?php echo __('Accounts Users'); ?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id'); ?></th>
			<th><?php echo $this->Paginator->sort('user_id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_id'); ?></th>
			<th><?php echo $this->Paginator->sort('account_name'); ?></th>
			<th><?php echo $this->Paginator->sort('account_password'); ?></th>
			<th><?php echo $this->Paginator->sort('default'); ?></th>
			<th><?php echo $this->Paginator->sort('created'); ?></th>
			<th><?php echo $this->Paginator->sort('modified'); ?></th>
			<th class="actions"><?php echo __('Actions'); ?></th>
	</tr>
	<?php foreach ($accountsUsers as $accountsUser): ?>
	<tr>
		<td><?php echo h($accountsUser['AccountsUser']['id']); ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($accountsUser['User']['id'], array('controller' => 'users', 'action' => 'view', $accountsUser['User']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($accountsUser['Account']['name'], array('controller' => 'accounts', 'action' => 'view', $accountsUser['Account']['id'])); ?>
		</td>
		<td><?php echo h($accountsUser['AccountsUser']['account_name']); ?>&nbsp;</td>
		<td><?php echo h($accountsUser['AccountsUser']['account_password']); ?>&nbsp;</td>
		<td><?php echo h($accountsUser['AccountsUser']['default']); ?>&nbsp;</td>
		<td><?php echo h($accountsUser['AccountsUser']['created']); ?>&nbsp;</td>
		<td><?php echo h($accountsUser['AccountsUser']['modified']); ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View'), array('action' => 'view', $accountsUser['AccountsUser']['id'])); ?>
			<?php echo $this->Html->link(__('Edit'), array('action' => 'edit', $accountsUser['AccountsUser']['id'])); ?>
			<?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $accountsUser['AccountsUser']['id']), null, __('Are you sure you want to delete # %s?', $accountsUser['AccountsUser']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Accounts User'), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts'), array('controller' => 'accounts', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Account'), array('controller' => 'accounts', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Transactions'), array('controller' => 'transactions', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Transaction'), array('controller' => 'transactions', 'action' => 'add')); ?> </li>
	</ul>
</div>
