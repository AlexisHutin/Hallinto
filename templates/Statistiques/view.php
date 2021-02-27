<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statistique $statistique
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('Edit Statistique'), ['action' => 'edit', $statistique->id_statistiques], ['class' => 'side-nav-item']) ?>
            <?= $this->Form->postLink(__('Delete Statistique'), ['action' => 'delete', $statistique->id_statistiques], ['confirm' => __('Are you sure you want to delete # {0}?', $statistique->id_statistiques), 'class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('List Statistiques'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
            <?= $this->Html->link(__('New Statistique'), ['action' => 'add'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statistiques view content">
            <h3><?= h($statistique->id_statistiques) ?></h3>
            <table>
                <tr>
                    <th><?= __('Id Statistiques') ?></th>
                    <td><?= $this->Number->format($statistique->id_statistiques) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Association') ?></th>
                    <td><?= $this->Number->format($statistique->id_association) ?></td>
                </tr>
                <tr>
                    <th><?= __('Id Stat Type') ?></th>
                    <td><?= $this->Number->format($statistique->id_stat_type) ?></td>
                </tr>
            </table>
        </div>
    </div>
</div>
