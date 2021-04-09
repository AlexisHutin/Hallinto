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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $accountingEntry->id_accounting_entries],
                ['confirm' => __('Are you sure you want to delete # {0}?', $accountingEntry->id_accounting_entries), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Accounting Entries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="accountingEntries form content">
            <?= $this->Form->create($accountingEntry) ?>
            <fieldset>
                <legend><?= __('Edit Accounting Entry') ?></legend>
                <?php
                    echo $this->Form->control('id');
                    echo $this->Form->control('association_id');
                    echo $this->Form->control('type_of_accounting_entry_id');
                    echo $this->Form->control('event_id');
                    echo $this->Form->control('amount');
                    echo $this->Form->control('created_on', ['empty' => true]);
                    echo $this->Form->control('updated_on', ['empty' => true]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
