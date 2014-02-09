<div class="contasbancarias view">
<h2><?php echo __('Contabancaria'); ?></h2>
	<dl>
		<dt><?php echo __('Id'); ?></dt>
		<dd>
			<?php echo h($contabancaria['Contabancaria']['id']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Agencia'); ?></dt>
		<dd>
			<?php echo h($contabancaria['Contabancaria']['agencia']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Descricao'); ?></dt>
		<dd>
			<?php echo h($contabancaria['Contabancaria']['descricao']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Numero'); ?></dt>
		<dd>
			<?php echo h($contabancaria['Contabancaria']['numero']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Digito'); ?></dt>
		<dd>
			<?php echo h($contabancaria['Contabancaria']['digito']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saldo Atual'); ?></dt>
		<dd>
			<?php echo h($contabancaria['Contabancaria']['saldo_atual']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Saldo Inicial'); ?></dt>
		<dd>
			<?php echo h($contabancaria['Contabancaria']['saldo_inicial']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Tipo'); ?></dt>
		<dd>
			<?php echo h($contabancaria['Contabancaria']['tipo']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Titular'); ?></dt>
		<dd>
			<?php echo h($contabancaria['Contabancaria']['titular']); ?>
			&nbsp;
		</dd>
		<dt><?php echo __('Banco'); ?></dt>
		<dd>
			<?php echo $this->Html->link($contabancaria['Banco']['id'], array('controller' => 'bancos', 'action' => 'view', $contabancaria['Banco']['id'])); ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Contabancaria'), array('action' => 'edit', $contabancaria['Contabancaria']['id'])); ?> </li>
		<li><?php echo $this->Form->postLink(__('Delete Contabancaria'), array('action' => 'delete', $contabancaria['Contabancaria']['id']), null, __('Are you sure you want to delete # %s?', $contabancaria['Contabancaria']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Contasbancarias'), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Contabancaria'), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Bancos'), array('controller' => 'bancos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banco'), array('controller' => 'bancos', 'action' => 'add')); ?> </li>
	</ul>
</div>
