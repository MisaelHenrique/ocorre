<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Servidor</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'btn btn-outline-info btn-sm']) ?>
            <?= $this->Html->link(_('Visualizar'), ['controller' => 'Users', 'action' => 'view', $user->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Users', 'action' => 'delete', $user->id], ['class' => 'btn btn-outline-danger btn-sm', 'confirm' => __('Deseja realmente apagar o usuário # {0}?', $user->id)]) ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Users', 'action' => 'index'], ['class' => 'dropdown-item']) ?>
                <?= $this->Html->link(_('Visualizar'), ['controller' => 'Users', 'action' => 'view', $user->id], ['class' => 'dropdown-item']) ?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Users', 'action' => 'delete', $user->id], ['class' => 'dropdown-item', 'confirm' => __('Deseja realmente apagar o usuário # {0}?', $user->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($user) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome</label>
        <?= $this->Form->control('name', ['class' => 'form-control', 'placeholder' => 'Nome', 'label' => false]) ?>
    </div>

    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Matricula</label>
        <?= $this->Form->control('matricula', ['class' => 'form-control', 'placeholder' => 'Matricula', 'label' => false]) ?>
    </div>

    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Cargo</label>
        <?= $this->Form->control('cargo', ['class' => 'form-control', 'placeholder' => 'Cargo', 'label' => false]) ?>
    </div>

    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> E-mail</label>
        <?= $this->Form->control('email', ['class' => 'form-control', 'placeholder' => 'E-mail', 'label' => false]) ?>
    </div>

    <div class="form-group col-md-12">
        <label><span class="text-danger">*</span> Nome de usuário</label>
        <?= $this->Form->control('username', ['class' => 'form-control', 'placeholder' => 'Nome de usuário', 'label' => false]) ?>
    </div>
</div>


<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(_('Salvar'), ['class' => 'btn btn-warning']) ?>

<?= $this->Form->end() ?>