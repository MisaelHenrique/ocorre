<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * TipoOcorrencias Model
 *
 * @property \App\Model\Table\GravidadesTable&\Cake\ORM\Association\BelongsTo $Gravidades
 * @property \App\Model\Table\OcorrenciasTable&\Cake\ORM\Association\HasMany $Ocorrencias
 *
 * @method \App\Model\Entity\TipoOcorrencia get($primaryKey, $options = [])
 * @method \App\Model\Entity\TipoOcorrencia newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\TipoOcorrencia[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\TipoOcorrencia|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoOcorrencia saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\TipoOcorrencia patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\TipoOcorrencia[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\TipoOcorrencia findOrCreate($search, callable $callback = null, $options = [])
 */
class TipoOcorrenciasTable extends Table
{
    /**
     * Initialize method
     *
     * @param array $config The configuration for the Table.
     * @return void
     */
    public function initialize(array $config)
    {
        parent::initialize($config);

        $this->setTable('tipo_ocorrencias');
        $this->setDisplayField('tipo_ocorrencia');
        $this->setPrimaryKey('id');

        $this->belongsTo('Gravidades', [
            'foreignKey' => 'gravidade_id',
            'joinType' => 'INNER',
        ]);
        $this->hasMany('Ocorrencias', [
            'foreignKey' => 'tipo_ocorrencia_id',
        ]);
    }

    /**
     * Default validation rules.
     *
     * @param \Cake\Validation\Validator $validator Validator instance.
     * @return \Cake\Validation\Validator
     */
    public function validationDefault(Validator $validator)
    {
        $validator
            ->integer('id')
            ->allowEmptyString('id', null, 'create');

        $validator
            ->scalar('tipo_ocorrencia')
            ->maxLength('tipo_ocorrencia', 220)
            ->requirePresence('tipo_ocorrencia', 'create')
            ->notEmptyString('tipo_ocorrencia');

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        return $validator;
    }

    /**
     * Returns a rules checker object that will be used for validating
     * application integrity.
     *
     * @param \Cake\ORM\RulesChecker $rules The rules object to be modified.
     * @return \Cake\ORM\RulesChecker
     */
    public function buildRules(RulesChecker $rules)
    {
        $rules->add($rules->existsIn(['gravidade_id'], 'Gravidades'));

        return $rules;
    }

    public function getTipoEstatistica($Tipogravidade){

        $query = $this->find()
        ->select(['gravidade_id'])
        ->where([
            'Gravidades.gravidade' => $Tipogravidade
        ]);
    return $query->first();

    }
}
