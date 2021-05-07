<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statistic[]|\Cake\Collection\CollectionInterface $statistics
 */
?>
           <?= $this->Html->link(__('New Statistic'), ['action' => 'add'], ['class' => 'button float-right']) ?>
            <h3><?= __('Statistics') ?></h3>
            <div class="table-responsive">
                <table>
                    <thead>
                        <tr>
                            <th><?= $this->Paginator->sort('id') ?></th>
                            <th><?= $this->Paginator->sort('association_id') ?></th>
                            <th><?= $this->Paginator->sort('statistics_type_id') ?></th>
                            <th><?= $this->Paginator->sort('data') ?></th>
                            <th><?= $this->Paginator->sort('created') ?></th>
                            <th><?= $this->Paginator->sort('updated') ?></th>
                            <th class="actions"><?= __('Actions') ?></th>
                        </tr>
                    </thead>
                    <tbody>
                        <?php foreach ($statistics as $statistic): ?>
                        <tr>
                            <td><?= $this->Number->format($statistic->id) ?></td>
                            <td><?= $statistic->has('association') ? $this->Html->link($statistic->association->name, ['controller' => 'Associations', 'action' => 'view', $statistic->association->id]) : '' ?></td>
                            <td><?= $statistic->has('statistics_type') ? $this->Html->link($statistic->statistics_type->id, ['controller' => 'StatisticsType', 'action' => 'view', $statistic->statistics_type->id]) : '' ?></td>
                            <td><?= h($statistic->data) ?></td>
                            <td><?= h($statistic->created) ?></td>
                            <td><?= h($statistic->updated) ?></td>
                            <td class="actions">
                                <?= $this->Html->link(__('View'), ['action' => 'view', $statistic->id]) ?>
                                <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statistic->id]) ?>
                                <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statistic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statistic->id)]) ?>
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
        </div>
    </div>
</div>

<?= $this->Html->script(['Statistics/comptaChart']) ?>