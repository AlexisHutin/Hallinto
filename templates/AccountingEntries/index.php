<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\AccountingEntry[]|\Cake\Collection\CollectionInterface $accountingEntries
 */
?>
<div class="row h-100">
  <?= $this->Element('nav') ?>
  <div class="col-10 p-0">
    <div id="accounting" class="pb-4 accountingEntries index content">
        <div class="jumbotron jumbotron-fluid p-3 mb-2">
            <div class="row px-2 mx-1">
            <h1 class="th1-1">Comptabilité</h1>
            </div>
        </div>
        <div class="container-fluid text-center">
            <div class="row mx-2 justify-content-end">
                <button type="button" class="btn button-full mx-2 icon-circle-plus" data-toggle="modal" data-target="#dashboardModal-addComptaModal">
                Ajouter une opération comptabilité
                </button>
               
                <?= $this->Html->link(__('Télécharger un relevé des opérations'), ['action' => 'exportCompta'], ['class' => 'btn button-full mx-2 icon-download']) ?>
            </div>
        </div>
        <div class="container-fluid boxes">
            <div class="row mt-5 mx-0" >
                <div class="col-12">
                    <div class="table-responsive">
                        <table class="table table-striped">
                            <thead >
                                <tr>
                                    <th scope="col"></th>
                                    <th scope="col">Reason</th>
                                    <th scope="col">Amount</th>
                                    <th scope="col">Date</th>
                                    <th scope="col"></th>
                                </tr>
                            </thead>
                            <tbody class="table-body">
                                <?php foreach ($accountingEntries as $accountingEntry): ?>
                                <tr>
                                    <td class="py-4 px-1 text-center" ><?= $this->AccountingEntries->displayGiftIcon($accountingEntry) ?></td>
                                    <td>
                                        <span><?= $accountingEntry->reason ?></span><br>
                                        <?= $this->AccountingEntries->displayEntryType($accountingEntry) ?>
                                    </td>
                                    <?= $this->AccountingEntries->displayContentCell($accountingEntry) ?>
                                    <td><?= $accountingEntry->created?></td>
                                    <td class="actions">
                                        <?= $this->Html->link(__(''), ['action' => 'edit', $accountingEntry->id_accounting_entries],['class'=>'icon-edit px-2']) ?>
                                        <?= $this->Form->postLink(__('X'), ['action' => 'delete', $accountingEntry->id_accounting_entries],['class'=>'px-2'], ['confirm' => __('Are you sure you want to delete # {0}?', $accountingEntry->id_accounting_entries)]) ?>
                                    </td>
                                </tr>
                                <?php endforeach; ?>
                            </tbody>
                        </table>
                    </div>
                    
                </div>
            </div>
        </div>
    </div>
</div>


<?php

echo $this->element('Pages/modal',['modalType' =>'addComptaModal']);

?>