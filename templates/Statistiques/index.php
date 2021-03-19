<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statistique[]|\Cake\Collection\CollectionInterface $statistiques
 */
?>
<div class="statistiques index content">
    <?= $this->Html->link(__('New Statistique'), ['action' => 'add'], ['class' => 'button float-right']) ?>
    <h3><?= __('Statistiques') ?></h3>
    <div class="table-responsive">
        <table>
            <thead>
                <tr>
                    <th><?= $this->Paginator->sort('id_statistiques') ?></th>
                    <th><?= $this->Paginator->sort('id_association') ?></th>
                    <th><?= $this->Paginator->sort('id_stat_type') ?></th>
                    <th class="actions"><?= __('Actions') ?></th>
                </tr>
            </thead>
            <tbody>
                <?php foreach ($statistiques as $statistique): ?>
                <tr>
                    <td><?= $this->Number->format($statistique->id_statistiques) ?></td>
                    <td><?= $this->Number->format($statistique->id_association) ?></td>
                    <td><?= $this->Number->format($statistique->id_stat_type) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $statistique->id_statistiques]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $statistique->id_statistiques]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $statistique->id_statistiques], ['confirm' => __('Are you sure you want to delete # {0}?', $statistique->id_statistiques)]) ?>
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
