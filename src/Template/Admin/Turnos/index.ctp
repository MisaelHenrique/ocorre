<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Turnos</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Cadastrar'), ['controller' => 'Turnos', 'action' => 'add'], ['class'=>'btn btn-outline-success btn-sm']);?>
    </div>
</div>

<?= $this->Flash->render() ?>
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Turno</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turnos as $turno): ?>
            <tr>
                <td><?= $this->Number->format($turno->id) ?></td>
                <td><?= h($turno->turno) ?></td>
            </td>
                <td>
                    <span class="d-none d-md-block">
                        <!--<?= $this->Html->link(__('Visualizar'), ['controller' => 'Turnos', 'action' => 'view', $turno->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>-->

                        <?= $this->Html->link(__('Editar'), ['controller' => 'Turnos', 'action' => 'edit', $turno->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>

                        <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Turnos', 'action' => 'delete', $turno->id], ['class' =>'btn btn-outline-danger btn-sm', 'confirm' => __('Realmente deseja apagar o usuário # {0}?', $turno->id)]) ?>
                    </span>

                    <div class="dropdown d-block d-md-none">
                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ações
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                            <!--<?= $this->Html->link(__('Visualizar'), ['controller' => 'Turnos', 'action' => 'view', $turno->id], ['class' => 'dropdown-item']) ?>-->

                            <?= $this->Html->link(__('Editar'), ['controller' => 'Turnos', 'action' => 'edit', $turno->id], ['class' => 'dropdown-item']) ?>

                            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Turnos', 'action' => 'delete', $turno->id], ['class' =>'dropdown-item', 'confirm' => __('Relamente deseja apagar o usuário # {0}?', $turno->id)]) ?>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->element('pagination'); ?>
</div>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turno[]|\Cake\Collection\CollectionInterface $turnos
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Turno'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="turnos index large-9 medium-8 columns content">
    <h3><?= __('Turnos') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('turno') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($turnos as $turno): ?>
            <tr>
                <td><?= $this->Number->format($turno->id) ?></td>
                <td><?= h($turno->turno) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $turno->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $turno->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $turno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $turno->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(['format' => __('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')]) ?></p>
    </div>
</div>
