<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Statistics Controller
 *
 * @method \App\Model\Entity\Statistic[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatisticsController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        /*$statistics = $this->paginate($this->Statistics);

        $this->set(compact('statistics'));*/

        $current_user = $this->Authentication->getIdentity();
        $current_asso = $current_user->association_id;

        $this->loadModel('AccountingEntries');
        $query2=$this->AccountingEntries->find('all')
                ->where([
                    'association_id' => $current_asso,
                    'association_id IS NOT' => null
                    ]);

        //dd($query2->toArray());
        $this->set(compact('query2'));

        $total=0;
        $arrayAmounts = array();
        $dates = array();
        foreach ($query2->toArray() as $amount) {
            if($amount->accounting_entry_type_id == 2){
                $total = $total - $amount->amount;
                $total = round($total,2,PHP_ROUND_HALF_UP);
                array_push($arrayAmounts, $total);
            }elseif($amount->accounting_entry_type_id == 1
            ||$amount->accounting_entry_type_id == 4){
                $total = $total + $amount->amount;
                $total = round($total,2,PHP_ROUND_HALF_UP);
                array_push($arrayAmounts, $total);
            }   
            array_push($dates,$amount->created);
        }
        $this->set(compact('total'));
        $datesJson = json_encode($dates);
        $this->set(compact('datesJson'));

        $arrayOperations = array();
        foreach ($query2 as $amount) {
            if($amount['accounting_entry_type_id'] == 2){
                array_push($arrayOperations, '-'.$amount['amount']); 
            }elseif($amount['accounting_entry_type_id'] == 1
            ||$amount->accounting_entry_type_id == 4){
                array_push($arrayOperations , '+'.$amount['amount']); 
            }
        }
           
        $amounts = json_encode($arrayAmounts);
        $operations = json_encode($arrayOperations, JSON_NUMERIC_CHECK);
        $this->set(compact('amounts'));
        $this->set(compact('operations'));

        //Get 
    }

    /**
     * View method
     *
     * @param string|null $id Statistic id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statistic = $this->Statistics->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('statistic'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statistic = $this->Statistics->newEmptyEntity();
        if ($this->request->is('post')) {
            $statistic = $this->Statistics->patchEntity($statistic, $this->request->getData());
            if ($this->Statistics->save($statistic)) {
                $this->Flash->success(__('The statistic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statistic could not be saved. Please, try again.'));
        }
        $this->set(compact('statistic'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Statistic id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statistic = $this->Statistics->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statistic = $this->Statistics->patchEntity($statistic, $this->request->getData());
            if ($this->Statistics->save($statistic)) {
                $this->Flash->success(__('The statistic has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statistic could not be saved. Please, try again.'));
        }
        $this->set(compact('statistic'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Statistic id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statistic = $this->Statistics->get($id);
        if ($this->Statistics->delete($statistic)) {
            $this->Flash->success(__('The statistic has been deleted.'));
        } else {
            $this->Flash->error(__('The statistic could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
