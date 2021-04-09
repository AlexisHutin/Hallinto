<?php

?>

<div class="jumbotron jumbotron-fluid p-3 mb-2">
  <div class="row px-2 mx-1">
    <h1>Dashboard</h1>
  </div>
</div>
<div class="container-fluid text-center">
  <div class="row mx-2">
    <button type="button" class="btn btn-primary mx-2" data-toggle="modal" data-target="#dashboardModal-addMemberModal">
      Ajouter un membre
    </button>
    <button type="button" class="btn btn-primary mx-2" data-toggle="modal" data-target="#dashboardModal-addComptaModal">
      Ajouter une opération comptabilité
    </button>
    <button type="button" class="btn btn-primary mx-2" data-toggle="modal" data-target="#dashboardModal-addEventModal">
      Créer un événement
    </button>
  </div>
</div>
<div class="container-fluid boxes">
  <div class="row mt-5 mx-0" style="height:15%;">

      <div class="col-3 h-100">
        <div class="card text-center p-2">
          <p class="Key-number purple-font font-weight-bold"><?=$query1[0]['count']?></p>
          <p class="display-5">Adhérents à ASSO</p>
        </div>
      </div>

    <div class="col-6 h-100">
      <div class="card p-0 overflow-hidden">
        <div class="col-12 p-2">
          <p class="Key-number purple-font font-weight-bold">
            <?php
            if($total>0){
              echo "+".$total;
            }else{
              echo "-".$total;
            }
            ?>
            €</p>
            <p class="display-5">Solde opérations comptables</p>
        </div>
        <div class="col-12 p-0 dashboard chart-container">
          <canvas id="myChart" data-amounts='<?=$amounts?>'></canvas>
        </div>
      </div>
    </div>

    <div class="col-3 h-100">
        <div class="card text-center p-2">
          <h5>Documents fréquents</h5>
        </div>
    </div>

  </div>
  <div class="row mt-5 mx-0">
    <div class="col-6">
      <div class="card text-center p-2">
      <h5>Evenements à venir</h5>
      </div>  
    </div>
    <div class="col-6">
      <div class="card text-center p-2">
        <h5>Derniers mouvements comptables</h5>
      </div>
    </div>
  </div>
</div>

<?php

echo $this->element('Pages/modal',['modalType' =>'addMemberModal']);
echo $this->element('Pages/modal',['modalType' =>'addComptaModal']);
echo $this->element('Pages/modal',['modalType' =>'addEventModal']);
?>

<?= $this->Html->script(['Pages/dashboardChart']) ?>
