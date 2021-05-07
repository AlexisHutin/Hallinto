<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Associations Controller
 *
 * @property \App\Model\Table\AssociationsTable $Associations
 * @method \App\Model\Entity\Association[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AssociationsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $associations = $this->paginate($this->Associations);

        $this->set(compact('associations'));
    }

    /**
     * View method
     *
     * @param string|null $id Association id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $association = $this->Associations->get($id, [
            'contain' => ['Events', 'AccountingEntries', 'Members', 'Statistics', 'Users'],
        ]);

        $this->set(compact('association'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $association = $this->Associations->newEmptyEntity();
        if ($this->request->is('post')) {
            $association = $this->Associations->patchEntity($association, $this->request->getData());
            if ($this->Associations->save($association)) {
                $this->Flash->success(__('The association has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The association could not be saved. Please, try again.'));
        }
        $events = $this->Associations->Events->find('list', ['limit' => 200]);
        $this->set(compact('association', 'events'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Association id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $association = $this->Associations->get($id, [
            'contain' => ['Events'],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $association = $this->Associations->patchEntity($association, $this->request->getData());
            if ($this->Associations->save($association)) {
                $this->Flash->success(__('The association has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The association could not be saved. Please, try again.'));
        }
        $events = $this->Associations->Events->find('list', ['limit' => 200]);
        $this->set(compact('association', 'events'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Association id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $association = $this->Associations->get($id);
        if ($this->Associations->delete($association)) {
            $this->Flash->success(__('The association has been deleted.'));
        } else {
            $this->Flash->error(__('The association could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
