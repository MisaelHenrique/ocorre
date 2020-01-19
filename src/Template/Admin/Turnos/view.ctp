<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Turno $turno
 */
?>
<nav class="large-3 medium-4 columns" id="actions-sidebar">
    <ul class="side-nav">
        <li class="heading"><?= __('Actions') ?></li>
        <li><?= $this->Html->link(__('Edit Turno'), ['action' => 'edit', $turno->id]) ?> </li>
        <li><?= $this->Form->postLink(__('Delete Turno'), ['action' => 'delete', $turno->id], ['confirm' => __('Are you sure you want to delete # {0}?', $turno->id)]) ?> </li>
        <li><?= $this->Html->link(__('List Turnos'), ['action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Turno'), ['action' => 'add']) ?> </li>
        <li><?= $this->Html->link(__('List Ocorrencias'), ['controller' => 'Ocorrencias', 'action' => 'index']) ?> </li>
        <li><?= $this->Html->link(__('New Ocorrencia'), ['controller' => 'Ocorrencias', 'action' => 'add']) ?> </li>
    </ul>
</nav>
<div class="turnos view large-9 medium-8 columns content">
    <h3><?= h($turno->id) ?></h3>
    <table class="vertical-table">
        <tr>
            <th scope="row"><?= __('Turno') ?></th>
            <td><?= h($turno->turno) ?></td>
        </tr>
        <tr>
            <th scope="row"><?= __('Id') ?></th>
            <td><?= $this->Number->format($turno->id) ?></td>
        </tr>
    </table>
    <div class="related">
        <h4><?= __('Related Ocorrencias') ?></h4>
        <?php if (!empty($turno->ocorrencias)): ?>
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
            <?php foreach ($turno->ocorrencias as $ocorrencias): ?>
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
