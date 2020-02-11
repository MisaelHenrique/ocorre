<?php
namespace App\Model\Entity;

use Cake\ORM\Entity;

/**
 * Aluno Entity
 *
 * @property int $id
 * @property string $matricula
 * @property string $nome
 * @property int $sexo
 * @property \Cake\I18n\FrozenDate $data_nasc
 * @property int $curso_id
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 *
 * @property \App\Model\Entity\Curso $curso
 * @property \App\Model\Entity\Ocorrencia[] $ocorrencias
 */
class Aluno extends Entity
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
        'matricula' => true,
        'nome' => true,
        'sexo' => true,
        'data_nasc' => true,
        'curso_id' => true,
        'created' => true,
        'modified' => true,
        'curso' => true,
        'ocorrencias' => true,
    ];
}
