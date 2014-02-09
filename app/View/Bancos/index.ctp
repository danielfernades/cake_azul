<div class="bancos index">
    <h2><?php echo __('Bancos'); ?></h2>
    <table cellpadding="0" cellspacing="0">
        <tr>
            <th><?php echo $this->Paginator->sort('id'); ?></th>
            <th><?php echo $this->Paginator->sort('codigo'); ?></th>
            <th><?php echo $this->Paginator->sort('nome'); ?></th>
            <th class="actions"><?php // echo __('Actions');  ?></th>
        </tr>
        <?php foreach ($bancos as $banco): ?>
            <tr>
                <td><?php echo h($banco['Banco']['id']); ?>&nbsp;</td>
                <td><?php echo h($banco['Banco']['codigo']); ?>&nbsp;</td>
                <td><?php echo h($banco['Banco']['nome']); ?>&nbsp;</td>
                <td class="actions">
                    <?php echo $this->Html->link(__('Detalhar'), array('action' => 'view', $banco['Banco']['id'])); ?>
                    <?php echo $this->Html->link(__('Editar'), array('action' => 'edit', $banco['Banco']['id'])); ?>
                    <?php echo $this->Form->postLink(__('Deletar'), array('action' => 'delete', $banco['Banco']['id']), null, __('Deseja realmente remover o banco #%s?', $banco['Banco']['nome'])); ?>
                </td>
            </tr>
        <?php endforeach; ?>
    </table>
    <p>
        <?php
        echo $this->Paginator->counter(array(
            'format' => __('Página {:page} de {:pages}, exibindo {:current} registros, de um total de {:count}')
        ));
        ?>	</p>
    <div class="paging">
        <?php
        echo $this->Paginator->prev('< ' . __('anterioa'), array(), null, array('class' => 'prev disabled'));
        echo $this->Paginator->numbers(array('separator' => ''));
        echo $this->Paginator->next(__('próximo') . ' >', array(), null, array('class' => 'next disabled'));
        ?>
    </div>
</div>
<div class="actions">
    <h3><?php // echo __('Actions'); ?></h3>
    <ul>
        <li><?php echo $this->Html->link(__('Cadastrar Banco'), array('action' => 'add')); ?></li>
    </ul>
</div>