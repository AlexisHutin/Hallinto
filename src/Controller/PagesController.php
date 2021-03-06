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

use Cake\I18n\Time;
use Cake\Http\Response;
use Cake\Core\Configure;
use Cake\ORM\TableRegistry;
use Cake\Http\Exception\NotFoundException;
use Cake\Http\Exception\ForbiddenException;
use Cake\View\Exception\MissingTemplateException;

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

        $this->loadModel('Events');
        $event = $this->Events->newEmptyEntity();
        $this->set(compact('event'));

        $this->loadModel('Members');
        $member = $this->Members->newEmptyEntity();
        $this->set(compact('member'));

        $this->loadModel('AccountingEntries');
        $accountingEntry = $this->AccountingEntries->newEmptyEntity();
        $this->set(compact('accountingEntry'));

        $query1 = $this->Members->find();

        $query1->select(['count' => $query1->func()->count('*')]);
        $query1 = $query1->toArray();

        $this->set(compact('query1'));

        $query2 = $this->AccountingEntries->find();
        $query2->find('all')
            ->where([
                'association_id' => $current_asso,
                'association_id IS NOT' => null
            ]);
        //$query2 = $query2->toArray();
        $this->set(compact('query2'));

        $total = 0;
        $arrayAmounts = array();
        foreach ($query2->toArray() as $amount) {
            if ($amount->accounting_entry_type_id == 2) {
                $total = $total - $amount->amount;
                $total = round($total, 2, PHP_ROUND_HALF_UP);
                array_push($arrayAmounts, $total);
            } elseif (
                $amount->accounting_entry_type_id == 1
                || $amount->accounting_entry_type_id == 4
            ) {
                $total = $total + $amount->amount;
                $total = round($total, 2, PHP_ROUND_HALF_UP);
                array_push($arrayAmounts, $total);
            }
        }
        $this->set(compact('total'));

        $amounts = json_encode($arrayAmounts, JSON_NUMERIC_CHECK);
        $this->set(compact('amounts'));


        $query3 = $this->AccountingEntries->find();
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

        $this->loadModel('Associations');
        //SELECT * FROM associations_events LEFT JOIN events ON associations_events.event_id = events.id WHERE association_id = 1 LIMIT 2
        $query4 = $this->Associations->find()
            ->contain('Events')
            ->where([
                'Associations.id' => $current_asso,
            ])
            ->limit(2);
        //->orderDesc('Events.start_date');

        //dd($query4->toArray());
        $query4 = $query4->toArray();
        $this->set(compact('query4'));

        $events = $this->Events
            ->find('list', [
                'keyField' => 'id',
                'valueField' => 'event_name'
            ])
            ->toArray();
        $this->set(compact('events'));

        $this->loadModel('AccountingEntryType');
        $type = $this->AccountingEntryType
            ->find('list', [
                'keyField' => 'id',
                'valueField' => 'type_name'
            ])
            ->toArray();

        $this->set(compact('type'));

        $this->loadModel('EventTypes');

        $eventTypes = $this->EventTypes->find('list', [
            'keyField' => 'id',
            'valueField' => 'name'
        ]);

        $eventTypes = $eventTypes->toArray();

        $this->set(compact('eventTypes'));

        if ($this->request->is('post')) {
            if (array_key_exists('add_member', $this->request->getData())) {
                $member = $this->Members->patchEntity($member, $this->request->getData());
                $member->association_id = $current_user->association_id;
                $member->inscription_date = Time::now();
    
                if ($this->Members->save($member)) {
                    $this->Flash->success(__('The member has been saved.'));
    
                    return $this->redirect(['action' => 'home']);
                }
                $this->Flash->error(__('The member could not be saved. Please, try again.'));
            }
            if (array_key_exists('add_accounting_entry', $this->request->getData())) {
                $accountingEntry = $this->AccountingEntries->patchEntity($accountingEntry, $this->request->getData());

                if ($this->request->getData('event_id') == -1) {
                    $accountingEntry->event_id = null;
                }
                $accountingEntry->association_id = $current_user->association_id;
                $accountingEntry->created = (new \DateTime());
                if ($this->AccountingEntries->save($accountingEntry)) {
                    $this->Flash->success(__('The accounting entry has been saved.'));

                    return $this->redirect(['action' => 'home']);
                }
                $this->Flash->error(__('The accounting entry could not be saved. Please, try again.'));
            }
            if (array_key_exists('add_event', $this->request->getData())) {
                $event = $this->Events->patchEntity($event, $this->request->getData());

                if ($this->Events->save($event)) {
                    $this->Flash->success(__('The event has been saved.'));

                    return $this->redirect(['action' => 'home']);
                }
                $this->Flash->error(__('The event could not be saved. Please, try again.'));
            }
        }

        try {
            return $this->render(implode('/', $path));
        } catch (MissingTemplateException $exception) {
            if (Configure::read('debug')) {
                throw $exception;
            }
            throw new NotFoundException();
        }
    }

    
}
