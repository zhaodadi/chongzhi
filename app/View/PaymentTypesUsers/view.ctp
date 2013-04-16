<div class="paymentTypesUsers view">
<h2><?php  echo __('Payment Types User'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($paymentTypesUser['PaymentTypesUser']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Payment Type'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paymentTypesUser['PaymentType']['name'], array('controller' => 'payment_types', 'action' => 'view', $paymentTypesUser['PaymentType']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('User'); ?></dt>
		<dd>
			<?php echo $this->Html->link($paymentTypesUser['User']['id'], array('controller' => 'users', 'action' => 'view', $paymentTypesUser['User']['id'])); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Details'); ?></dt>
		<dd>
			<?php echo h($paymentTypesUser['PaymentTypesUser']['details']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Default'); ?></dt>
		<dd>
			<?php echo h($paymentTypesUser['PaymentTypesUser']['default']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Created'); ?></dt>
		<dd>
			<?php echo h($paymentTypesUser['PaymentTypesUser']['created']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Modified'); ?></dt>
		<dd>
			<?php echo h($paymentTypesUser['PaymentTypesUser']['modified']); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Payment Types User'), array('action' => 'edit', $paymentTypesUser['PaymentTypesUser']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Payment Types User'), array('action' => 'delete', $paymentTypesUser['PaymentTypesUser']['id']), null, __('Are you sure you want to delete # %s?', $paymentTypesUser['PaymentTypesUser']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types Users'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Types User'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Payment Types'), array('controller' => 'payment_types', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Payment Type'), array('controller' => 'payment_types', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users'), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User'), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>
