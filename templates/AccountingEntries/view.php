<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingEntry $accountingEntry
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Accounting Entry'), ['action' => 'edit', $accountingEntry->id_accounting_entries], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Accounting Entry'), ['action' => 'delete', $accountingEntry->id_accounting_entries], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingEntry->id_accounting_entries), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Accounting Entries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Accounting Entry'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountingEntries view content">
            <h3><?= h($accountingEntry->id_accounting_entries) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($accountingEntry->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Association Id') ?></th>
                    <td><?= $this->Number->format($accountingEntry->association_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Type Of Accounting Entry Id') ?></th>
                    <td><?= $this->Number->format($accountingEntry->type_of_accounting_entry_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Event Id') ?></th>
                    <td><?= $this->Number->format($accountingEntry->event_id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($accountingEntry->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created On') ?></th>
                    <td><?= h($accountingEntry->created_on) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated On') ?></th>
                    <td><?= h($accountingEntry->updated_on) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
