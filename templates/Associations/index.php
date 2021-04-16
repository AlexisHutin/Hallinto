<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Association[]|\Cake\Collection\CollectionInterface $associations
 */
?>
<div class="associations index content">
    <?= $this->Html->link(__('New Association'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Associations') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id') ?></th>
                    <th><?= $this->Paginator->sort('name') ?></th>
                    <th><?= $this->Paginator->sort('association_type') ?></th>
                    <th><?= $this->Paginator->sort('email') ?></th>
                    <th><?= $this->Paginator->sort('RNA_number') ?></th>
                    <th><?= $this->Paginator->sort('plan_type') ?></th>
                    <th><?= $this->Paginator->sort('created') ?></th>
                    <th><?= $this->Paginator->sort('updated') ?></th>
                    <th><?= $this->Paginator->sort('image_name') ?></th>
                    <th><?= $this->Paginator->sort('image_path') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($associations as $association): ?>
                <tr>
                    <td><?= $this->Number->format($association->id) ?></td>
                    <td><?= h($association->name) ?></td>
                    <td><?= h($association->association_type) ?></td>
                    <td><?= h($association->email) ?></td>
                    <td><?= h($association->RNA_number) ?></td>
                    <td><?= h($association->plan_type) ?></td>
                    <td><?= h($association->created) ?></td>
                    <td><?= h($association->updated) ?></td>
                    <td><?= h($association->image_name) ?></td>
                    <td><?= h($association->image_path) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $association->id]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $association->id]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $association->id], ['confirm' => __('Are you sure you want to delete # {0}?', $association->id)]) ?>
                    </td>
                </tr>
                <?php endforeach; ?>
            </tbody>
        </table>
    </div>
    <div class="paginator">
        <ul class="pagination">
            <?= $this->Paginator->first('<< ' . __('first')) ?>
            <?= $this->Paginator->prev('< ' . __('previous')) ?>
            <?= $this->Paginator->numbers() ?>
            <?= $this->Paginator->next(__('next') . ' >') ?>
            <?= $this->Paginator->last(__('last') . ' >>') ?>
        </ul>
        <p><?= $this->Paginator->counter(__('Page {{page}} of {{pages}}, showing {{current}} record(s) out of {{count}} total')) ?></p>
    </div>
</div>
