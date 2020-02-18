
<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Cadastrar Aluno</h2>
    </div>
    <div class="p-2">
        <?= $this->Html->link(_('Listar'), ['controller' => 'Alunos', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($aluno) ?>
<div class="form-row">
<div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Matricula</label>
        <?= $this->Form->control('matricula', ['class' =>'form-control','placeholder'=>'Matricula','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome</label>
        <?= $this->Form->control('nome', ['class' =>'form-control','placeholder'=>'Nome completo','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Sexo</label>
        <?= $this->Form->control('sexo', ['options' => array('' => 'Selecione', 1 => 'Masculino', 2 => 'Feminino'),'class' =>'form-control','placeholder'=>'Sexo','label' => false]) ?>
    </div>

    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Data de Nascimento</label>
        <?php 
        $control_html = $this->Form->control('data_nasc', ['type' => 'text','class' =>'form-control','placeholder'=>'Data de Nascimento','label' => false]);

        $date_control = str_replace('type="text"','type="date"', $control_html); 
        
        ?>
        <?=  $date_control ?>
        <?php // echo $this->Form->input('data_nasc', ['class' =>'form-control', 'type' => 'date' ,'placeholder'=>'Data de Nascimento','label' => false]) ?>
    </div>

    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Curso</label>
        <?= $this->Form->control('curso_id', ['class' =>'form-control','empty' => 'Selecione','label' => false]) ?>
    </div>
</div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(_('Cadastrar'), ['class'=>'btn btn-success']) ?>

<?= $this->Form->end() ?>