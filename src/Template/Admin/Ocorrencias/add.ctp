<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Ocorrencia</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($ocorrencia) ?>
<div class="form-row">
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome do Aluno</label>
        <?= $this->Form->control('aluno_id', ['class' =>'form-control','empty' => 'Selecione','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Tipo de Ocorrencia</label>
        <?= $this->Form->control('tipo_ocorrencia_id', ['class' =>'form-control','empty' => 'Selecione','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger"></span> Medida Aplicada</label>
        <?= $this->Form->control('medida_id', ['class' =>'form-control','empty' => 'Selecione','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Turno Ocorrido</label>
        <?= $this->Form->control('turno_id', ['class' =>'form-control','empty' => 'Selecione','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Data do Ocorrido</label>
        <?php $control_html =$this->Form->control('data', ['type' => 'text','class' =>'form-control','label' => false]);

        $date_control = str_replace('type="text"','type="date"', $control_html); 
        ?>
        
        <?=  $date_control ?>
    </div>
    <div class="form-group col-md-9">
        <label><span class="text-danger">*</span> Descrição</label>
        <?= $this->Form->control('descricao', ['class' =>'form-control','placeholder'=>'descreva em detalhes o ocorrido...','label' => false]) ?>
    </div>
</div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(_('Cadastrar'), ['class'=>'btn btn-success']) ?>

<?= $this->Form->end() ?>