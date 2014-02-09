<div class="bancos form">
    <?php echo $this->Form->create('Banco'); ?>
    <fieldset>
        <legend><?php echo __('Editar Banco'); ?></legend>
        <?php
        echo $this->Form->input('id');
        echo $this->Form->input('codigo');
        echo $this->Form->input('nome');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
    <h3><?php // echo __('Actions'); ?></h3>
    <ul>

        <li><?php echo $this->Form->postLink(__('Apagar Banco'), array('action' => 'delete', $this->Form->value('Banco.id')), null, __('Deseja realmente remover o banco # %s?', $this->Form->value('Banco.nome'))); ?></li>
        <li><?php echo $this->Html->link(__('Listar Bancos'), array('action' => 'index')); ?></li>
    </ul>
</div>

<script>
    $(function() {
        $('input:text').keyup(function() {
            $(this).val($(this).val().toUpperCase());
        });
    });
</script>