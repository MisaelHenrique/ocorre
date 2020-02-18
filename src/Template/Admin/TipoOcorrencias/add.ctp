<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Tipo de Ocorrencia</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Listar'), ['controller' => 'TipoOcorrencias', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($tipoOcorrencia) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Tipo de Ocorrencia</label>
        <?= $this->Form->control('tipo_ocorrencia', ['class' =>'form-control','placeholder'=>'Tipo de Ocorrencia','label' => false]) ?>
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Gravidade</label>
        <?= $this->Form->control('gravidade_id', ['class' =>'form-control','placeholder'=>'Gravidade','label' => false]) ?>
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Descrição</label>
        <?= $this->Form->control('descricao', ['class' =>'form-control','placeholder'=>'Descrição','label' => false]) ?>
    </div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(_('Cadastrar'), ['class'=>'btn btn-success']) ?>

<?= $this->Form->end() ?>