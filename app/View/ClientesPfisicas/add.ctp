<div class="clientesPfisicas form">
    <?php echo $this->Form->create('ClientesPfisica'); ?>
    <fieldset>
        <legend><?php echo __('Cadastrar Cliente - Pessoa Física'); ?></legend>
        <?php
        
        echo $this->Form->input('nascimento', array(
           'type' => 'text',
            'id' => 'nascimento'
        ));
        
        echo $this->Form->input('cpf', array(
            'id' => 'cpf',
            'label' => 'CPF'
        ));
        echo $this->Form->input('nome');
        echo $this->Form->input('tipo_logradouro', array(
            'label' => 'Tipo de logradouro',
            'placeholder' => 'rua, avenida, rodovia, etc...'
        ));
        echo $this->Form->input('logradouro');
        echo $this->Form->input('numero');
        echo $this->Form->input('complemento');
        echo $this->Form->input('estado');
        echo $this->Form->input('cidade');
        echo $this->Form->input('cep');
        echo $this->Form->input('telefone_fixo', array(
            'id' => 'tel_fixo'
        ));
        echo $this->Form->input('telefone_movel', array(
            'id' => 'tel_movel'
        ));
        echo $this->Form->input('bairro');
        ?>
    </fieldset>
    <?php echo $this->Form->end(__('Salvar')); ?>
</div>

<div class="actions">
    <ul>
        <li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?></li>
    </ul>
</div>

<script type="text/javascript">
    $(function() {
        
        $('#nascimento').datepicker({
            dateFormat: 'yy-mm-dd'
        });
        
        $('#cpf').focus();
        $('#cpf').mask('999.999.999-99');
        $('#tel_movel').mask('(99)9999-9999');
        $('#tel_fixo').mask('(99)9999-9999');
        
        $('input:text').keyup(function(){
            $(this).val($(this).val().toUpperCase());
        });
        
    });
</script>