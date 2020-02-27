<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class EstatisticasController extends AppController{

    public function index(){

        $this->loadModel('Gravidades');
        $gravidades = $this->Gravidades->find('list', [
            'keyField' => 'gravidades',
            'valueField' => 'gravidade',
            'fields'=>[
                'gravidade' => ''            ]
        ]);

    }

}