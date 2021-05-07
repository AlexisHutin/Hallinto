<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingEntry $accountingEntry
 */
?>
<div class="">
    <!--<aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Accounting Entries'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>-->
    <div class="p-3">
        <div class="accountingEntries form content">
            <?= $this->Form->create($accountingEntry) ?>
            <fieldset>
                <h2 class="th2-2">Ajouter une opération comptable</h2>
                <?php
                    echo $this->Form->control('accounting_entry_type_id',['options'=>$type, 'class'=>'form-control input-form']);
                    echo $this->Form->control('event_id',['options'=>[-1=>""]+$event, 'class'=>'form-control input-form']);
                    echo $this->Form->control('amount',['class'=>'form-control input-form']);
                    echo $this->Form->control('reason',['class'=>'form-control input-form']);
                ?>
            </fieldset>
            <div class="col-12 text-center">
                <?= $this->Form->button(__('Ajouter'),['class' => 'btn button-full mx-auto my-3']) ?>
                
            </div>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>

