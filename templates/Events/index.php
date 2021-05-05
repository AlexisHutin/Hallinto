<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<div class="container-fluid">
    <div class="events index content pt-2">
        <!-- TODO edit link to open modal -->
        <?= $this->Html->link(__('+ New Event'), ['action' => 'add'], ['class' => 'btn btn-success float-right']) ?>
        <h3><?= __('Events') ?></h3>
        <!-- Filtres -->
        <div class="row">
            <div class="col">
                <div class="card mt-2">
                    <p>Filtres :</p>

                    ici les différents filtres
                </div>
            </div>
        </div>
        <!-- Liste -->
        <div class="row">
            <?php foreach ($events as $event) : ?>

                <div class="col-4">

                    <?= $this->element('Event/event-card', ['event' => $event]) ?>

                </div>
            <?php endforeach; ?>
        </div>
    </div>
</div>