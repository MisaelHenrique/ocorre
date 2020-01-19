<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * TipoOcorrencias Controller
 *
 * @property \App\Model\Table\TipoOcorrenciasTable $TipoOcorrencias
 *
 * @method \App\Model\Entity\TipoOcorrencia[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class TipoOcorrenciasController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $tipoOcorrencias = $this->paginate($this->TipoOcorrencias);

        $this->set(compact('tipoOcorrencias'));
    }

    /**
     * View method
     *
     * @param string|null $id Tipo Ocorrencia id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $tipoOcorrencia = $this->TipoOcorrencias->get($id, [
            'contain' => ['Ocorrencias'],
        ]);

        $this->set('tipoOcorrencia', $tipoOcorrencia);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $tipoOcorrencia = $this->TipoOcorrencias->newEntity();
        if ($this->request->is('post')) {
            $tipoOcorrencia = $this->TipoOcorrencias->patchEntity($tipoOcorrencia, $this->request->getData());
            if ($this->TipoOcorrencias->save($tipoOcorrencia)) {
                $this->Flash->success(__('The tipo ocorrencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo ocorrencia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoOcorrencia'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Tipo Ocorrencia id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $tipoOcorrencia = $this->TipoOcorrencias->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $tipoOcorrencia = $this->TipoOcorrencias->patchEntity($tipoOcorrencia, $this->request->getData());
            if ($this->TipoOcorrencias->save($tipoOcorrencia)) {
                $this->Flash->success(__('The tipo ocorrencia has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The tipo ocorrencia could not be saved. Please, try again.'));
        }
        $this->set(compact('tipoOcorrencia'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Tipo Ocorrencia id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $tipoOcorrencia = $this->TipoOcorrencias->get($id);
        if ($this->TipoOcorrencias->delete($tipoOcorrencia)) {
            $this->Flash->success(__('The tipo ocorrencia has been deleted.'));
        } else {
            $this->Flash->error(__('The tipo ocorrencia could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
