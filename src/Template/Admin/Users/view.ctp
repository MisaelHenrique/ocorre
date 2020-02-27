<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Servidor(a) <?= h($user->name) ?></h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Users', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm'])?>
            <?= $this->Html->link(_('Editar'), ['controller' => 'Users', 'action' => 'edit', $user->id], ['class'=>'btn btn-outline-warning btn-sm'])?>
            <?= $this->Html->link(_('Editar Senha'), ['controller' => 'Users', 'action' => 'editSenha', $user->id], ['class'=>'btn btn-outline-warning btn-sm'])?>
           <!-- <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Users', 'action' => 'delete', $user->id], ['class'=>'btn btn-outline-danger btn-sm','confirm' => __('Deseja realmente apagar o usuário # {0}?', $user->id)]) ?>-->

        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Users', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Editar'), ['controller' => 'Users', 'action' => 'edit', $user->id], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Editar Senha'), ['controller' => 'Users', 'action' => 'editSenha', $user->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Users', 'action' => 'delete', $user->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar o usuário # {0}?', $user->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<dl class="row">

    <dt class="col-sm-3">ID</dt>
    <dd class="col-sm-9"><?= $this->Number->format($user->id) ?></dd>

    <dt class="col-sm-3">Nome do servidor</dt>
    <dd class="col-sm-9"><?= h($user->name) ?></dd>

    <dt class="col-sm-3">Matricula</dt>
    <dd class="col-sm-9"><?= h($user->matricula) ?></dd>

    <dt class="col-sm-3">Cargo</dt>
    <dd class="col-sm-9"><?= h($user->cargo) ?></dd>

    <dt class="col-sm-3">Email</dt>
    <dd class="col-sm-9"><?= h($user->email) ?></dd>

    <dt class="col-sm-3">Usuário</dt>
    <dd class="col-sm-9"><?= h($user->username) ?></dd>

    <dt class="col-sm-3 text-truncate">Data do Cadastro</dt>
    <dd class="col-sm-9"><?= h($user->created) ?></dd>

    <dt class="col-sm-3 text-truncate">Alterado em </dt>
    <dd class="col-sm-9"><?= h($user->modified) ?></dd>

</dl>