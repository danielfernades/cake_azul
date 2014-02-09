<div class="clientesPfisicas view">
    <h2><?php echo h($clientesPfisica['ClientesPfisica']['nome']); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nome'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['nome']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Created'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['created']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Tipo Logradouro'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['tipo_logradouro']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Logradouro'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['logradouro']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Numero'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['numero']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Complemento'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['complemento']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Estado'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['estado']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cidade'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['cidade']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cep'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['cep']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Telefone Fixo'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['telefone_fixo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Telefone Movel'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['telefone_movel']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Cpf'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['cpf']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Bairro'); ?></dt>
        <dd>
            <?php echo h($clientesPfisica['ClientesPfisica']['bairro']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <ul>
        <li>
            <?php
            echo $this->Html->link(__('Editar Cliente'), array(
                'controller' => 'ClientesPfisicas',
                'action' => 'edit',
                'id' => $clientesPfisica['ClientesPfisica']['id']
            ));
            ?>
        </li>
        <li><?php echo $this->Form->postLink(__('Apagar Cliente'), array('action' => 'delete', $clientesPfisica['ClientesPfisica']['id']), null, __('Dseja realmente remover o cliente # %s?', $clientesPfisica['ClientesPfisica']['nome'])); ?> </li>
        <li><?php echo $this->Html->link(__('Listar Clientes'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?> </li>
    </ul>
</div>
