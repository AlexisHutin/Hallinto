
<div class="jumbotron jumbotron-fluid p-4 ">
  <div class="row px-4">
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
<div class="container-fluid">
  <div class="row">
    <div class="col-3">

    </div>
    <div class="col-6">
      <div class="col-12">
        <p>TOTAL</p>
      </div>
      <div class="col-12">
        <canvas id="myChart" ></canvas>
      </div>
      
    </div>
    <div class="col-3">
    </div>
  </div>
  <div class="row">
    <div class="col-6">
    </div>
    <div class="col-6">
    </div>
  </div>
</div>

<?php

echo $this->element('Pages/modal',['modalType' =>'addMemberModal']);
echo $this->element('Pages/modal',['modalType' =>'addComptaModal']);
echo $this->element('Pages/modal',['modalType' =>'addEventModal']);
?>

<?= $this->Html->script(['Pages/dashboardChart']) ?>
