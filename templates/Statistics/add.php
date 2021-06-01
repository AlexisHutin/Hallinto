<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statistic $statistic
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Html->link(__('List Statistics'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="statistics form content">
            <?= $this->Form->create($statistic) ?>
            <fieldset>
                <legend><?= __('Add Statistic') ?></legend>
                <?php
                    echo $this->Form->control('association_id', ['options' => $associations]);
                    echo $this->Form->control('statistics_type_id', ['options' => $statisticsType]);
                    echo $this->Form->control('data');
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
