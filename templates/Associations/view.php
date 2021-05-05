<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Association $association
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Association'), ['action' => 'edit', $association->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Association'), ['action' => 'delete', $association->id], ['confirm' => __('Are you sure you want to delete # {0}?', $association->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Associations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Association'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="associations view content">
            <h3><?= h($association->name) ?></h3>
            <table>
                <tr>
                    <th><?= __('Name') ?></th>
                    <td><?= h($association->name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Association Type') ?></th>
                    <td><?= h($association->association_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Email') ?></th>
                    <td><?= h($association->email) ?></td>
                </tr>
                <tr>
                    <th><?= __('RNA Number') ?></th>
                    <td><?= h($association->RNA_number) ?></td>
                </tr>
                <tr>
                    <th><?= __('Plan Type') ?></th>
                    <td><?= h($association->plan_type) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image Name') ?></th>
                    <td><?= h($association->image_name) ?></td>
                </tr>
                <tr>
                    <th><?= __('Image Path') ?></th>
                    <td><?= h($association->image_path) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($association->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($association->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($association->updated) ?></td>
                </tr>
            </table>
            <div class="text">
                <strong><?= __('Adresse') ?></strong>
                <blockquote>
                    <?= $this->Text->autoParagraph(h($association->adresse)); ?>
                </blockquote>
            </div>
            <div class="related">
                <h4><?= __('Related Events') ?></h4>
                <?php if (!empty($association->events)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Event Name') ?></th>
                            <th><?= __('Start Date') ?></th>
                            <th><?= __('End Date') ?></th>
                            <th><?= __('Start Time') ?></th>
                            <th><?= __('End Time') ?></th>
                            <th><?= __('Location') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th><?= __('Event Type Id') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($association->events as $events) : ?>
                        <tr>
                            <td><?= h($events->id) ?></td>
                            <td><?= h($events->event_name) ?></td>
                            <td><?= h($events->start_date) ?></td>
                            <td><?= h($events->end_date) ?></td>
                            <td><?= h($events->start_time) ?></td>
                            <td><?= h($events->end_time) ?></td>
                            <td><?= h($events->location) ?></td>
                            <td><?= h($events->created) ?></td>
                            <td><?= h($events->updated) ?></td>
                            <td><?= h($events->event_type_id) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Events', 'action' => 'view', $events->id_event]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Events', 'action' => 'edit', $events->id_event]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Events', 'action' => 'delete', $events->id_event], ['confirm' => __('Are you sure you want to delete # {0}?', $events->id_event)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Accounting Entries') ?></h4>
                <?php if (!empty($association->accounting_entries)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Association Id') ?></th>
                            <th><?= __('Accounting Entry Type Id') ?></th>
                            <th><?= __('Event Id') ?></th>
                            <th><?= __('Amount') ?></th>
                            <th><?= __('Reason') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($association->accounting_entries as $accountingEntries) : ?>
                        <tr>
                            <td><?= h($accountingEntries->id) ?></td>
                            <td><?= h($accountingEntries->association_id) ?></td>
                            <td><?= h($accountingEntries->accounting_entry_type_id) ?></td>
                            <td><?= h($accountingEntries->event_id) ?></td>
                            <td><?= h($accountingEntries->amount) ?></td>
                            <td><?= h($accountingEntries->reason) ?></td>
                            <td><?= h($accountingEntries->created) ?></td>
                            <td><?= h($accountingEntries->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'AccountingEntries', 'action' => 'view', $accountingEntries->id_accounting_entries]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'AccountingEntries', 'action' => 'edit', $accountingEntries->id_accounting_entries]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'AccountingEntries', 'action' => 'delete', $accountingEntries->id_accounting_entries], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingEntries->id_accounting_entries)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Members') ?></h4>
                <?php if (!empty($association->members)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Birth Date') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Phone Number') ?></th>
                            <th><?= __('Contribution Is Paid') ?></th>
                            <th><?= __('Association Id') ?></th>
                            <th><?= __('Inscription Date') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($association->members as $members) : ?>
                        <tr>
                            <td><?= h($members->id) ?></td>
                            <td><?= h($members->first_name) ?></td>
                            <td><?= h($members->last_name) ?></td>
                            <td><?= h($members->birth_date) ?></td>
                            <td><?= h($members->email) ?></td>
                            <td><?= h($members->phone_number) ?></td>
                            <td><?= h($members->contribution_is_paid) ?></td>
                            <td><?= h($members->association_id) ?></td>
                            <td><?= h($members->inscription_date) ?></td>
                            <td><?= h($members->created) ?></td>
                            <td><?= h($members->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Members', 'action' => 'view', $members->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Members', 'action' => 'edit', $members->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Members', 'action' => 'delete', $members->id], ['confirm' => __('Are you sure you want to delete # {0}?', $members->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Statistics') ?></h4>
                <?php if (!empty($association->statistics)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('Association Id') ?></th>
                            <th><?= __('Statistics Type Id') ?></th>
                            <th><?= __('Data') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($association->statistics as $statistics) : ?>
                        <tr>
                            <td><?= h($statistics->id) ?></td>
                            <td><?= h($statistics->association_id) ?></td>
                            <td><?= h($statistics->statistics_type_id) ?></td>
                            <td><?= h($statistics->data) ?></td>
                            <td><?= h($statistics->created) ?></td>
                            <td><?= h($statistics->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Statistics', 'action' => 'view', $statistics->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Statistics', 'action' => 'edit', $statistics->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Statistics', 'action' => 'delete', $statistics->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statistics->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
            <div class="related">
                <h4><?= __('Related Users') ?></h4>
                <?php if (!empty($association->users)) : ?>
                <div class="table-responsive">
                    <table>
                        <tr>
                            <th><?= __('Id') ?></th>
                            <th><?= __('First Name') ?></th>
                            <th><?= __('Username') ?></th>
                            <th><?= __('Last Name') ?></th>
                            <th><?= __('Email') ?></th>
                            <th><?= __('Password') ?></th>
                            <th><?= __('Association Id') ?></th>
                            <th><?= __('Role Id') ?></th>
                            <th><?= __('Created') ?></th>
                            <th><?= __('Updated') ?></th>
                            <th><?= __('Image Name') ?></th>
                            <th><?= __('Image Path') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                        <?php foreach ($association->users as $users) : ?>
                        <tr>
                            <td><?= h($users->id) ?></td>
                            <td><?= h($users->first_name) ?></td>
                            <td><?= h($users->username) ?></td>
                            <td><?= h($users->last_name) ?></td>
                            <td><?= h($users->email) ?></td>
                            <td><?= h($users->password) ?></td>
                            <td><?= h($users->association_id) ?></td>
                            <td><?= h($users->role_id) ?></td>
                            <td><?= h($users->created) ?></td>
                            <td><?= h($users->updated) ?></td>
                            <td><?= h($users->image_name) ?></td>
                            <td><?= h($users->image_path) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['controller' => 'Users', 'action' => 'view', $users->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['controller' => 'Users', 'action' => 'edit', $users->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['controller' => 'Users', 'action' => 'delete', $users->id], ['confirm' => __('Are you sure you want to delete # {0}?', $users->id)]) ?>
                            </td>
                        </tr>
                        <?php endforeach; ?>
                    </table>
                </div>
                <?php endif; ?>
            </div>
        </div>
    </div>
</div>
