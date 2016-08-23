<?php
namespace App\Controller\Admin;

use App\Controller\AppController;

/**
 * HobbyUsers Controller
 *
 * @property \App\Model\Table\HobbyUsersTable $HobbyUsers
 */
class HobbyUsersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Network\Response|null
     */
    public function index()
    {
        $this->paginate = [
            'contain' => ['Hobbies', 'Users']
        ];
        $hobbyUsers = $this->paginate($this->HobbyUsers);

        $this->set(compact('hobbyUsers'));
        $this->set('_serialize', ['hobbyUsers']);
    }

    /**
     * View method
     *
     * @param string|null $id Hobby User id.
     * @return \Cake\Network\Response|null
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $hobbyUser = $this->HobbyUsers->get($id, [
            'contain' => ['Hobbies', 'Users']
        ]);

        $this->set('hobbyUser', $hobbyUser);
        $this->set('_serialize', ['hobbyUser']);
    }

    /**
     * Add method
     *
     * @return \Cake\Network\Response|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $hobbyUser = $this->HobbyUsers->newEntity();
        if ($this->request->is('post')) {
            $hobbyUser = $this->HobbyUsers->patchEntity($hobbyUser, $this->request->data);
            if ($this->HobbyUsers->save($hobbyUser)) {
                $this->Flash->success(__('The hobby user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hobby user could not be saved. Please, try again.'));
            }
        }
        $hobbies = $this->HobbyUsers->Hobbies->find('list', ['limit' => 200]);
        $users = $this->HobbyUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('hobbyUser', 'hobbies', 'users'));
        $this->set('_serialize', ['hobbyUser']);
    }

    /**
     * Edit method
     *
     * @param string|null $id Hobby User id.
     * @return \Cake\Network\Response|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Network\Exception\NotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $hobbyUser = $this->HobbyUsers->get($id, [
            'contain' => []
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $hobbyUser = $this->HobbyUsers->patchEntity($hobbyUser, $this->request->data);
            if ($this->HobbyUsers->save($hobbyUser)) {
                $this->Flash->success(__('The hobby user has been saved.'));
                return $this->redirect(['action' => 'index']);
            } else {
                $this->Flash->error(__('The hobby user could not be saved. Please, try again.'));
            }
        }
        $hobbies = $this->HobbyUsers->Hobbies->find('list', ['limit' => 200]);
        $users = $this->HobbyUsers->Users->find('list', ['limit' => 200]);
        $this->set(compact('hobbyUser', 'hobbies', 'users'));
        $this->set('_serialize', ['hobbyUser']);
    }

    /**
     * Delete method
     *
     * @param string|null $id Hobby User id.
     * @return \Cake\Network\Response|null Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $hobbyUser = $this->HobbyUsers->get($id);
        if ($this->HobbyUsers->delete($hobbyUser)) {
            $this->Flash->success(__('The hobby user has been deleted.'));
        } else {
            $this->Flash->error(__('The hobby user could not be deleted. Please, try again.'));
        }
        return $this->redirect(['action' => 'index']);
    }
}
