<?php

declare(strict_types=1);

namespace App\Controller;

/**
 * Members Controller
 *
 * @property \App\Model\Table\MembersTable $Members
 * @method \App\Model\Entity\Member[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class MembersController extends AppController
{

    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $members = null;

        $current_user = $this->Authentication->getIdentity();

        if ($current_user->association_id != null) {
            $members = $this->Members->find()
                ->contain('Associations')
                ->where([
                    'association_id' => $current_user->association_id,
                ]);
        }
        $this->set(compact('members'));
    }

    /**
     * View method
     *
     * @param string|null $id Member id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $member = $this->Members->get($id, [
            'contain' => ['Associations'],
        ]);

        $this->set(compact('member'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $member = $this->Members->newEmptyEntity();
        if ($this->request->is('post')) {
            $member = $this->Members->patchEntity($member, $this->request->getData());
            if ($this->Members->save($member)) {
                $this->Flash->success(__('The member has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The member could not be saved. Please, try again.'));
        }
        $associations = $this->Members->Associations->find('list', ['limit' => 200]);
        $this->set(compact('member', 'associations'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Member id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $member = $this->Members->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $member = $this->Members->patchEntity($member, $this->request->getData());
            if ($this->Members->save($member)) {
                $this->Flash->success(__('The member has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The member could not be saved. Please, try again.'));
        }
        $associations = $this->Members->Associations->find('list', ['limit' => 200]);
        $this->set(compact('member', 'associations'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Member id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $member = $this->Members->get($id);
        if ($this->Members->delete($member)) {
            $this->Flash->success(__('The member has been deleted.'));
        } else {
            $this->Flash->error(__('The member could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }

    public function importMembers()
    {
        $csvFile = fopen(ROOT . DS . 'file' . DS . 'csv' . DS . 'members' . DS . 'user.csv', 'r');

        while (($row = fgetcsv($csvFile, 0, ",")) !== FALSE) {
            dd($row);
        }
        
    }

    public function exportMembers()
    {
        $this->response = $this->response->withDownload('user.csv');
        $members = $this->Members->find();

        $header = [
            'id',
            'first_name',
            'last_name',
            'birth_date',
            'email',
            'phone_number',
            'contribution_is_paid',
            'association_id',
            'inscription_date',
            'created',
            'updated',
        ];

        $this->set(compact('members'));
        $this->viewBuilder()
        ->setClassName('CsvView.Csv')
        ->setOptions([
            'serialize' => 'members',
            'header' => $header,
        ]);
    }
}
