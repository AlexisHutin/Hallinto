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
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $statistique->id_statistiques],
                ['confirm' => __('Are you sure you want to delete # {0}?', $statistique->id_statistiques), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Statistiques'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statistiques form content">
            <?= $this->Form->create($statistique) ?>
            <fieldset>
                <legend><?= __('Edit Statistique') ?></legend>
                <?php
                    echo $this->Form->control('id_association');
                    echo $this->Form->control('id_stat_type');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
