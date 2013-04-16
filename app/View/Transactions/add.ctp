<div class="transactions form">
<?php echo $this->Form->create('Transaction'); ?>
	<fieldset>
		<legend><?php echo __('Add Transaction'); ?></legend>
	<?php
		echo $this->Form->input('user_id');
		echo $this->Form->input('payment_type_id');
		echo $this->Form->input('accounts_user_id');
		echo $this->Form->input('amount_rmb');
		echo $this->Form->input('amount_need');
		echo $this->Form->input('currency');
		echo $this->Form->input('amount_paid');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Transactions'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types'), array('controller' => 'payment_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type'), array('controller' => 'payment_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Accounts Users'), array('controller' => 'accounts_users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Accounts User'), array('controller' => 'accounts_users', 'action' => 'add')); ?> </li>
	</ul>
</div>
