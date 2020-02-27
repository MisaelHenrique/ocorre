<?php
namespace App\Model\Table;

use Cake\ORM\Query;
use Cake\ORM\RulesChecker;
use Cake\ORM\Table;
use Cake\Validation\Validator;

/**
 * Gravidades Model
 *
 * @property \App\Model\Table\OcorrenciasTable&\Cake\ORM\Association\HasMany $Ocorrencias
 * @property \App\Model\Table\TipoOcorrenciasTable&\Cake\ORM\Association\HasMany $TipoOcorrencias
 *
 * @method \App\Model\Entity\Gravidade get($primaryKey, $options = [])
 * @method \App\Model\Entity\Gravidade newEntity($data = null, array $options = [])
 * @method \App\Model\Entity\Gravidade[] newEntities(array $data, array $options = [])
 * @method \App\Model\Entity\Gravidade|false save(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gravidade saveOrFail(\Cake\Datasource\EntityInterface $entity, $options = [])
 * @method \App\Model\Entity\Gravidade patchEntity(\Cake\Datasource\EntityInterface $entity, array $data, array $options = [])
 * @method \App\Model\Entity\Gravidade[] patchEntities($entities, array $data, array $options = [])
 * @method \App\Model\Entity\Gravidade findOrCreate($search, callable $callback = null, $options = [])
 */
class GravidadesTable extends Table
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

        $this->setTable('gravidades');
        $this->setDisplayField('gravidade');
        $this->setPrimaryKey('id');

        $this->hasMany('Ocorrencias', [
            'foreignKey' => 'gravidade_id',
        ]);
        $this->hasMany('TipoOcorrencias', [
            'foreignKey' => 'gravidade_id',
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
            ->scalar('gravidade')
            ->maxLength('gravidade', 220)
            ->requirePresence('gravidade', 'create')
            ->notEmptyString('gravidade');

        return $validator;
    }

    public function getEstatistica($gravidade){

        $query = $this->find()
        ->select(['id'])
        ->where([
            'Gravidades.gravidade' => $gravidade
        ]);
    return $query->first();

    }
}