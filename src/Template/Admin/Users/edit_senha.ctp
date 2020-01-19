<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Senha</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'users', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
            <?= $this->Html->link(_('Visualizar'), ['controller' => 'users', 'action' => 'view', $user->id], ['class'=>'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class'=>'btn btn-outline-danger btn-sm', 'confirm' => __('Deseja realmente apara o usuário # {0}?', $user->id)]) ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                <?= $this->Html->link(_('Listar'), ['controller' => 'users', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Visualizar'), ['controller' => 'users', 'action' => 'view', $user->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'users', 'action' => 'delete', $user->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar o usuário # {0}?', $user->id)]) ?>

            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($user) ?>

<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Senha</label>
        <?= $this->Form->control('password', ['class' =>'form-control','placeholder'=>'A senha deve ter no minimo 6 caracteres', 'value' => '','label' => false]) ?>
    </div>
</div>

<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(_('Salvar'), ['class'=>'btn btn-warning']) ?>

<?= $this->Form->end() ?>