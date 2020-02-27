<?php // debug($ocorrencia); exit(); ?>
<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Ocorrencia</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm'])?>
            <?= $this->Html->link(_('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencia->id], ['class'=>'btn btn-outline-warning btn-sm'])?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class'=>'btn btn-outline-danger btn-sm','confirm' => __('Deseja realmente apagar a ocorrencia # {0}?', $ocorrencia->id)]) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Editar'), ['controller' => 'Ocorrencias', 'action' => 'edit', $ocorrencia->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar a ocorrencia # {0}?', $ocorrencia->id)]) ?>
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

    <dt class="col-sm-3">Servidor</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->user->name) ?></dd>

    <dt class="col-sm-3">Tipo Ocorrencia </dt>
    <dd class="col-sm-9"><?= h($ocorrencia->tipo_ocorrencia->tipo_ocorrencia) ?></dd>

    <dt class="col-sm-3">Gravidade</dt>
    <dd class="col-sm-9"><?= h($ocorrencia->tipo_ocorrencia->gravidade->gravidade) ?></dd>

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
<a href="javascript:print()" class="btn btn-outline-info btn-sm" >Imprimir</a>