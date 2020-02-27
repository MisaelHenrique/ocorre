<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Alunos</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Cadastrar'), ['controller' => 'Alunos', 'action' => 'add'], ['class'=>'btn btn-outline-success btn-sm']);?>
    </div>
</div>
<?= $this->Form->create(null, ['type' => 'get']); ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <?= $this->Form->input('search',['class' => 'form-control', 'label' => false,'placeholder' => 'Digite aqui o nome do aluno','value' => $this->request->query('search')]);?>

    </div>
    <div class="form-group col-md-6">
        <?=$this->Form->button(_('Pesquisar'), ['class'=>'btn btn-success']);?>
    </div>
</div>
<?=$this->Form->end();?>
<hr>

<?= $this->Flash->render() ?>
<div class="table-responsive">
    <table class="table table-striped table-hover table-bordered">
        <thead>
            <tr>
                <th>Matricula</th>
                <th>Nome</th>
                <th class="d-none d-sm-table-cell">Curso</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($alunos as $aluno): ?>
            <tr>
                <td><?= h($aluno->matricula) ?></td>
                <td><?= h($aluno->nome) ?></td>
                <td class="d-none d-sm-table-cell">
                    <?= h($aluno->curso->nome) ?>
                </td>
                <td>
                    <span class="d-none d-md-block">
                        <?= $this->Html->link(__('Visualizar'), ['controller' => 'Alunos', 'action' => 'view', $aluno->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>

                        <?= $this->Html->link(__('Editar'), ['controller' => 'Alunos', 'action' => 'edit', $aluno->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>

                        <!-- <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Alunos', 'action' => 'delete', $aluno->id], ['class' =>'btn btn-outline-danger btn-sm', 'confirm' => __('Realmente deseja apagar o aluno # {0}?', $aluno->id)]) ?> -->
                    </span>

                    <div class="dropdown d-block d-md-none">
                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ações
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                            <?= $this->Html->link(__('Visualizar'), ['controller' => 'Alunos', 'action' => 'view', $aluno->id], ['class' => 'dropdown-item']) ?>

                            <?= $this->Html->link(__('Editar'), ['controller' => 'Alunos', 'action' => 'edit', $aluno->id], ['class' => 'dropdown-item']) ?>

                            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Alunos', 'action' => 'delete', $aluno->id], ['class' =>'dropdown-item', 'confirm' => __('Relamente deseja apagar o aluno # {0}?', $aluno->id)]) ?>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->element('pagination'); ?>
</div>