<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Association $association
 */
?>
<div class="row">
    <aside class="column">
        <div class="side-nav">
            <h4 class="heading"><?= __('Actions') ?></h4>
            <?= $this->Form->postLink(
                __('Delete'),
                ['action' => 'delete', $association->id],
                ['confirm' => __('Are you sure you want to delete # {0}?', $association->id), 'class' => 'side-nav-item']
            ) ?>
            <?= $this->Html->link(__('List Associations'), ['action' => 'index'], ['class' => 'side-nav-item']) ?>
        </div>
    </aside>
    <div class="column-responsive column-80">
        <div class="associations form content">
            <?= $this->Form->create($association) ?>
            <fieldset>
                <legend><?= __('Edit Association') ?></legend>
                <?php
                    echo $this->Form->control('name');
                    echo $this->Form->control('association_type');
                    echo $this->Form->control('adresse');
                    echo $this->Form->control('email');
                    echo $this->Form->control('RNA_number');
                    echo $this->Form->control('plan_type');
                    echo $this->Form->control('image_name');
                    echo $this->Form->control('image_path');
                    echo $this->Form->control('events._ids', ['options' => $events]);
                ?>
            </fieldset>
            <?= $this->Form->button(__('Submit')) ?>
            <?= $this->Form->end() ?>
        </div>
    </div>
</div>
