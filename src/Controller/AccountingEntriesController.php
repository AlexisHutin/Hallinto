<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * AccountingEntries Controller
 *
 * @property \App\Model\Table\AccountingEntriesTable $AccountingEntries
 * @method \App\Model\Entity\AccountingEntry[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class AccountingEntriesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $accountingEntries = $this->paginate($this->AccountingEntries);

        $this->set(compact('accountingEntries'));
    }

    /**
     * View method
     *
     * @param string|null $id Accounting Entry id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $accountingEntry = $this->AccountingEntries->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('accountingEntry'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $accountingEntry = $this->AccountingEntries->newEmptyEntity();
        if ($this->request->is('post')) {
            $accountingEntry = $this->AccountingEntries->patchEntity($accountingEntry, $this->request->getData());
            if ($this->AccountingEntries->save($accountingEntry)) {
                $this->Flash->success(__('The accounting entry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting entry could not be saved. Please, try again.'));
        }
        $this->set(compact('accountingEntry'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Accounting Entry id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $accountingEntry = $this->AccountingEntries->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $accountingEntry = $this->AccountingEntries->patchEntity($accountingEntry, $this->request->getData());
            if ($this->AccountingEntries->save($accountingEntry)) {
                $this->Flash->success(__('The accounting entry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting entry could not be saved. Please, try again.'));
        }
        $this->set(compact('accountingEntry'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Accounting Entry id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $accountingEntry = $this->AccountingEntries->get($id);
        if ($this->AccountingEntries->delete($accountingEntry)) {
            $this->Flash->success(__('The accounting entry has been deleted.'));
        } else {
            $this->Flash->error(__('The accounting entry could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
