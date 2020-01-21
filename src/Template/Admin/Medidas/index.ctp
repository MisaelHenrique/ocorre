<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Medidas</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Cadastrar'), ['controller' => 'Medidas', 'action' => 'add'], ['class'=>'btn btn-outline-success btn-sm']);?>
    </div>
</div>

<?= $this->Flash->render() ?>
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Medidas</th>
                <th class="d-none d-sm-table-cell">Descrição</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medidas as $medida): ?>
            <tr>
                <td><?= $this->Number->format($medida->id) ?></td>
                <td><?= h($medida->medida) ?></td>
                <td class="d-none d-sm-table-cell">
                    <?= h($medida->descricao) ?>
                </td>
                <td>
                    <span class="d-none d-md-block">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Medidas', 'action' => 'view', $medida->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>

                        <?= $this->Html->link(__('Editar'), ['controller' => 'Medidas', 'action' => 'edit', $medida->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>

                        <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Medidas', 'action' => 'delete', $medida->id], ['class' =>'btn btn-outline-danger btn-sm', 'confirm' => __('Realmente deseja apagar a medida # {0}?', $medida->id)]) ?>
                    </span>

                    <div class="dropdown d-block d-md-none">
                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ações
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                        <?= $this->Html->link(__('Visualizar'), ['controller' => 'Medidas', 'action' => 'view', $medida->id], ['class' => 'dropdown-item']) ?>

                            <?= $this->Html->link(__('Editar'), ['controller' => 'Medidas', 'action' => 'edit', $medida->id], ['class' => 'dropdown-item']) ?>

                            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Medidas', 'action' => 'delete', $medida->id], ['class' =>'dropdown-item', 'confirm' => __('Relamente deseja apagar a medida # {0}?', $medida->id)]) ?>
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
 * @var \App\Model\Entity\Medida[]|\Cake\Collection\CollectionInterface $medidas
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Medida'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medidas index large-9 medium-8 columns content">
    <h3><?= __('Medidas') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medida') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medidas as $medida): ?>
            <tr>
                <td><?= $this->Number->format($medida->id) ?></td>
                <td><?= h($medida->medida) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $medida->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $medida->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $medida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medida->id)]) ?>
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
