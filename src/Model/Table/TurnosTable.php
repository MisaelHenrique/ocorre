<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Turnos Model
 *
 * @property \App\Model\Table\OcorrenciasTable&\Cake\ORM\Association\HasMany $Ocorrencias
 *
 * @method \App\Model\Entity\Turno get($primaryKey, $options = [])
 * @method \App\Model\Entity\Turno newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Turno[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Turno|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Turno saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Turno patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Turno[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Turno findOrCreate($search, callable $callback = null, $options = [])
 */
class TurnosTable extends Table
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

        $this->setTable('turnos');
        $this->setDisplayField('turno');
        $this->setPrimaryKey('id');

        $this->hasMany('Ocorrencias', [
            'foreignKey' => 'turno_id',
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
            ->scalar('turno')
            ->maxLength('turno', 60)
            ->requirePresence('turno', 'create')
            ->notEmptyString('turno');

        return $validator;
    }
}
