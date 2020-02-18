<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Turno</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Turnos', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
            <?= $this->Html->link(_('Visualizar'), ['controller' => 'Turnos', 'action' => 'view', $turno->id], ['class'=>'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Turnos', 'action' => 'delete', $turno->id], ['class'=>'btn btn-outline-danger btn-sm', 'confirm' => __('Deseja realmente apara o turno # {0}?', $turno->id)]) ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Turnos', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Visualizar'), ['controller' => 'Turnos', 'action' => 'view', $turno->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Turnos', 'action' => 'delete', $turno->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar o turno # {0}?', $turno->id)]) ?>
            </div>
        </div>
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
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(_('Salvar'), ['class'=>'btn btn-warning']) ?>

<?= $this->Form->end() ?>