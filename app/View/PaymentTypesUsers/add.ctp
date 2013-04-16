<div class="paymentTypesUsers form">
<?php echo $this->Form->create('PaymentTypesUser'); ?>
	<fieldset>
		<legend><?php echo __('Add Payment Types User'); ?></legend>
	<?php
		echo $this->Form->input('payment_type_id');
		echo $this->Form->input('user_id');
		echo $this->Form->input('details');
		echo $this->Form->input('default');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Payment Types Users'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Payment Types'), array('controller' => 'payment_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type'), array('controller' => 'payment_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
