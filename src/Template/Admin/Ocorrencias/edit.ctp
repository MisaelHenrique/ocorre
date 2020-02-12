<div class="d-flex">
    <div class="mr-auto p-2">
        <h2 class="display-4 titulo">Editar Ocorrencia</h2>
    </div>
    <div class="p-2">
        <span class="d-none d-md-block">
            <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'btn btn-outline-info btn-sm']) ?>
            <?= $this->Html->link(_('Visualizar'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencia->id], ['class'=>'btn btn-outline-primary btn-sm']) ?>
            <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class'=>'btn btn-outline-danger btn-sm', 'confirm' => __('Deseja realmente apara a ocorrencia # {0}?', $ocorrencia->id)]) ?>
        </span>
        <div class="dropdown d-block d-md-none">
            <button class="btn btn-primary dropdown-toggle btn-sm" type="button" id="acoesListar" data-toggle="dropdown"
                aria-haspopup="true" aria-expanded="false">
                Ações
            </button>
            <div class="dropdown-menu dropdown-menu-right" aria-labelledby="acoesListar">

                <?= $this->Html->link(_('Listar'), ['controller' => 'Ocorrencias', 'action' => 'index'], ['class'=>'dropdown-item'])?>
                <?= $this->Html->link(_('Visualizar'), ['controller' => 'Ocorrencias', 'action' => 'view', $ocorrencia->id], ['class'=>'dropdown-item'])?>
                <?= $this->Form->postLink(_('Apagar'), ['controller' => 'Ocorrencias', 'action' => 'delete', $ocorrencia->id], ['class'=>'dropdown-item','confirm' => __('Deseja realmente apagar a ocorrencia # {0}?', $ocorrencia->id)]) ?>
            </div>
        </div>
    </div>
</div>
<hr>
<?= $this->Flash->render() ?>
<?= $this->Form->create($ocorrencia) ?>
<div class="form-row">
<div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Nome do Aluno</label>
        <?= $this->Form->control('aluno_id', ['class' =>'form-control','placeholder'=>'Matricula','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Tipo de Ocorrencia</label>
        <?= $this->Form->control('tipo_ocorrencia_id', ['class' =>'form-control','placeholder'=>'Nome completo','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Medida</label>
        <?= $this->Form->control('medida_id', ['class' =>'form-control','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Turno Ocorrido</label>
        <?= $this->Form->control('turno_id', ['class' =>'form-control','placeholder'=>'Date de Nascimento','label' => false]) ?>
    </div>
    <div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Data Ocorrido</label>

        <?php 

        use Cake\I18n\FrozenTime;
        $time = new FrozenTime($ocorrencia['data']);

        $control_html = $this->Form->control('created', ['type' => 'text','class' =>'form-control','placeholder'=>'Data do ocorrido','label' => false, 'value' => $time->format('Y-m-d')]);

        $date_control = str_replace('type="text"','type="date"', $control_html); 

        echo $date_control ?>
    </div>
</div>
<div class="form-row">
<div class="form-group col-md-6">
        <label><span class="text-danger">*</span> Descrição</label>
        <?= $this->Form->control('descricao', ['class' =>'form-control','label' => false]) ?>
    </div>
</div>
<p>
    <span class="text-danger">* </span>Campo obrigatório
</p>
<?= $this->Form->button(_('Salvar'), ['class'=>'btn btn-warning']) ?>

<?= $this->Form->end() ?>