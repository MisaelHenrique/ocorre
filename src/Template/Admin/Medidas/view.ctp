<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Medidas</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Medidas', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm'])?>
            <?= $this->Html->link(_('Editar'), ['controller' => 'Medidas', 'action' => 'edit', $medida->id], ['class'=>'btn btn-outline-warning btn-sm'])?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Medidas', 'action' => 'delete', $medida->id], ['class'=>'btn btn-outline-danger btn-sm','confirm' => __('Deseja realmente apagar o usuário # {0}?', $medida->id)]) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Alunos', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Editar'), ['controller' => 'Alunos', 'action' => 'edit', $medida->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Alunos', 'action' => 'delete', $medida->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar o usuário # {0}?', $medida->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<dl class="row">
<dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($medida->id) ?></dd>

    <dt class="col-sm-3">Medida</dt>
    <dd class="col-sm-9"><?= h($medida->medida) ?></dd>
    <dt class="col-sm-3">Descrição</dt>
    <dd class="col-sm-9"><?= h($medida->descricao) ?></dd>

</dl>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Medida $medida
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Medida'), ['action' => 'edit', $medida->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Medida'), ['action' => 'delete', $medida->id], ['confirm' => __('Are you sure you want to delete # {0}?', $medida->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Medidas'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medida'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="medidas view large-9 medium-8 columns content">
    <h3><?= h($medida->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Medida') ?></th>
            <td><?= h($medida->medida) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($medida->id) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($medida->descricao)); ?>
    </div>
    <div class="related">
        <h4><?= __('Related Ocorrencias') ?></h4>
        <?php if (!empty($medida->ocorrencias)): ?>
        <table cellpadding="0" cellspacing="0">
            <tr>
                <th scope="col"><?= __('Id') ?></th>
                <th scope="col"><?= __('Descricao') ?></th>
                <th scope="col"><?= __('Data') ?></th>
                <th scope="col"><?= __('Created') ?></th>
                <th scope="col"><?= __('Aluno Id') ?></th>
                <th scope="col"><?= __('Servidore Id') ?></th>
                <th scope="col"><?= __('Tipo Ocorrencia Id') ?></th>
                <th scope="col"><?= __('Gravidade Id') ?></th>
                <th scope="col"><?= __('Turno Id') ?></th>
                <th scope="col"><?= __('Medida Id') ?></th>
                <th scope="col" class="actions"><?= __('Actions') ?></th>
            </tr>
            <?php foreach ($medida->ocorrencias as $ocorrencias): ?>
            <tr>
                <td><?= h($ocorrencias->id) ?></td>
                <td><?= h($ocorrencias->descricao) ?></td>
                <td><?= h($ocorrencias->data) ?></td>
                <td><?= h($ocorrencias->created) ?></td>
                <td><?= h($ocorrencias->aluno_id) ?></td>
                <td><?= h($ocorrencias->servidore_id) ?></td>
                <td><?= h($ocorrencias->tipo_ocorrencia_id) ?></td>
                <td><?= h($ocorrencias->gravidade_id) ?></td>
                <td><?= h($ocorrencias->turno_id) ?></td>
                <td><?= h($ocorrencias->medida_id) ?></td>
                <td class="actions">
                    <?= $this->Html->link(__('View'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencias->id]) ?>
                    <?= $this->Html->link(__('Edit'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencias->id]) ?>
                    <?= $this->Form->postLink(__('Delete'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencias->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencias->id)]) ?>
                </td>
            </tr>
            <?php endforeach; ?>
        </table>
        <?php endif; ?>
    </div>
</div>
