<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<div class="events index content pt-2">
    <!-- TODO edit link to open modal -->
    <?= $this->Html->link(__('+ New Event'), ['action' => 'add'], ['class' => 'btn btn-success float-right']) ?>
    <h3><?= __('Events') ?></h3>

    <!-- Filtres -->
    <div class="row">
        <div class="col">
            <div class="card mt-2 p-2">
                <p>Filtres :</p>
                
                ici les différents filtres
            </div>
        </div>
    </div>

    <!-- Liste -->
    <div class="row">
        <?php foreach ($events as $event) : ?>

            <div class="col-3">
                <div class="card mt-4 mb-4">
                    <div class="card-header">
                        <h3>
                            <?= h($event->event_name) ?>
                        </h3>
                    </div>
                    <div class="card-body">
                        <div class="row">

                            Lieu :
                            <?= h($event->location) ?>
                        </div>
                    </div>
                    <div class="card-footer">
                        <!-- TODO edit & view link to open modal and not page -->
                        <?= $this->Html->link(__('View'), ['action' => 'view', $event->id_event], ['class' => 'btn btn-primary btn-sm float-right mr-1 ml-1']) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id_event], ['class' => 'btn btn-outline-primary btn-sm float-right mr-1 ml-1']) ?>
                        <?= $this->Form->postLink(
                            __('Delete'),
                            ['action' => 'delete', $event->id_event],
                            ['confirm' => __('Are you sure you want to delete # {0}?', $event->id_event), 'class' => 'btn btn-outline-danger btn-sm float-right mr-1 ml-1']
                        ) ?>

                    </div>
                </div>
            </div>

            <!-- <td><?= $this->Number->format($event->id_event) ?></td>
                    <td><?= h($event->event_name) ?></td>
                    <td><?= h($event->start_date) ?></td>
                    <td><?= h($event->end_date) ?></td>
                    <td><?= h($event->start_time) ?></td>
                    <td><?= h($event->end_time) ?></td>
                    <td><?= h($event->location) ?></td>
                    <td class="actions">
                        <?= $this->Html->link(__('View'), ['action' => 'view', $event->id_event]) ?>
                        <?= $this->Html->link(__('Edit'), ['action' => 'edit', $event->id_event]) ?>
                        <?= $this->Form->postLink(__('Delete'), ['action' => 'delete', $event->id_event], ['confirm' => __('Are you sure you want to delete # {0}?', $event->id_event)]) ?>
                    </td> -->
        <?php endforeach; ?>
    </div>