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
                                    <div class="donut-inner">
                                        <h5>35%</h5>
                                        <span>+25 ans</span>
                                    </div>
                                    <canvas id="communityChart1">  
                                    </canvas>
                                </div>
                                <div class="col-6">
                                    <div class="donut-inner">
                                        <h5>65%</h5>
                                        <span>-25 ans</span>
                                    </div>
                                    <canvas id="communityChart2">  
                                    </canvas>
                                </div>
                            </div>
                        </div>
                        <div class="col-12 mt-3 p-2 grey-border rounded-corners">
                        <h2 class="th2-2">Type d'évenements organisés</h2>
                            <div class="row text-center">
                                <div class="col-3">
                                <canvas id="eventChart1">  
                                    </canvas>
                                    <div class="">
                                        <h5>5%</h5>
                                        <span>Loisirs</span>
                                    </div> 
                                </div>
                                <div class="col-3">
                                    <canvas id="eventChart2">  
                                    </canvas>
                                    <div class="">
                                        <h5>50%</h5>
                                        <span>soirées étudiantes</span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <canvas id="eventChart3">  
                                    </canvas>
                                    <div class="">
                                        <h5>35%</h5>
                                        <span>LPro</span>
                                    </div>
                                </div>
                                <div class="col-3">
                                    <canvas id="eventChart4">  
                                    </canvas>
                                    <div class="">
                                        <h5>10%</h5>
                                        <span>Autres</span>
                                    </div>
                                </div>
                            </div>
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
let dates = <?= $datesJson ?>;

// console.log(dates);
let datesTransform = [];
for(i=0; i<dates.length; i++){
    var d = new Date(dates[i])
    datesTransform.push(formatDate(d));
}
// console.log(datesTransform);

let dataAndDates = [];
for(i=0; i<data.length; i++){
    dataAndDates.push({
        x: dates[i],
        y: data[i]
    });
}

// let accountingData = JSON.stringify(dataAndDates);

// console.log(dataAndDates)

var monthNames = ["Janvier","Février","Mars","Avril","Mai","Juin", "Juillet", "Août", "Septembre", "Octobre", "Novembre", "Decembre"];
var today = new Date();
var d;
var month;
var pastMonths = [];
for(var i = 5; i > -1; i -= 1) {
  d = new Date(today.getFullYear(), today.getMonth() - i, 1);
  month = monthNames[d.getMonth()];
  pastMonths.push(month);
}


function formatDate(date) {
    var day = date.getDate();
    if (day < 10) {
        day = "0" + day;
    }
    var month = date.getMonth() + 1;
    if (month < 10) {
        month = "0" + month;
    }
    var year = date.getFullYear();
    return day + "/" + month + "/" + year;
}


</script>
<?= $this->Html->script(['Statistics/comptaChart']) ?>
<?= $this->Html->script(['Statistics/membresChart']) ?>
<?= $this->Html->script(['Statistics/statsCommunityDoughnut']) ?>
<?= $this->Html->script(['Statistics/eventDoughnuts']) ?>