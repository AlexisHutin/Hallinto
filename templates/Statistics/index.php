<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\Statistic[]|\Cake\Collection\CollectionInterface $statistics
 */
?>
<div class="row h-100">
    <?= $this->Element('nav') ?>
    <div class="col-10 p-0">
        <div id="stats" class="pb-4 accountingEntries index content">
            <div class="jumbotron jumbotron-fluid p-3 mb-2">
                <div class="row px-2 mx-1">
                <h1 class="th1-1">Statistiques</h1>
                </div>
            </div>
        
            <div class="container-fluid boxes">
                <div class="row mt-5 mx-0" >
                    <div class="col-12 p-2 grey-border rounded-corners">
                        <h2 class="th2-2">Solde opérations comptable</h2>
                        <div class="col-12 p-0 stats chart-container">
                            <canvas id="ComptaChart"></canvas>
                        </div>
                    </div>
                    <div class="col-6 mt-3 p-2 grey-border rounded-corners">
                    <h2 class="th2-2">Nombre des membres</h2>
                        <div class="row d-flex justify-content-center">
                            <div class="col-3 grey-border rounded-corners text-center">
                            235<br>
                            + 25 ce mois ci
                            </div>
                            <div class="col-4 grey-border rounded-corners text-center">
                            235<br>
                            maximum atteint
                            </div>
                            <div class="col-4 grey-border rounded-corners text-center">
                            235 / 500<br>
                            prochain pallier de membres
                            </div>
                        </div>
                        <div class="col-12 pt-5">
                        <canvas id="MembresChart" ></canvas>
                        </div>
                    </div>
                    <div class="col-6">
                        <div class="col-12 mt-3 p-2 grey-border rounded-corners">
                        <h2 class="th2-2">Communauté</h2>
                        <div class="row">
                        <div class="col-6">
                            <canvas id="communityChart1"></canvas>
                        </div>
                        <div class="col-6">
                            <canvas id="communityChart2"></canvas>
                        </div>
                        </div>
                        </div>
                        <div class="col-12 mt-3 p-2 grey-border rounded-corners">
                        <h2 class="th2-2">Type d'évenements organisés</h2>
                        </div>
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>
<script>
let data = <?= $amounts ?>;
let labels = <?= $operations ?>;

let months=["Janvier","Février","Mars","Avril","Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre"];
let currentMonth=new Date().getMonth()


</script>
<?= $this->Html->script(['Statistics/comptaChart']) ?>
<?= $this->Html->script(['Statistics/membresChart']) ?>
<?= $this->Html->script(['Statistics/statsCommunityDoughnut']) ?>