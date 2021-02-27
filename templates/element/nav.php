<?php
    $pages=[
        ['Dashboard', ''],
        ['Événements', 'Events'],
        ['Comptabilité', 'AccountingEntries'],
        ['Statistiques', 'Statistiques']
    ];
?>


<div class="col-2 h-100  bg-secondary text-white">
    <nav class="navbar d-block p-0">
    <h1 class="d-block p-3 text-center">
        Hallinto
    </h1>
    <ul class="m-0 p-0 d-block">
    <?php foreach($pages as $item): ?>
        <li class=" d-block">
            <?= $this->Html->link( $item[0], ['controller' => $item[1], 'action' => 'index'], ['class' => 'nav-link p-2 btn btn-secondary rounded-0 text-left']) ?>
        </li>
    <?php endforeach; ?>
    </ul>

    </nav>
</div>