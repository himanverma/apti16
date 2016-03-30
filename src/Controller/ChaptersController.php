<?php
namespace App\Controller;

use App\Controller\AppController;

/**
 * Chapters Controller
 *
 * @property \App\Model\Table\ChaptersTable $Chapters
 */
class ChaptersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Subjects', 'Klasses']
        ];
        $chapters = $this->paginate($this->Chapters);

        $this->set(compact('chapters'));
        $this->set('_serialize', ['chapters']);
    }

    /**
     * View method
     *
     * @param string|null $id Chapter id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $chapter = $this->Chapters->get($id, [
            'contain' => ['Subjects', 'Klasses', 'QueSubch']
        ]);

        $this->set('chapter', $chapter);
        $this->set('_serialize', ['chapter']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $chapter = $this->Chapters->newEntity();
        if ($this->request->is('post')) {
            $chapter = $this->Chapters->patchEntity($chapter, $this->request->data);
            if ($this->Chapters->save($chapter)) {
                $this->Flash->success(__('The chapter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chapter could not be saved. Please, try again.'));
            }
        }
        $subjects = $this->Chapters->Subjects->find('list', ['limit' => 200]);
        $klasses = $this->Chapters->Klasses->find('list', ['limit' => 200]);
        $this->set(compact('chapter', 'subjects', 'klasses'));
        $this->set('_serialize', ['chapter']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Chapter id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $chapter = $this->Chapters->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $chapter = $this->Chapters->patchEntity($chapter, $this->request->data);
            if ($this->Chapters->save($chapter)) {
                $this->Flash->success(__('The chapter has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The chapter could not be saved. Please, try again.'));
            }
        }
        $subjects = $this->Chapters->Subjects->find('list', ['limit' => 200]);
        $klasses = $this->Chapters->Klasses->find('list', ['limit' => 200]);
        $this->set(compact('chapter', 'subjects', 'klasses'));
        $this->set('_serialize', ['chapter']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Chapter id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $chapter = $this->Chapters->get($id);
        if ($this->Chapters->delete($chapter)) {
            $this->Flash->success(__('The chapter has been deleted.'));
        } else {
            $this->Flash->error(__('The chapter could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
