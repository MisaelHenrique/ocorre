<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Tipos de Ocorrencia</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'TipoOcorrencias', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm'])?>
            <?= $this->Html->link(_('Editar'), ['controller' => 'TipoOcorrencias', 'action' => 'edit', $tipoOcorrencia->id], ['class'=>'btn btn-outline-warning btn-sm'])?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'TipoOcorrencias', 'action' => 'delete', $tipoOcorrencia->id], ['class'=>'btn btn-outline-danger btn-sm','confirm' => __('Deseja realmente apagar o tipo de ocorrencia # {0}?', $tipoOcorrencia->id)]) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'TipoOcorrencias', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Editar'), ['controller' => 'TipoOcorrencias', 'action' => 'edit', $tipoOcorrencia->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'TipoOcorrencias', 'action' => 'delete', $tipoOcorrencia->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar o tipo de ocorrencia # {0}?', $tipoOcorrencia->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<dl class="row">
<dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($tipoOcorrencia->id) ?></dd>

    <dt class="col-sm-3">Tipo de Ocorrencia</dt>
    <dd class="col-sm-9"><?= h($tipoOcorrencia->tipo_ocorrencia) ?></dd>

    <dt class="col-sm-3">Gravidade</dt>
    <dd class="col-sm-9"><?= $tipoOcorrencia->has('gravidade') ? $this->Html->link($tipoOcorrencia->gravidade->gravidade, ['controller' => 'Gravidades', 'action' => 'view', $tipoOcorrencia->gravidade->id]) : '' ?></dd>

    <dt class="col-sm-3">Descrição</dt>
    <dd class="col-sm-9"><?= h($tipoOcorrencia->descricao) ?></dd>

</dl>