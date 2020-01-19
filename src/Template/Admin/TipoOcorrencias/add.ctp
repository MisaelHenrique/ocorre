<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar TIpo de Ocorrencia</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Listar'), ['controller' => 'TipoOcorrencias', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($tipoOcorrencia) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Tipo de Ocorrencia</label>
        <?= $this->Form->control('tipo_ocorrencia', ['class' =>'form-control','placeholder'=>'Tipo de Ocorrencia','label' => false]) ?>
    </div>
</div>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Descrição</label>
        <?= $this->Form->control('descricao', ['class' =>'form-control','placeholder'=>'Descrição','label' => false]) ?>
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
 * @var \App\Model\Entity\TipoOcorrencia $tipoOcorrencia
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Tipo Ocorrencias'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="tipoOcorrencias form large-9 medium-8 columns content">
    <?= $this->Form->create($tipoOcorrencia) ?>
    <fieldset>
        <legend><?= __('Add Tipo Ocorrencia') ?></legend>
        <?php
            echo $this->Form->control('tipo_ocorrencia');
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
