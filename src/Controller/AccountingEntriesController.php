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
        $accountingEntries = null;

        $this->loadModel('AccountingEntryType');
        $type= $this->AccountingEntryType
            ->find('list', [
                'keyField' => 'id',
                'valueField' => 'type_name'
            ])
            ->toArray();
        
 
        $this->set(compact('type'));

        $this->loadModel('Events');
        $event= $this->Events
            ->find('list', [
                'keyField' => 'id',
                'valueField' => 'event_name'
            ])
            ->toArray();
        
 
        $this->set(compact('event'));

        $current_user = $this->Authentication->getIdentity();

        if ($current_user->association_id != null) {
            $accountingEntries = $this->AccountingEntries->find()
                ->contain('Associations')
                ->where([
                    'association_id' => $current_user->association_id,
                ])
                ->orderDesc('AccountingEntries.created');
        }
        $accountingEntries= $accountingEntries->toArray();
        $this->set(compact('accountingEntries'));
       

        $accountingEntry = $this->AccountingEntries->newEmptyEntity();

        if ($this->request->is('post')) {

            $accountingEntry = $this->AccountingEntries->patchEntity($accountingEntry, $this->request->getData());
 
            if($this->request->getData('event_id')== -1){
                $accountingEntry->event_id = null;
            }
            $accountingEntry->association_id = $current_user->association_id;
            $accountingEntry->created = (new \DateTime()) ;
            //dd($accountingEntry);
            //dd($this->AccountingEntries->save($accountingEntry));
            if ($this->AccountingEntries->save($accountingEntry)) {
                $this->Flash->success(__('The accounting entry has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The accounting entry could not be saved. Please, try again.'));
        }

        $this->set(compact('accountingEntry'));
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

    public function exportCompta(){
        $this->response = $this->response->withDownload('compta.csv');
        $compta = $this->AccountingEntries->find();

        $header=[
        'association_id',
        'accounting_entry_type_id',
        'event_id',
        'amount',
        'reason',
        'created',
        'updated',
        'association',
        'accounting_entry_type',
        'event',
        ];

        $this->set(compact('compta'));
        $this->viewBuilder()
            ->setClassName('CsvView.Csv')
            ->setOptions([
            'serialize'=>'compta',
            'header'=>$header
            ]);
    }
}
