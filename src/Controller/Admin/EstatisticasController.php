<?php

namespace App\Controller\Admin;

use App\Controller\AppController;

class EstatisticasController extends AppController{

    public function index(){

        $gravidade = ['nula', 'leve','media','grave','gravissima'];
        $this->set(['gravidades' => $gravidade]);
    }

}