<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Ocorrencias Controller
 *
 * @property \App\Model\Table\OcorrenciasTable $Ocorrencias
 *
 * @method \App\Model\Entity\Ocorrencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class OcorrenciasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index() {
        $this->paginate = [
            'limit' => 40,
            'contain' => ['Alunos', 'Users', 'TipoOcorrencias', 'TipoOcorrencias.Gravidades', 'Turnos', 'Medidas'],
            'order' => ['Ocorrencias.data DESC']        ];
        
        $ocorrencias = $this->paginate($this->Ocorrencias->find('all', [

        ]));

        $this->set(compact('ocorrencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $ocorrencia = $this->Ocorrencias->get($id, [
            'contain' => ['Alunos', 'Alunos.Cursos', 'Users', 'TipoOcorrencias', 'TipoOcorrencias.Gravidades', 'Turnos', 'Medidas'],
        ]);

        $this->set('ocorrencia', $ocorrencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $ocorrencia = $this->Ocorrencias->newEntity();
        if ($this->request->is('post')) {
            
            $ocorrencia = $this->Ocorrencias->patchEntity($ocorrencia, $this->request->getData());
            $this->loadComponent('Auth');
            $ocorrencia['user_id'] = $this->Auth->user('id');
            if ($this->Ocorrencias->save($ocorrencia)) {
                $this->Flash->success(__('Ocorrencia adicionada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('ERRO: Ocorrencia não adicionada com sucesso.'));
        }
        $alunos = $this->Ocorrencias->Alunos->find('list', ['limit' => 200]);
        $users = $this->Ocorrencias->Users->find('list', ['limit' => 200]);
        $tipoOcorrencias = $this->Ocorrencias->TipoOcorrencias->find('list', ['limit' => 200]);
        $turnos = $this->Ocorrencias->Turnos->find('list', ['limit' => 200]);
        $medidas = $this->Ocorrencias->Medidas->find('list', ['limit' => 200]);
        $this->set(compact('ocorrencia', 'alunos', 'users', 'tipoOcorrencias', 'turnos', 'medidas'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $ocorrencia = $this->Ocorrencias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $ocorrencia = $this->Ocorrencias->patchEntity($ocorrencia, $this->request->getData());
            if ($this->Ocorrencias->save($ocorrencia)) {
                $this->Flash->success(__('Ocorrencia editada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('ERRO: Ocorrencia não editada com sucesso.'));
        }
        $alunos = $this->Ocorrencias->Alunos->find('list', ['limit' => 200]);
        $users = $this->Ocorrencias->Users->find('list', ['limit' => 200]);
        $tipoOcorrencias = $this->Ocorrencias->TipoOcorrencias->find('list', ['limit' => 200]);
        $turnos = $this->Ocorrencias->Turnos->find('list', ['limit' => 200]);
        $medidas = $this->Ocorrencias->Medidas->find('list', ['limit' => 200]);
        $this->set(compact('ocorrencia', 'alunos', 'users', 'tipoOcorrencias', 'turnos', 'medidas'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Ocorrencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $ocorrencia = $this->Ocorrencias->get($id);
        if ($this->Ocorrencias->delete($ocorrencia)) {
            $this->Flash->success(__('Ocorrencia deletada com sucesso.'));
        } else {
            $this->Flash->error(__('ERRO: Ocorrencia não deletada com sucesso.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
