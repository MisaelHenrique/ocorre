<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Ocorrencia</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
            <?= $this->Html->link(_('Visualizar'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencia->id], ['class'=>'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class'=>'btn btn-outline-danger btn-sm', 'confirm' => __('Deseja realmente apara a ocorrencia # {0}?', $ocorrencia->id)]) ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Visualizar'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencia->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar a ocorrencia # {0}?', $ocorrencia->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($ocorrencia) ?>
<div class="form-row">
<div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome do Aluno</label>
        <?= $this->Form->control('aluno_id', ['class' =>'form-control','placeholder'=>'Matricula','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Tipo de Ocorrencia</label>
        <?= $this->Form->control('tipo_ocorrencia_id', ['class' =>'form-control','placeholder'=>'Nome completo','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Gravidade</label>
        <?= $this->Form->control('gravidade_id', ['class' =>'form-control','placeholder'=>'Sexo','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Turno Ocorrido</label>
        <?= $this->Form->control('turno_id', ['class' =>'form-control','placeholder'=>'Date de Nascimento','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Medida</label>
        <?= $this->Form->control('medida_id', ['class' =>'form-control','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Data Ocorrido</label>
        <?= $this->Form->control('created', ['class' =>'form-control','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Data Cadastro</label>
        <?= $this->Form->control('data', ['class' =>'form-control','label' => false]) ?>
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Descrição</label>
        <?= $this->Form->control('descricao', ['class' =>'form-control','label' => false]) ?>
    </div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(_('Salvar'), ['class'=>'btn btn-warning']) ?>

<?= $this->Form->end() ?>


<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Ocorrencia $ocorrencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $ocorrencia->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $ocorrencia->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['action' => 'index']) ?></li>
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
<div class="ocorrencias form large-9 medium-8 columns content">
    <?= $this->Form->create($ocorrencia) ?>
    <fieldset>
        <legend><?= __('Edit Ocorrencia') ?></legend>
        <?php
            echo $this->Form->control('descricao');
            echo $this->Form->control('data');
            echo $this->Form->control('aluno_id', ['options' => $alunos]);
            echo $this->Form->control('user_id', ['options' => $users]);
            echo $this->Form->control('tipo_ocorrencia_id', ['options' => $tipoOcorrencias]);
            echo $this->Form->control('gravidade_id', ['options' => $gravidades]);
            echo $this->Form->control('turno_id', ['options' => $turnos]);
            echo $this->Form->control('medida_id', ['options' => $medidas]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
