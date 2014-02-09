<div class="clientesPfisicas index">
    <h2><?php echo __('Clientes - Pessoas Físicas'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('CPF'); ?></th>
            <th><?php echo $this->Paginator->sort('nome'); ?></th>
            <th><?php echo $this->Paginator->sort('cidade'); ?></th>
            <th><?php echo $this->Paginator->sort('telefone_fixo'); ?></th>
            <th class="actions"></th>
        </tr>
        <?php foreach ($clientesPfisicas as $clientesPfisica): ?>
            <tr>                
                <td><?php echo h($clientesPfisica['ClientesPfisica']['cpf']); ?>&nbsp;</td>
                <td><?php echo h($clientesPfisica['ClientesPfisica']['nome']); ?>&nbsp;</td>
                <td><?php echo h($clientesPfisica['ClientesPfisica']['cidade']); ?>&nbsp;</td>
                <td><?php echo h($clientesPfisica['ClientesPfisica']['telefone_fixo']); ?>&nbsp;</td>
                <td class="actions">
                    <?php
                    echo $this->Html->link(__('Detalhar'), array(
                        'controller' => 'ClientesPfisicas',
                        'action' => 'view',
                        'id' => $clientesPfisica['ClientesPfisica']['id']
                    ));
                    ?>

                    <?php
                    echo $this->Html->link(__('Editar'), array(
                        'controller' => 'ClientesPfisicas',
                        'action' => 'edit',
                        'id' => $clientesPfisica['ClientesPfisica']['id']
                    ));
                    ?>

    <?php echo $this->Form->postLink(__('Apagar'), array('action' => 'delete', $clientesPfisica['ClientesPfisica']['id']), null, __('Deseja realmente remover o cliente # %s?', $clientesPfisica['ClientesPfisica']['nome'])); ?>
                </td>
            </tr>
<?php endforeach; ?>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Página {:page} de {:pages}, exibindo {:current} registros de um total de {:count}')
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
        <li><?php echo $this->Html->link(__('Novo Cliente'), array('action' => 'add')); ?></li>
    </ul>
</div>
