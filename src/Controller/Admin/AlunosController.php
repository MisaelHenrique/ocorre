<?php
namespace App\Controller\Admin;

use App\Controller\AppController;
use Cake\ORM\TableRegistry;
use Cake\ORM\Query;

/**
 * Alunos Controller
 *
 * @property \App\Model\Table\AlunosTable $Alunos
 *
 * @method \App\Model\Entity\Aluno[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AlunosController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'limit' => 40,
            'contain' => ['Cursos'],
            'order' => ['Alunos.nome']
        ];
        $alunos = $this->paginate($this->Alunos);

        $this->set(compact('alunos'));
    }

    /**
     * View method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {

        $aluno = $this->Alunos->get($id, [
            'contain' => ['Cursos', 'Ocorrencias', 'Ocorrencias.Turnos', 'Ocorrencias.Medidas', 'Ocorrencias.TipoOcorrencias', 'Ocorrencias.TipoOcorrencias.Gravidades'],
        ]);

        $this->set('aluno', $aluno);


    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        
        $aluno = $this->Alunos->newEntity();
        
        if ($this->request->is('post')) {
            $aluno = $this->Alunos->patchEntity($aluno, $this->request->getData());
           
            if ($this->Alunos->save($aluno)) {
                $this->Flash->success(__('Aluno adicionado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->danger(__('ERRO: Aluno não adicionado com sucesso.'));
        }
        $cursos = $this->Alunos->Cursos->find('list', ['limit' => 200]);
        $this->set(compact('aluno', 'cursos'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $aluno = $this->Alunos->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $aluno = $this->Alunos->patchEntity($aluno, $this->request->getData());
            if ($this->Alunos->save($aluno)) {
                $this->Flash->success(__('Aluno editado com sucesso.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('ERRO: Aluno não editado com sucesso.'));
        }
        $cursos = $this->Alunos->Cursos->find('list', ['limit' => 200]);
        $this->set(compact('aluno', 'cursos'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Aluno id.
     * @return \Cake\Http\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $aluno = $this->Alunos->get($id);
        if ($this->Alunos->delete($aluno)) {
            $this->Flash->success(__('Aluno deletado com sucesso.'));
        } else {
            $this->Flash->error(__('ERRO: Aluno não editado com sucesso.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
