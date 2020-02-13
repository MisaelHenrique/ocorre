<?php //debug($aluno); exit; 
?>
<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Aluno(a): <?= h($aluno->nome) ?></h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Alunos', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>
            <?= $this->Html->link(_('Editar'), ['controller' => 'Alunos', 'action' => 'edit', $aluno->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Alunos', 'action' => 'delete', $aluno->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Deseja realmente apagar o aluno # {0}?', $aluno->id)]) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Alunos', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                <?= $this->Html->link(_('Editar'), ['controller' => 'Alunos', 'action' => 'edit', $aluno->id], ['class' => 'dropdown-item']) ?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Alunos', 'action' => 'delete', $aluno->id], ['class' => 'dropdown-item', 'confirm' => __('Deseja realmente apagar o aluno # {0}?', $aluno->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?php $sexo = array("Feminino", "Masculino"); ?>
<dl class="row">
    <!--<dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($aluno->id) ?></dd>-->

    <dt class="col-sm-3">Matricula</dt>
    <dd class="col-sm-9"><?= h($aluno->matricula) ?></dd>
    <dt class="col-sm-3">Nome</dt>
    <dd class="col-sm-9"><?= h($aluno->nome) ?></dd>
    <dt class="col-sm-3">Data de Nascimento</dt>
    <dd class="col-sm-9"><?= h($aluno->data_nasc) ?></dd>
    <dt class="col-sm-3">Sexo</dt>
    <dd class="col-sm-9"><?= $sexo[h($aluno->sexo)] ?></dd>
    <dt class="col-sm-3">Curso</dt>
    <dd class="col-sm-9"><?= h($aluno->curso->nome) ?></dd>
    <dt class="col-sm-3">Criado</dt>
    <dd class="col-sm-9"><?= h($aluno->created) ?></dd>
    <dt class="col-sm-3">Modificado</dt>
    <dd class="col-sm-9"><?= h($aluno->modified) ?></dd>

</dl>

<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Ocorrencias relacionadas</h2>
    </div>
</div>
<hr>
<?php if (!empty($aluno->ocorrencias)) : ?>
    <div class="table-responsive">
        <table class="table table-striped table-hover table-bordered">
            <thead>
                <tr>
                    <th>ID</th>
                    <th class="d-none d-sm-table-cell">Data</th>
                    <th>Tipo de Ocorrencia</th>
                    <th>Gravidade</th>
                    <th class="text-center">Ações</th>
                </tr>
            </thead>
            <tbody>

                <?php foreach ($aluno->ocorrencias as $ocorrencia) : ?>
                    <tr>
                        <td><?= $this->Number->format($ocorrencia->id) ?></td>
                        <td class="d-none d-sm-table-cell"><?= h($ocorrencia->data) ?></td>
                        <td><?= h($ocorrencia->tipo_ocorrencia->tipo_ocorrencia) ?></td>

                        <td >
                            <?= $ocorrencia->tipo_ocorrencia->gravidade->gravidade ?>
                            <?= $ocorrencia->has('gravidade') ? $this->Html->link($ocorrencia->gravidade->gravidade, ['controller' => 'Gravidades', 'action' => 'view', $ocorrencia->gravidade->id]) : '' ?>
                        </td>

                        <td>
                            <span class="d-none d-md-block">
                                <?= $this->Html->link(__('Visualizar'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencia->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>

                                <?= $this->Html->link(__('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencia->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>
                            </span>

                            <div class="dropdown d-block d-md-none">
                                <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                                    Ações
                                </button>
                                <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencia->id], ['class' => 'dropdown-item']) ?>

                                    <?= $this->Html->link(__('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencia->id], ['class' => 'dropdown-item']) ?>
                                </div>
                            </div>
                        </td>
                    </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    <?php endif; ?>
    </div>

    <h1>Estatisticas</h1>
    <hr>

    <div class="form-row">
        <div class="form-group col-md-9">
            <canvas id="myChart"></canvas>
        </div>
    </div>