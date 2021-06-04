<?php
    $pages=[
        ['Dashboard', '', '', 'icon-home'],
        ['Adhérents', 'Members', 'index', 'icon-users'],
        ['Événements', 'Events', 'index', 'icon-calendar'],
        ['Statistiques', 'Statistics', 'index', 'icon-bar-chart'],
        ['Comptabilité', 'AccountingEntries', 'index', 'icon-euro'],
        ['Documents & Aide', 'Informations', 'indexDocuments', 'icon-file-text'],
        ['FAQ', 'Informations', 'indexFaq', 'icon-help-circle'],
        ['Paramètres', '', '', 'icon-settings'],
        
    ];
?>


<div class="col-2 left-nav  px-0">
<div class="sticky-top">
    <nav class="navbar d-block p-0 text-center">
        <div class="my-4">
            <?= $this->Html->image('hallinto_orange.svg', ['alt' => 'Hallinto logo']); ?>
        </div>
   
    <ul class="m-0 p-0 d-block text-left">
    <?php foreach($pages as $item): ?>
        <li class=" d-block background-fade">
        <i class="<?=$item[3]?> d-inline-block"></i>
            <?= $this->Html->link( $item[0], ['controller' => $item[1], 'action' => $item[2]], ['class' => 'nav-link p-2 btn rounded-0 text-left d-inline-block']) ?>
        </li>
    <?php endforeach; ?>
        <li class=" d-block background-fade">
        <i class="icon-log-out d-inline-block"></i>
            <?= $this->Html->link( 'Se déconnecter', ['controller' => 'Users', 'action'=>'logout'], ['class' => 'nav-link p-2 btn rounded-0 text-left d-inline-block']) ?>
        </li>
    </ul>

    </nav>
    </div>
    
</div>