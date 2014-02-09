<div class="bancos view">
    <h2><?php echo __('Banco'); ?></h2>
    <dl>
        <dt><?php echo __('Id'); ?></dt>
        <dd>
            <?php echo h($banco['Banco']['id']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Código'); ?></dt>
        <dd>
            <?php echo h($banco['Banco']['codigo']); ?>
            &nbsp;
        </dd>
        <dt><?php echo __('Nome'); ?></dt>
        <dd>
            <?php echo h($banco['Banco']['nome']); ?>
            &nbsp;
        </dd>
    </dl>
</div>
<div class="actions">
    <h3><?php // echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Editar Banco'), array('action' => 'edit', $banco['Banco']['id'])); ?> </li>
        <li><?php echo $this->Form->postLink(__('Apagar Banco'), array('action' => 'delete', $banco['Banco']['id']), null, __('Deseja realmente remover o banco # %s?', $banco['Banco']['nome'])); ?> </li>
        <li><?php echo $this->Html->link(__('Listar Bancos'), array('action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Cadastrar Banco'), array('action' => 'add')); ?> </li>
    </ul>
</div>
