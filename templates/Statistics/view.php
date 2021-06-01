<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statistic $statistic
 */
?>
>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Statistic'), ['action' => 'edit', $statistic->id], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Statistic'), ['action' => 'delete', $statistic->id], ['confirm' => __('Are you sure you want to delete # {0}?', $statistic->id), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Statistics'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Statistic'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statistics view content">
            <h3><?= h($statistic->id) ?></h3>
            <table>
                <tr>
                    <th><?= __('Association') ?></th>
                    <td><?= $statistic->has('association') ? $this->Html->link($statistic->association->name, ['controller' => 'Associations', 'action' => 'view', $statistic->association->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Statistics Type') ?></th>
                    <td><?= $statistic->has('statistics_type') ? $this->Html->link($statistic->statistics_type->id, ['controller' => 'StatisticsType', 'action' => 'view', $statistic->statistics_type->id]) : '' ?></td>
                </tr>
                <tr>
                    <th><?= __('Data') ?></th>
                    <td><?= h($statistic->data) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id') ?></th>
                    <td><?= $this->Number->format($statistic->id) ?></td>
                </tr>
                <tr>
                    <th><?= __('Created') ?></th>
                    <td><?= h($statistic->created) ?></td>
                </tr>
                <tr>
                    <th><?= __('Updated') ?></th>
                    <td><?= h($statistic->updated) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>

