<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * QueSubch Controller
 *
 * @property \App\Model\Table\QueSubchTable $QueSubch
 */
class QueSubchController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subchapters', 'Ques', 'Chapters']
        ];
        $queSubch = $this->paginate($this->QueSubch);

        $this->set(compact('queSubch'));
        $this->set('_serialize', ['queSubch']);
    }

    /**
     * View method
     *
     * @param string|null $id Que Subch id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $queSubch = $this->QueSubch->get($id, [
            'contain' => ['Subchapters', 'Ques', 'Chapters']
        ]);

        $this->set('queSubch', $queSubch);
        $this->set('_serialize', ['queSubch']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $queSubch = $this->QueSubch->newEntity();
        if ($this->request->is('post')) {
            $queSubch = $this->QueSubch->patchEntity($queSubch, $this->request->data);
            if ($this->QueSubch->save($queSubch)) {
                $this->Flash->success(__('The que subch has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The que subch could not be saved. Please, try again.'));
            }
        }
        $subchapters = $this->QueSubch->Subchapters->find('list', ['limit' => 200]);
        $ques = $this->QueSubch->Ques->find('list', ['limit' => 200]);
        $chapters = $this->QueSubch->Chapters->find('list', ['limit' => 200]);
        $this->set(compact('queSubch', 'subchapters', 'ques', 'chapters'));
        $this->set('_serialize', ['queSubch']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Que Subch id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $queSubch = $this->QueSubch->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $queSubch = $this->QueSubch->patchEntity($queSubch, $this->request->data);
            if ($this->QueSubch->save($queSubch)) {
                $this->Flash->success(__('The que subch has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The que subch could not be saved. Please, try again.'));
            }
        }
        $subchapters = $this->QueSubch->Subchapters->find('list', ['limit' => 200]);
        $ques = $this->QueSubch->Ques->find('list', ['limit' => 200]);
        $chapters = $this->QueSubch->Chapters->find('list', ['limit' => 200]);
        $this->set(compact('queSubch', 'subchapters', 'ques', 'chapters'));
        $this->set('_serialize', ['queSubch']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Que Subch id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $queSubch = $this->QueSubch->get($id);
        if ($this->QueSubch->delete($queSubch)) {
            $this->Flash->success(__('The que subch has been deleted.'));
        } else {
            $this->Flash->error(__('The que subch could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
