<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Ocorrencia</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm'])?>
            <?= $this->Html->link(_('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencia->id], ['class'=>'btn btn-outline-warning btn-sm'])?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class'=>'btn btn-outline-danger btn-sm','confirm' => __('Deseja realmente apagar o usuário # {0}?', $ocorrencia->id)]) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencia->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar o usuário # {0}?', $ocorrencia->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<dl class="row">
    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($ocorrencia->id) ?></dd>

    <dt class="col-sm-3">Nome do aluno</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->aluno->nome) ?></dd>

    <dt class="col-sm-3">Curso</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->aluno->curso) ?></dd>

    <dt class="col-sm-3">Tipo Ocorrencia </dt>
    <dd class="col-sm-9"><?= h($ocorrencia->tipo_ocorrencia->tipo_ocorrencia) ?></dd>

    <dt class="col-sm-3">Gravidade</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->gravidade->gravidade) ?></dd>

    <dt class="col-sm-3">Turno Ocorrido</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->turno->turno) ?></dd>

    <dt class="col-sm-3">Medida aplicada</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->medida->medida) ?></dd>
    
    <dt class="col-sm-3 text-truncate">Data do ocorrido</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->data) ?></dd>

    <dt class="col-sm-3 text-truncate">Data do cadastro</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->created) ?></dd>

    <dt class="col-sm-3">Descrição</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->descricao) ?></dd>

</dl>

<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia $ocorrencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Ocorrencia'), ['action' => 'edit', $ocorrencia->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Ocorrencia'), ['action' => 'delete', $ocorrencia->id], ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Alunos'), ['controller' => 'Alunos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Aluno'), ['controller' => 'Alunos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Users'), ['controller' => 'Users', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New User'), ['controller' => 'Users', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Tipo Ocorrencias'), ['controller' => 'TipoOcorrencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Tipo Ocorrencia'), ['controller' => 'TipoOcorrencias', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Gravidades'), ['controller' => 'Gravidades', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Gravidade'), ['controller' => 'Gravidades', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Turnos'), ['controller' => 'Turnos', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turno'), ['controller' => 'Turnos', 'action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Medidas'), ['controller' => 'Medidas', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Medida'), ['controller' => 'Medidas', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="ocorrencias view large-9 medium-8 columns content">
    <h3><?= h($ocorrencia->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Aluno') ?></th>
            <td><?= $ocorrencia->has('aluno') ? $this->Html->link($ocorrencia->aluno->name, ['controller' => 'Alunos', 'action' => 'view', $ocorrencia->aluno->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('User') ?></th>
            <td><?= $ocorrencia->has('user') ? $this->Html->link($ocorrencia->user->name, ['controller' => 'Users', 'action' => 'view', $ocorrencia->user->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Tipo Ocorrencia') ?></th>
            <td><?= $ocorrencia->has('tipo_ocorrencia') ? $this->Html->link($ocorrencia->tipo_ocorrencia->id, ['controller' => 'TipoOcorrencias', 'action' => 'view', $ocorrencia->tipo_ocorrencia->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Gravidade') ?></th>
            <td><?= $ocorrencia->has('gravidade') ? $this->Html->link($ocorrencia->gravidade->id, ['controller' => 'Gravidades', 'action' => 'view', $ocorrencia->gravidade->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Turno') ?></th>
            <td><?= $ocorrencia->has('turno') ? $this->Html->link($ocorrencia->turno->id, ['controller' => 'Turnos', 'action' => 'view', $ocorrencia->turno->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Medida') ?></th>
            <td><?= $ocorrencia->has('medida') ? $this->Html->link($ocorrencia->medida->id, ['controller' => 'Medidas', 'action' => 'view', $ocorrencia->medida->id]) : '' ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($ocorrencia->id) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Data') ?></th>
            <td><?= h($ocorrencia->data) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Created') ?></th>
            <td><?= h($ocorrencia->created) ?></td>
        </tr>
    </table>
    <div class="row">
        <h4><?= __('Descricao') ?></h4>
        <?= $this->Text->autoParagraph(h($ocorrencia->descricao)); ?>
    </div>
</div>
