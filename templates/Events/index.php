<?php

/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Event[]|\Cake\Collection\CollectionInterface $events
 */
?>
<div class="row h-100">
    <?= $this->Element('nav') ?>
    <div class="col-10 p-0">
        <div id="events" class="pb-4 index content">
            <div class="jumbotron jumbotron-fluid p-3 mb-2">
                <div class="row px-2 mx-1">
                    <h1 class="th1-1">Évenements</h1>
                </div>
            </div>
            <div class="container-fluid text-center">
                <div class="row mx-2 justify-content-end">
                <!-- TODO edit link to open modal -->
                    <?= $this->Html->link(__('Ajouter un évenement'), ['action' => 'add'], ['class' => 'btn button-full mx-2 icon-circle-plus']) ?>
                </div>
            </div>
        </div>
        <div class="container-fluid">
            <div class="events index content pt-2">
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
    </div>
</div>
            
       
            

