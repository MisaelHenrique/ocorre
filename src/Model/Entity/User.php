<?php

namespace App\Model\Entity;

use Cake\Auth\DefaultPasswordHasher;
use Cake\ORM\Entity;

/**
 * User Entity
 *
 * @property int $id
 * @property string $matricula
 * @property string $name
 * @property string $cargo
 * @property string $email
 * @property string $username
 * @property string $password
 * @property string|null $cod_val_email
 * @property string|null $recuperar_senha
 * @property int|null $email_val
 * @property string|null $imagem
 * @property \Cake\I18n\FrozenTime $created
 * @property \Cake\I18n\FrozenTime|null $modified
 */
class User extends Entity
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
        'name' => true,
        'cargo' => true,
        'email' => true,
        'username' => true,
        'password' => true,
        'cod_val_email' => true,
        'recuperar_senha' => true,
        'email_val' => true,
        'imagem' => true,
        'created' => true,
        'modified' => true,
    ];

    /**
     * Fields that are excluded from JSON versions of the entity.
     *
     * @var array
     */
    protected $_hidden = [
        'password',
    ];

    protected function _setPassword($password)
    {

        if (strlen($password) > 0) {
            return (new DefaultPasswordHasher)->hash($password);
        }
    }
}
