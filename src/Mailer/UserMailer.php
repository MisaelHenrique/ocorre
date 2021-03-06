<?php
namespace App\Mailer;

use Cake\Mailer\Mailer;

/**
 * User mailer.
 */
class UserMailer extends Mailer
{
    /**
     * Mailer's name.
     *
     * @var string
     */
    public static $name = 'User';

    public function cadastroUser($user){

        $this->setTo($user->email)
        ->setProfile('envemail')
        ->setEmailFormat('html')
        ->setTemplate('welcome')
        ->setLayout('user')
        ->setViewVars(['name' => $user->name, 'cod_val_email' => $user->cod_val_email, 'host_name' => $user->host_name])
        ->setSubject(sprintf('Confime o seu e-mail'));
    }

    public function recuperarSenha($user){

        $this->setTo($user->email)
        ->setProfile('default')
        ->setEmailFormat('html')
        ->setTemplate('recuperar_senha')
        ->setLayout('user')
        ->setviewVars(['name' => $user->name,'username' => $user->username, 'host_name' => $user->host_name, 'recuperar_senha' => $user->recuperar_senha])
        ->setSubject(sprintf('Recuperar Senha'));
    }
}
