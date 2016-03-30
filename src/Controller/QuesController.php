<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Ques Controller
 *
 * @property \App\Model\Table\QuesTable $Ques
 */
class QuesController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $ques = $this->paginate($this->Ques);

        $this->set(compact('ques'));
        $this->set('_serialize', ['ques']);
    }

    /**
     * View method
     *
     * @param string|null $id Que id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $que = $this->Ques->get($id, [
            'contain' => []
        ]);

        $this->set('que', $que);
        $this->set('_serialize', ['que']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $que = $this->Ques->newEntity();
        if ($this->request->is('post')) {
            $que = $this->Ques->patchEntity($que, $this->request->data);
            if ($this->Ques->save($que)) {
                $this->Flash->success(__('The que has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The que could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('que'));
        $this->set('_serialize', ['que']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Que id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $que = $this->Ques->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $que = $this->Ques->patchEntity($que, $this->request->data);
            if ($this->Ques->save($que)) {
                $this->Flash->success(__('The que has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The que could not be saved. Please, try again.'));
            }
        }
        $this->set(compact('que'));
        $this->set('_serialize', ['que']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Que id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $que = $this->Ques->get($id);
        if ($this->Ques->delete($que)) {
            $this->Flash->success(__('The que has been deleted.'));
        } else {
            $this->Flash->error(__('The que could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
