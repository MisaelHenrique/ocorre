<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Medidas</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Cadastrar'), ['controller' => 'Medidas', 'action' => 'add'], ['class'=>'btn btn-outline-success btn-sm']);?>
    </div>
</div>

<?= $this->Form->create(null, ['type' => 'get']); ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <?= $this->Form->input('search',['class' => 'form-control', 'label' => false,'placeholder' => 'Digite aqui a medida','value' => $this->request->query('search')]);?>

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
                <th>Medidas</th>
                <th class="d-none d-sm-table-cell">Descrição</th>
                <th class="text-center">Ações</th>
            </tr>
        </thead>
        <tbody>
            <?php foreach ($medidas as $medida): ?>
            <tr>
                <td><?= h($medida->medida) ?></td>
                <td class="d-none d-sm-table-cell">
                    <?= h($medida->descricao) ?>
                </td>
                <td>
                    <span class="d-none d-md-block">
                    <?= $this->Html->link(__('Visualizar'), ['controller' => 'Medidas', 'action' => 'view', $medida->id], ['class' => 'btn btn-outline-primary btn-sm']) ?>

                        <?= $this->Html->link(__('Editar'), ['controller' => 'Medidas', 'action' => 'edit', $medida->id], ['class' => 'btn btn-outline-warning btn-sm']) ?>

                       <!-- <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Medidas', 'action' => 'delete', $medida->id], ['class' =>'btn btn-outline-danger btn-sm', 'confirm' => __('Realmente deseja apagar a medida # {0}?', $medida->id)]) ?>-->
                    </span>

                    <div class="dropdown d-block d-md-none">
                        <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar"
                            data-toggle="dropdown" aria-haspopup="true" aria-expanded="false">
                            Ações
                        </button>
                        <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">
                        <?= $this->Html->link(__('Visualizar'), ['controller' => 'Medidas', 'action' => 'view', $medida->id], ['class' => 'dropdown-item']) ?>

                            <?= $this->Html->link(__('Editar'), ['controller' => 'Medidas', 'action' => 'edit', $medida->id], ['class' => 'dropdown-item']) ?>

                            <?= $this->Form->postLink(__('Apagar'), ['controller' => 'Medidas', 'action' => 'delete', $medida->id], ['class' =>'dropdown-item', 'confirm' => __('Relamente deseja apagar a medida # {0}?', $medida->id)]) ?>
                        </div>
                    </div>
                </td>
            </tr>
            <?php endforeach; ?>
        </tbody>
    </table>
    <?= $this->element('pagination'); ?>
</div>