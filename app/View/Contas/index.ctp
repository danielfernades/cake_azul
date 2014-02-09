<div class="contas index">
    <h2><?php echo __('Contas'); ?></h2>
    <table cellpadding="0" cellspacing="0"  style="font-size: 11px;">
        <tr>
            <th><?php echo $this->Paginator->sort('Conta'); ?></th>
            <th><?php echo $this->Paginator->sort('agencia'); ?></th>
            <th><?php echo $this->Paginator->sort('saldo_atual'); ?></th>
            <th><?php echo $this->Paginator->sort('saldo_inicial'); ?></th>
            <th><?php echo $this->Paginator->sort('tipo'); ?></th>
            <th><?php echo $this->Paginator->sort('titular'); ?></th>
            <th><?php echo $this->Paginator->sort('banco_id'); ?></th>
            <th class="actions"><?php // echo __('Actions');  ?></th>
        </tr>
        <?php foreach ($contas as $conta): ?>
            <tr>
                <td>
                    <?php echo h($conta['Conta']['numero']) . "-" . h($conta['Conta']['digito']); ?>&nbsp;
                </td>

                <td><?php echo h($conta['Conta']['agencia']); ?>&nbsp;</td>
                <td><?php echo h($conta['Conta']['saldo_atual']); ?>&nbsp;</td>
                <td><?php echo h($conta['Conta']['saldo_inicial']); ?>&nbsp;</td>
                <td><?php echo h($conta['Conta']['tipo']); ?>&nbsp;</td>
                <td><?php echo h($conta['Conta']['titular']); ?>&nbsp;</td>
                <td>
                    <?php echo $this->Html->link($conta['Banco']['nome'], array('controller' => 'bancos', 'action' => 'view', $conta['Banco']['id'])); ?>
                </td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Detalhar'), array('action' => 'view', $conta['Conta']['id'])); ?>
                    <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $conta['Conta']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $conta['Conta']['id']), null, __('Deseja remover a conta # %s?', $conta['Conta']['id'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Página {:page} de {:pages}')
        ));
        ?>	</p>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('anterior'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('próximo') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <ul>
        <li><?php echo $this->Html->link(__('Nova Conta'), array('action' => 'add')); ?></li>
        <li><?php echo $this->Html->link(__('Listar Bancos'), array('controller' => 'bancos', 'action' => 'index')); ?> </li>
        <li><?php echo $this->Html->link(__('Novo Banco'), array('controller' => 'bancos', 'action' => 'add')); ?> </li>
    </ul>
</div>
