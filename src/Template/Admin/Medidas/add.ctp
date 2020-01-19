<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Medidas</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Listar'), ['controller' => 'Medidas', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($medida) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Medida</label>
        <?= $this->Form->control('medida', ['class' =>'form-control','placeholder'=>'Medida','label' => false]) ?>
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Descrição</label>
        <?= $this->Form->control('descricao', ['class' =>'form-control','placeholder'=>'Descrição','label' => false]) ?>
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
 * @var \App\Model\Entity\Medida $medida
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Medidas'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="medidas form large-9 medium-8 columns content">
    <?= $this->Form->create($medida) ?>
    <fieldset>
        <legend><?= __('Add Medida') ?></legend>
        <?php
            echo $this->Form->control('medida');
            echo $this->Form->control('descricao');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
