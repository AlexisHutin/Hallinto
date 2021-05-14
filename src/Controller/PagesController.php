<?php
declare(strict_types=1);

/**
 * CakePHP(tm) : Rapid Development Framework (https://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright Copyright (c) Cake Software Foundation, Inc. (https://cakefoundation.org)
 * @link      https://cakephp.org CakePHP(tm) Project
 * @since     0.2.9
 * @license   https://opensource.org/licenses/mit-license.php MIT License
 */
namespace App\Controller;

use Cake\Core\Configure;
use Cake\Http\Exception\ForbiddenException;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Response;
use Cake\View\Exception\MissingTemplateException;
use Cake\ORM\TableRegistry;

/**
 * Static content controller
 *
 * This controller will render views from templates/Pages/
 *
 * @link https://book.cakephp.org/4/en/controllers/pages-controller.html
 */
class PagesController extends AppController
{
    /**
     * Displays a view
     *
     * @param string ...$path Path segments.
     * @return \Cake\Http\Response|null
     * @throws \Cake\Http\Exception\ForbiddenException When a directory traversal attempt.
     * @throws \Cake\View\Exception\MissingTemplateException When the view file could not
     *   be found and in debug mode.
     * @throws \Cake\Http\Exception\NotFoundException When the view file could not
     *   be found and not in debug mode.
     * @throws \Cake\View\Exception\MissingTemplateException In debug mode.
     */
    public function display(string ...$path): ?Response
    {

        $current_user = $this->Authentication->getIdentity();
        $current_asso = $current_user->association_id;

        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));
 
        $query1 = TableRegistry::getTableLocator()->get('Members')
                ->find();
                
        $query1->select(['count' => $query1->func()->count('*')]);
        $query1 = $query1->toArray();

        $this->set(compact('query1'));

        $query2 = TableRegistry::getTableLocator()->get('AccountingEntries')->find();
        $query2->find('all')
                ->where([
                    'association_id' => $current_asso,
                    'association_id IS NOT' => null
                    ]);
        //$query2 = $query2->toArray();
        $this->set(compact('query2'));

        $total=0;
        $arrayAmounts = array();
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
            
        }
        $this->set(compact('total'));
        
        $amounts = json_encode($arrayAmounts, JSON_NUMERIC_CHECK);
        $this->set(compact('amounts'));


        $query3 = TableRegistry::getTableLocator()->get('AccountingEntries')->find();
        $query3->select([
                'AccountingEntries.id', 
                'AccountingEntries.association_id',
                'AccountingEntries.accounting_entry_type_id',
                'AccountingEntries.amount',
                'AccountingEntries.reason',
                'AccountingEntries.created',
                ])
                ->where([
                    'association_id' => $current_asso,
                    'association_id IS NOT' => null
                    ])
                ->limit(7);
        
        $query3->orderDesc('AccountingEntries.created');

        $query3 = $query3->toArray();
        $this->set(compact('query3'));

        //SELECT * FROM associations_events LEFT JOIN events ON associations_events.event_id = events.id WHERE association_id = 1 LIMIT 2
        $query4 = TableRegistry::getTableLocator()->get('Associations')->find()
                ->contain('Events')
                ->where([
                    'Associations.id' => $current_asso,
                    ])
                ->limit(2);
                //->orderDesc('Events.start_date');

        //dd($query4->toArray());
        $query4 = $query4->toArray();
        $this->set(compact('query4'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }

    }

    /*public function home(){
        $current_user = $this->Authentication->getIdentity();
        $current_asso = $current_user->association_id;

        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));
 
        $query1 = TableRegistry::getTableLocator()->get('Members')
                ->find();
                
        $query1->select(['count' => $query1->func()->count('*')]);
        $query1 = $query1->toArray();

        $this->set(compact('query1'));

        $query2 = TableRegistry::getTableLocator()->get('AccountingEntries')->find();
        $query2->find('all')
                ->where([
                    'association_id' => $current_asso,
                    'association_id IS NOT' => null
                    ]);
        //$query2 = $query2->toArray();
        $this->set(compact('query2'));

        $total=0;
        foreach ($query2 as $amount) {
            if($amount['accounting_entry_type_id'] == 2){
                $total = $total - $amount['amount'];
            }elseif($amount['accounting_entry_type_id'] == 1){
                $total = $total + $amount['amount'];
            }
            
        }
        $this->set(compact('total'));

        $arrayAmounts = array();
        foreach ($query2 as $amount) {
            if($amount['accounting_entry_type_id'] == 2){
                array_push($arrayAmounts , '-'.$amount['amount']); 
            }elseif($amount['accounting_entry_type_id'] == 1){
                array_push($arrayAmounts , '+'.$amount['amount']); 
            }
             
        }
        
        $amounts = json_encode($arrayAmounts, JSON_NUMERIC_CHECK);
        $this->set(compact('amounts'));


        $query3 = TableRegistry::getTableLocator()->get('AccountingEntries')->find();
        $query3->select([
                'AccountingEntries.id', 
                'AccountingEntries.association_id',
                'AccountingEntries.accounting_entry_type_id',
                'AccountingEntries.amount',
                'AccountingEntries.reason',
                'AccountingEntries.created',
                ])
                ->where([
                    'association_id' => $current_asso,
                    'association_id IS NOT' => null
                    ])
                ->limit(7);
        
        $query3->orderDesc('AccountingEntries.created');

        $query3 = $query3->toArray();
        $this->set(compact('query3'));

        //SELECT * FROM associations_events LEFT JOIN events ON associations_events.event_id = events.id WHERE association_id = 1 LIMIT 2
        $query4 = TableRegistry::getTableLocator()->get('Associations')->find()
                ->contain('Events')
                ->where([
                    'Associations.id' => $current_asso,
                    ])
                ->limit(2);
                //->orderDesc('Events.start_date');

        //dd($query4->toArray());
        $query4 = $query4->toArray();
        $this->set(compact('query4'));

    }

    public function display(string ...$path): ?Response
    {
        $this->home();
        if (!$path) {
            return $this->redirect('/');
        }
        if (in_array('..', $path, true) || in_array('.', $path, true)) {
            throw new ForbiddenException();
        }
        $page = $subpage = null;

        if (!empty($path[0])) {
            $page = $path[0];
        }
        if (!empty($path[1])) {
            $subpage = $path[1];
        }
        $this->set(compact('page', 'subpage'));

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }*/

}
