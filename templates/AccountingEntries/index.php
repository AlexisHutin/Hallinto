<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingEntry[]|\Cake\Collection\CollectionInterface $accountingEntries
 */
?>
<div class="accountingEntries index content">
    <?= $this->Html->link(__('New Accounting Entry'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Accounting Entries') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('association_id') ?></th>
                    <th><?= $this->Paginator->sort('type_of_accounting_entry_id') ?></th>
                    <th><?= $this->Paginator->sort('event_id') ?></th>
                    <th><?= $this->Paginator->sort('amount') ?></th>
                    <th><?= $this->Paginator->sort('created_on') ?></th>
                    <th><?= $this->Paginator->sort('updated_on') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($accountingEntries as $accountingEntry): ?>
                <tr>
                    <td><?= $this->Number->format($accountingEntry->id) ?></td>
                    <td><?= $this->Number->format($accountingEntry->association_id) ?></td>
                    <td><?= $this->Number->format($accountingEntry->type_of_accounting_entry_id) ?></td>
                    <td><?= $this->Number->format($accountingEntry->event_id) ?></td>
                    <td><?= $this->Number->format($accountingEntry->amount) ?></td>
                    <td><?= h($accountingEntry->created_on) ?></td>
                    <td><?= h($accountingEntry->updated_on) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $accountingEntry->id_accounting_entries]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $accountingEntry->id_accounting_entries]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $accountingEntry->id_accounting_entries], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingEntry->id_accounting_entries)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
