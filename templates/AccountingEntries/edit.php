<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingEntry $accountingEntry
 */
?>

<div class="row h-100">
    <?= $this->Element('nav') ?>
    <div class="col-10 p-0">
        <div id="events" class="pb-4 index content">
            <div class="jumbotron jumbotron-fluid p-3 mb-2">
                <div class="row px-2 mx-1">
                    <h1 class="th1-1">Modifier une entrée comptable</h1>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="accountingEntries form content">
                <?= $this->Form->create($accountingEntry) ?>
                <fieldset>
                    <?php
                    echo $this->Form->control('accounting_entry_type_id', ['options' => $type, 'class' => 'form-control input-form']);
                    echo $this->Form->control('event_id', ['options' => [-1 => ""] + $events, 'class' => 'form-control input-form']);
                    echo $this->Form->control('amount', ['class' => 'form-control input-form']);
                    echo $this->Form->control('reason', ['class' => 'form-control input-form']);

                    ?>
                </fieldset>
                <br>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn btn-primary']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>

<!-- <div class="row">
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
</div> -->