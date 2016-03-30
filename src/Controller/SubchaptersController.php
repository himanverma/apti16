<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Subchapters Controller
 *
 * @property \App\Model\Table\SubchaptersTable $Subchapters
 */
class SubchaptersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Chapters']
        ];
        $subchapters = $this->paginate($this->Subchapters);

        $this->set(compact('subchapters'));
        $this->set('_serialize', ['subchapters']);
    }

    /**
     * View method
     *
     * @param string|null $id Subchapter id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $subchapter = $this->Subchapters->get($id, [
            'contain' => ['Chapters', 'QueSubch']
        ]);

        $this->set('subchapter', $subchapter);
        $this->set('_serialize', ['subchapter']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $subchapter = $this->Subchapters->newEntity();
        if ($this->request->is('post')) {
            $subchapter = $this->Subchapters->patchEntity($subchapter, $this->request->data);
            if ($this->Subchapters->save($subchapter)) {
                $this->Flash->success(__('The subchapter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subchapter could not be saved. Please, try again.'));
            }
        }
        $chapters = $this->Subchapters->Chapters->find('list', ['limit' => 200]);
        $this->set(compact('subchapter', 'chapters'));
        $this->set('_serialize', ['subchapter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Subchapter id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $subchapter = $this->Subchapters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $subchapter = $this->Subchapters->patchEntity($subchapter, $this->request->data);
            if ($this->Subchapters->save($subchapter)) {
                $this->Flash->success(__('The subchapter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The subchapter could not be saved. Please, try again.'));
            }
        }
        $chapters = $this->Subchapters->Chapters->find('list', ['limit' => 200]);
        $this->set(compact('subchapter', 'chapters'));
        $this->set('_serialize', ['subchapter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Subchapter id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $subchapter = $this->Subchapters->get($id);
        if ($this->Subchapters->delete($subchapter)) {
            $this->Flash->success(__('The subchapter has been deleted.'));
        } else {
            $this->Flash->error(__('The subchapter could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
