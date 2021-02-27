<?php
declare(strict_types=1);

namespace App\Controller;

/**
 * Statistiques Controller
 *
 * @property \App\Model\Table\StatistiquesTable $Statistiques
 * @method \App\Model\Entity\Statistique[]|\Cake\Datasource\ResultSetInterface paginate($object = null, array $settings = [])
 */
class StatistiquesController extends AppController
{
    /**
     * Index method
     *
     * @return \Cake\Http\Response|null|void Renders view
     */
    public function index()
    {
        $statistiques = $this->paginate($this->Statistiques);

        $this->set(compact('statistiques'));
    }

    /**
     * View method
     *
     * @param string|null $id Statistique id.
     * @return \Cake\Http\Response|null|void Renders view
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function view($id = null)
    {
        $statistique = $this->Statistiques->get($id, [
            'contain' => [],
        ]);

        $this->set(compact('statistique'));
    }

    /**
     * Add method
     *
     * @return \Cake\Http\Response|null|void Redirects on successful add, renders view otherwise.
     */
    public function add()
    {
        $statistique = $this->Statistiques->newEmptyEntity();
        if ($this->request->is('post')) {
            $statistique = $this->Statistiques->patchEntity($statistique, $this->request->getData());
            if ($this->Statistiques->save($statistique)) {
                $this->Flash->success(__('The statistique has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statistique could not be saved. Please, try again.'));
        }
        $this->set(compact('statistique'));
    }

    /**
     * Edit method
     *
     * @param string|null $id Statistique id.
     * @return \Cake\Http\Response|null|void Redirects on successful edit, renders view otherwise.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function edit($id = null)
    {
        $statistique = $this->Statistiques->get($id, [
            'contain' => [],
        ]);
        if ($this->request->is(['patch', 'post', 'put'])) {
            $statistique = $this->Statistiques->patchEntity($statistique, $this->request->getData());
            if ($this->Statistiques->save($statistique)) {
                $this->Flash->success(__('The statistique has been saved.'));

                return $this->redirect(['action' => 'index']);
            }
            $this->Flash->error(__('The statistique could not be saved. Please, try again.'));
        }
        $this->set(compact('statistique'));
    }

    /**
     * Delete method
     *
     * @param string|null $id Statistique id.
     * @return \Cake\Http\Response|null|void Redirects to index.
     * @throws \Cake\Datasource\Exception\RecordNotFoundException When record not found.
     */
    public function delete($id = null)
    {
        $this->request->allowMethod(['post', 'delete']);
        $statistique = $this->Statistiques->get($id);
        if ($this->Statistiques->delete($statistique)) {
            $this->Flash->success(__('The statistique has been deleted.'));
        } else {
            $this->Flash->error(__('The statistique could not be deleted. Please, try again.'));
        }

        return $this->redirect(['action' => 'index']);
    }
}
