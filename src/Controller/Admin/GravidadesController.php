<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * Gravidades Controller
 *
 * @property \App\Model\Table\GravidadesTable $Gravidades
 *
 * @method \App\Model\Entity\Gravidade[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class GravidadesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $gravidades = $this->paginate($this->Gravidades);

        $this->set(compact('gravidades'));
    }

    /**
     * View method
     *
     * @param string|null $id Gravidade id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $gravidade = $this->Gravidades->get($id, [
            'contain' => ['Ocorrencias', 'TipoOcorrencias'],
        ]);

        $this->set('gravidade', $gravidade);
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $gravidade = $this->Gravidades->newEntity();
        if ($this->request->is('post')) {
            $gravidade = $this->Gravidades->patchEntity($gravidade, $this->request->getData());
            if ($this->Gravidades->save($gravidade)) {
                $this->Flash->success(__('Gravidade adicionado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('ERRO: Gravidade não adicionada com sucesso.'));
        }
        $this->set(compact('gravidade'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Gravidade id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $gravidade = $this->Gravidades->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $gravidade = $this->Gravidades->patchEntity($gravidade, $this->request->getData());
            if ($this->Gravidades->save($gravidade)) {
                $this->Flash->success(__('Gravidade editada com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('ERRO: Gravidade não editado com sucesso.'));
        }
        $this->set(compact('gravidade'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Gravidade id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $gravidade = $this->Gravidades->get($id);
        if ($this->Gravidades->delete($gravidade)) {
            $this->Flash->success(__('Gravidade deletada com sucesso.'));
        } else {
            $this->Flash->danger(__('ERRO: Gravidade não deletada com sucesso.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
