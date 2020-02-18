<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Medidas</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Medidas', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm'])?>
            <?= $this->Html->link(_('Editar'), ['controller' => 'Medidas', 'action' => 'edit', $medida->id], ['class'=>'btn btn-outline-warning btn-sm'])?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Medidas', 'action' => 'delete', $medida->id], ['class'=>'btn btn-outline-danger btn-sm','confirm' => __('Deseja realmente apagar a medida # {0}?', $medida->id)]) ?>

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Alunos', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Editar'), ['controller' => 'Alunos', 'action' => 'edit', $medida->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Alunos', 'action' => 'delete', $medida->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar a medida # {0}?', $medida->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<dl class="row">
<dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($medida->id) ?></dd>

    <dt class="col-sm-3">Medida</dt>
    <dd class="col-sm-9"><?= h($medida->medida) ?></dd>
    <dt class="col-sm-3">Descrição</dt>
    <dd class="col-sm-9"><?= h($medida->descricao) ?></dd>

</dl>