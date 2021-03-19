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
                    <th><?= __('Id Accounting Entries') ?></th>
                    <td><?= $this->Number->format($accountingEntry->id_accounting_entries) ?></td>
                </tr>
                <tr>
                    <th><?= __('Amount') ?></th>
                    <td><?= $this->Number->format($accountingEntry->amount) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($accountingEntry->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Association') ?></th>
                    <td><?= $this->Number->format($accountingEntry->id_association) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($accountingEntry->created) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
