<?php    //debug($aluno); exit(); ?>
<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Aluno</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Alunos', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
            <?= $this->Html->link(_('Visualizar'), ['controller' => 'Alunos', 'action' => 'view', $aluno->id], ['class'=>'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Alunos', 'action' => 'delete', $aluno->id], ['class'=>'btn btn-outline-danger btn-sm', 'confirm' => __('Deseja realmente apagar o aluno # {0}?', $aluno->id)]) ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Alunos', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Visualizar'), ['controller' => 'Alunos', 'action' => 'view', $aluno->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Alunos', 'action' => 'delete', $aluno->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar o aluno # {0}?', $aluno->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($aluno) ?>
<div class="form-row">
<div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Matricula</label>
        <?= $this->Form->control('matricula', ['class' =>'form-control','placeholder'=>'Matricula','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome</label>
        <?= $this->Form->control('nome', ['class' =>'form-control','placeholder'=>'Nome completo','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Sexo</label>
        <?= $this->Form->control('sexo', ['options' => array('' => 'Selecione', 1 => 'Masculino', 2 => 'Feminino'),'class' =>'form-control','placeholder'=>'Sexo','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Data de Nascimento</label>
        <?php 

        use Cake\I18n\FrozenTime;
        $time = new FrozenTime($aluno['data_nasc']);

        $control_html = $this->Form->control('data_nasc', ['type' => 'text','class' =>'form-control','placeholder'=>'Data de Nascimento','label' => false, 'value' => $time->format('Y-m-d')]);

        $date_control = str_replace('type="text"','type="date"', $control_html); 

        echo $date_control ?>
        
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Curso</label>
        <?= $this->Form->control('curso_id', ['class' =>'form-control','label' => false]) ?>
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
 * @var \App\Model\Entity\Aluno $aluno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $aluno->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $aluno->id)]
            )
        ?></li>
        <li><?= $this->Html->link(__('List Alunos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Cursos'), ['controller' => 'Cursos', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Curso'), ['controller' => 'Cursos', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="alunos form large-9 medium-8 columns content">
    <?= $this->Form->create($aluno) ?>
    <fieldset>
        <legend><?= __('Edit Aluno') ?></legend>
        <?php
            echo $this->Form->control('matricula');
            echo $this->Form->control('nome');
            echo $this->Form->control('sexo');
            echo $this->Form->control('data_nasc');
            echo $this->Form->control('curso_id', ['options' => $cursos]);
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
