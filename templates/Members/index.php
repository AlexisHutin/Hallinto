<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member[]|\Cake\Collection\CollectionInterface $members
 */
?>
<div class="row h-100">
    <?= $this->Element('nav') ?>
    <div class="col-10 p-0">
        <div id="accounting" class="pb-4 accountingEntries index content">
            <div class="jumbotron jumbotron-fluid p-3 mb-2">
                <div class="row px-2 mx-1">
                    <h1 class="th1-1">Adhérents</h1>
                </div>
            </div>

            <div class="container-fluid text-center">
                <div class="row mx-2 justify-content-end">
                    <?= $this->Html->link(__('Exporter liste des adhérents'), ['action' => 'exportMembers'], ['class' => 'btn button-full mx-2 icon-circle-plus']) ?>
                    <?= $this->Html->link(__('Importer liste des adhérents'), ['action' => 'importMembers'], ['class' => 'btn button-full mx-2 icon-circle-plus']) ?>
                    <button type="button" class="btn button-full mx-2 icon-circle-plus" data-toggle="modal" data-target="#dashboardModal-addMemberModal">
                        Ajouter un adhérent
                    </button>
                   
                </div>
            </div>

            <div class="container-fluid">
                <div class="row mt-5 mx-0">
                    <div class="col-12">
                        <div class="table-responsive">
                            <table class="table table-striped table-hover">
                                <thead>
                                    <tr>
                                        <th><?= __('Prénom') ?></th>
                                        <th><?= __('Nom') ?></th>
                                        <th class="d-flex justify-content-center">Paiement</th>
                                        <th>Date de naissance</th>
                                        <th>Date d'inscription</th>
                                        <th class="actions"><?= __('Actions') ?></th>
                                    </tr>
                                </thead>
                                <tbody>
                                    <?php foreach ($members as $member) : ?>
                                        <tr>
                                            <td><?= h($member->first_name) ?></td>
                                            <td><?= h($member->last_name) ?></td>
                                            <?php if ($member->contribution_is_paid) : ?>
                                                <td class="d-flex justify-content-center"><span class="badge rounded-pill orange-background text-white px-4 py-1">Validé</span></td>
                                            <?php else : ?>
                                                <td class="d-flex justify-content-center"><span class="badge rounded-pill purple-background text-white px-4 py-1">En attente</span></td>
                                            <?php endif; ?>
                                            <td><?= h($member->birth_date) ?></td>
                                            <td><?= $member->inscription_date->format('d-m-Y') ?></td>
                                            <td class="actions">
                                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $member->id]) ?>
                                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?>
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
</div>

<?= $this->element('Pages/modal',['modalType' =>'addMemberModal']); ?>
