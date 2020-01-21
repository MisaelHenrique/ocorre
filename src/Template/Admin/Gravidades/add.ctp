<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Gravidade $gravidade
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('List Gravidades'), ['action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?></li>
        <li><?= $this->Html->link(__('List Tipo Ocorrencias'), ['controller' => 'TipoOcorrencias', 'action' => 'index']) ?></li>
        <li><?= $this->Html->link(__('New Tipo Ocorrencia'), ['controller' => 'TipoOcorrencias', 'action' => 'add']) ?></li>
    </ul>
</nav>
<div class="gravidades form large-9 medium-8 columns content">
    <?= $this->Form->create($gravidade) ?>
    <fieldset>
        <legend><?= __('Add Gravidade') ?></legend>
        <?php
            echo $this->Form->control('gravidade');
        ?>
    </fieldset>
    <?= $this->Form->button(__('Submit')) ?>
    <?= $this->Form->end() ?>
</div>
