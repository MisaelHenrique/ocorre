<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Medidas Model
 *
 * @property \App\Model\Table\OcorrenciasTable&\Cake\ORM\Association\HasMany $Ocorrencias
 *
 * @method \App\Model\Entity\Medida get($primaryKey, $options = [])
 * @method \App\Model\Entity\Medida newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Medida[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Medida|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medida saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Medida patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Medida[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Medida findOrCreate($search, callable $callback = null, $options = [])
 */
class MedidasTable extends Table
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

        $this->setTable('medidas');
        $this->setDisplayField('medida');
        $this->setPrimaryKey('id');

        $this->hasMany('Ocorrencias', [
            'foreignKey' => 'medida_id',
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
            ->scalar('medida')
            ->maxLength('medida', 60)
            ->requirePresence('medida', 'create')
            ->notEmptyString('medida');

        $validator
            ->scalar('descricao')
            ->allowEmptyString('descricao');

        return $validator;
    }
}
