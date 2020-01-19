<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Ocorrencia</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($ocorrencia) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome do Aluno</label>
        <?= $this->Form->control('aluno_id', ['class' =>'form-control','placeholder'=>'Nome Completo','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Tipo de Ocorrencia</label>
        <?= $this->Form->control('tipo_ocorrencia_id', ['class' =>'form-control','placeholder'=>'Tipo de Ocorrencia','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Gravidade</label>
        <?= $this->Form->control('gravidade_id', ['class' =>'form-control','placeholder'=>'Gravidade','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Turno Ocorrido</label>
        <?= $this->Form->control('turno_id', ['class' =>'form-control','placeholder'=>'Turno Ocorrido','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Medida Aplicada</label>
        <?= $this->Form->control('medida', ['class' =>'form-control','placeholder'=>'Medida Aplicada','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Data do Ocorrido</label>
        <?= $this->Form->control('data', ['class' =>'form-control','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Data do Cadastro</label>
        <?= $this->Form->control('created', ['class' =>'form-control','label' => false]) ?>
    </div>
    <div class="form-group col-md-9">
        <label><span class="text-danger">*</span> Descrição</label>
        <?= $this->Form->control('descricao', ['class' =>'form-control','placeholder'=>'descreva em detalhes o ocorrido...','label' => false]) ?>
    </div>
</div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(_('Cadastrar'), ['class'=>'btn btn-success']) ?>

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
        <legend><?= __('Add Ocorrencia') ?></legend>
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
