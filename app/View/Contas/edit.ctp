<div class="contasbancarias form">
<?php echo $this->Form->create('Conta'); ?>
	<fieldset>
		<legend><?php echo __('Edit Conta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('agencia');
		echo $this->Form->input('descricao');
		echo $this->Form->input('numero');
		echo $this->Form->input('digito');
		echo $this->Form->input('saldo_atual', array(
                    'disabled' => 'disabled',
                    'id' => 'saldo_atual'
                ));
		echo $this->Form->input('saldo_inicial', array(
                    'disabled' => 'disabled',
                    'id' => 'saldo_inicial'
                ));
		echo $this->Form->input('tipo');
		echo $this->Form->input('titular');
		echo $this->Form->input('banco_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit')); ?>
</div>
<div class="actions">
	<h3><?php echo __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Form->postLink(__('Delete'), array('action' => 'delete', $this->Form->value('Conta.id')), null, __('Are you sure you want to delete # %s?', $this->Form->value('Conta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Contasbancarias'), array('action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('List Bancos'), array('controller' => 'bancos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Banco'), array('controller' => 'bancos', 'action' => 'add')); ?> </li>
	</ul>
</div>

<script>
    $(function() {
        $('input:text').keyup(function() {
            $(this).val($(this).val().toUpperCase());
        });
        
        $('#saldo_inicial').maskMoney({
            symbol:'R$ ',
            showSymbol:true,
            thousands: '.',
            decimal: ',',
            symbolStay: true
        });
        
        $('#saldo_atual').maskMoney({
            symbol:'R$ ',
            showSymbol:true,
            thousands: '.',
            decimal: ',',
            symbolStay: true
        });
    });
</script>