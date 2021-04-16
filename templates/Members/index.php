<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Member[]|\Cake\Collection\CollectionInterface $members
 */
?>
<div class="members index content">
    <?= $this->Html->link(__('New Member'), ['action' => 'add'], ['class' => 'btn btn-success float-right']) ?>
    <h3><?= __('Members') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($members as $member): ?>
                <tr>
                    <td><?= $this->Number->format($member->id) ?></td>
                    <td><?= h($member->first_name) ?></td>
                    <td><?= h($member->last_name) ?></td>
                    <td><?= h($member->birth_date) ?></td>
                    <td><?= h($member->email) ?></td>
                    <td><?= h($member->phone_number) ?></td>
                    <td><?= h($member->contribution_is_paid) ?></td>
                    <td><?= $member->has('association') ? $this->Html->link($member->association->name, ['controller' => 'Associations', 'action' => 'view', $member->association->id]) : '' ?></td>
                    <td><?= $this->Number->format($member->inscription_date) ?></td>
                    <td><?= h($member->created) ?></td>
                    <td><?= h($member->updated) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $member->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $member->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $member->id], ['confirm' => __('Are you sure you want to delete # {0}?', $member->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    
</div>
