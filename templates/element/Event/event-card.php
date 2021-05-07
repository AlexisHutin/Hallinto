<div class="card mt-4 mb-4">

    <div class="card-body">

        <div class="row">
            <div class="col-5 bg-info rounded text-center py-4 text-white">
                <span class="display-2"><?= h($event->start_date->format('d')) ?></span> <br>
                <span style="font-size: 1.3em;"><?= h($event->start_date->format('F Y')) ?></span>
            </div>
        </div>

        <p class="display-4"> 
            <?= h($event->event_name) ?>
        </p>
        <b style="font-size: 1.3em;">
            <?= h($event->location) ?>
        </b>
        <p>
            Le 
            <?= h($event->start_date->format('d-m-Y')) ?> 
            <?= h($event->start_time) ?>
        </p>

        <p class="text-muted"> <?= h($event->event_type['name']) ?></p>
    </div>
</div>