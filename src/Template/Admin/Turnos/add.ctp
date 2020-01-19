<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Turno</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Listar'), ['controller' => 'Turnos', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($turno) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Turno</label>
        <?= $this->Form->control('turno', ['class' =>'form-control','placeholder'=>'Turno','label' => false]) ?>
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
 * @var \App\Model\Entity\Turno $turno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Turnos'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="turnos form large-9 medium-8 columns content">
    <?= $this->Form->create($turno) ?>
    <fieldset>
        <legend><?= __('Add Turno') ?></legend>
        <?php
            echo $this->Form->control('turno');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
