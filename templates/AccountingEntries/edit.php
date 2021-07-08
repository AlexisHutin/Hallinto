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
                <?= $this->Html->link(__('Annuler'), ['action' => 'index'], ['class' => 'btn button-secondary']) ?>
                <?= $this->Form->button(__('Submit'), ['class' => 'btn button-full']) ?>
                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>
</div>