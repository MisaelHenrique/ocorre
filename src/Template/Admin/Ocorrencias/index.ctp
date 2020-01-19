<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Ocorrencias</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Cadastrar'), ['controller' => 'Ocorrencias', 'action' => 'add'], ['class'=>'btn btn-outline-success btn-sm']);?>
    </div>
</div>

<?= $this->Flash->render() ?>
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>ID</th>
                <th>Nome Aluno</th>
                <th class="d-none d-sm-table-cell">Data</th>
                <th>Gravidade</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ocorrencias as $ocorrencia): ?>
            <tr>
                <td><?= $this->Number->format($ocorrencia->id) ?></td>
                <td>
                    <?= $ocorrencia->has('aluno') ? $this->Html->link($ocorrencia->aluno->name, ['controller' => 'Alunos', 'action' => 'view', $ocorrencia->aluno->id]) : '' ?>
                </td>
                <td class="d-none d-sm-table-cell"><?= h($ocorrencia->data) ?></td>
                <td >
                    <?= $ocorrencia->has('gravidade') ? $this->Html->link($ocorrencia->gravidade->gravidade, ['controller' => 'Gravidades', 'action' => 'view', $ocorrencia->gravidade->id]) : '' ?>
                </td>
                <td>
                    <span class="d-none d-md-block">
                        <?= $this->Html->link(__('Visualizar'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencia->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>

                        <?= $this->Html->link(__('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencia->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>

                        <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class' =>'btn btn-outline-danger btn-sm', 'confirm' => __('Realmente deseja apagar o usuário # {0}?', $ocorrencia->id)]) ?>
                    </span>

                    <div class="dropdown d-block d-md-none">
                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ações
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                            <?= $this->Html->link(__('Visualizar'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencia->id], ['class' => 'dropdown-item']) ?>

                            <?= $this->Html->link(__('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencia->id], ['class' => 'dropdown-item']) ?>

                            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class' =>'dropdown-item', 'confirm' => __('Relamente deseja apagar o usuário # {0}?', $ocorrencia->id)]) ?>
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
 * @var \App\Model\Entity\Ocorrencia[]|\Cake\Collection\CollectionInterface $ocorrencias
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Alunos'), ['controller' => 'Alunos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Alunos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Ocorrencias'), ['controller' => 'TipoOcorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Ocorrencia'), ['controller' => 'TipoOcorrencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Gravidades'), ['controller' => 'Gravidades', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Gravidade'), ['controller' => 'Gravidades', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Turnos'), ['controller' => 'Turnos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Turno'), ['controller' => 'Turnos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Medidas'), ['controller' => 'Medidas', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Medida'), ['controller' => 'Medidas', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="ocorrencias index large-9 medium-8 columns content">
    <h3><?= __('Ocorrencias') ?></h3>
    <table cellpadding="0" cellspacing="0">
        <thead>
            <tr>
                <th scope="col"><?= $this->Paginator->sort('id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('data') ?></th>
                <th scope="col"><?= $this->Paginator->sort('created') ?></th>
                <th scope="col"><?= $this->Paginator->sort('aluno_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('user_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('tipo_ocorrencia_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('gravidade_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('turno_id') ?></th>
                <th scope="col"><?= $this->Paginator->sort('medida_id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($ocorrencias as $ocorrencia): ?>
            <tr>
                <td><?= $this->Number->format($ocorrencia->id) ?></td>
                <td><?= h($ocorrencia->data) ?></td>
                <td><?= h($ocorrencia->created) ?></td>
                <td><?= $ocorrencia->has('aluno') ? $this->Html->link($ocorrencia->aluno->name, ['controller' => 'Alunos', 'action' => 'view', $ocorrencia->aluno->id]) : '' ?></td>
                <td><?= $ocorrencia->has('user') ? $this->Html->link($ocorrencia->user->name, ['controller' => 'Users', 'action' => 'view', $ocorrencia->user->id]) : '' ?></td>
                <td><?= $ocorrencia->has('tipo_ocorrencia') ? $this->Html->link($ocorrencia->tipo_ocorrencia->id, ['controller' => 'TipoOcorrencias', 'action' => 'view', $ocorrencia->tipo_ocorrencia->id]) : '' ?></td>
                <td><?= $ocorrencia->has('gravidade') ? $this->Html->link($ocorrencia->gravidade->id, ['controller' => 'Gravidades', 'action' => 'view', $ocorrencia->gravidade->id]) : '' ?></td>
                <td><?= $ocorrencia->has('turno') ? $this->Html->link($ocorrencia->turno->id, ['controller' => 'Turnos', 'action' => 'view', $ocorrencia->turno->id]) : '' ?></td>
                <td><?= $ocorrencia->has('medida') ? $this->Html->link($ocorrencia->medida->id, ['controller' => 'Medidas', 'action' => 'view', $ocorrencia->medida->id]) : '' ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['action' => 'view', $ocorrencia->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['action' => 'edit', $ocorrencia->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $ocorrencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id)]) ?>
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
