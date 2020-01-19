<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Ocorrencia Entity
 *
 * @property int $id
 * @property string $descricao
 * @property \Cake\I18n\FrozenTime $data
 * @property \Cake\I18n\FrozenTime $created
 * @property int $aluno_id
 * @property int $user_id
 * @property int $tipo_ocorrencia_id
 * @property int $gravidade_id
 * @property int $turno_id
 * @property int $medida_id
 *
 * @property \App\Model\Entity\Aluno $aluno
 * @property \App\Model\Entity\User $user
 * @property \App\Model\Entity\TipoOcorrencia $tipo_ocorrencia
 * @property \App\Model\Entity\Gravidade $gravidade
 * @property \App\Model\Entity\Turno $turno
 * @property \App\Model\Entity\Medida $medida
 */
class Ocorrencia extends Entity
{
    /**
     * Fields that can be mass assigned using newEntity() or patchEntity().
     *
     * Note that when '*' is set to true, this allows all unspecified fields to
     * be mass assigned. For security purposes, it is advised to set '*' to false
     * (or remove it), and explicitly make individual fields accessible as needed.
     *
     * @var array
     */
    protected $_accessible = [
        'descricao' => true,
        'data' => true,
        'created' => true,
        'aluno_id' => true,
        'user_id' => true,
        'tipo_ocorrencia_id' => true,
        'gravidade_id' => true,
        'turno_id' => true,
        'medida_id' => true,
        'aluno' => true,
        'user' => true,
        'tipo_ocorrencia' => true,
        'gravidade' => true,
        'turno' => true,
        'medida' => true,
    ];
}
