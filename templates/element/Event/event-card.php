<div class="card mt-4 mb-4">

    <div class="card-body">

        <div class="">
            <div class="col-5 rounded-corners text-center py-4 text-white purple-background">
                <span class="display-2"><?= h($event->start_date->format('d')) ?></span> <br>
                <span style="font-size: 1.3em;"><?= h($event->start_date->format('F Y')) ?></span>
            </div>
        </div>

        <h2 class="th2-1 mt-2"> 
            <?= h($event->event_name) ?>
        </h2>
        <p class="font-weight-bold" style="font-size: 1.3em;">
            <?= h($event->location) ?>
        </p>
        <p>
            Le 
            <?= h($event->start_date->format('d-m-Y')) ?> 
            <?= h($event->start_time) ?>
        </p>

        <p class="text-muted"> <?= h($event->event_type['name']) ?></p>
    </div>
</div>