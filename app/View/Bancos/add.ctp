<div class="bancos form">
    <?php echo $this->Form->create('Banco'); ?>
    <fieldset>
        <legend><?php echo __('Cadastrar Banco'); ?></legend>
        <?php
        echo $this->Form->input('codigo', array(
            'label' => 'Código'
        ));
        echo $this->Form->input('nome', array(
            'label' => 'Nome'
        ));
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Salvar')); ?>
</div>
<div class="actions">
    <h3><?php // echo __('Actions'); ?></h3>
    <ul>

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