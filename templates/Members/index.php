<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member[]|\Cake\Collection\CollectionInterface $members
 */
?>

<div class="members index content">
    <div class="container-fluid">
        <h3><?= __('Members') ?></h3>
        <?= $this->Html->link(__('Exporter liste de membres'), ['action' => 'exportMembers'], ['class' => 'btn btn-success float-right']) ?>
        <?= $this->Html->link(__('Importer liste de membres'), ['action' => 'importMembers'], ['class' => 'btn btn-success float-right']) ?>
        <?= $this->Html->link(__('Ajouter un membre'), ['action' => 'add'], ['class' => 'btn btn-success float-right']) ?>
        <div class="table-responsive">
            <table class="table table-striped table-hover">
                <thead>
                    <tr>
                        <th><?= __('Prénom') ?></th>
                        <th><?= __('Nom') ?></th>
                        <th>Paiement</th>
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
                                <td><span class="badge rounded-pill bg-success text-white px-4 py-1">Validé</span></td>
                            <?php else : ?>
                                <td><span class="badge rounded-pill bg-warning px-4 py-1">En attente</span></td>
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