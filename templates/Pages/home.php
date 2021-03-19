<div class="jumbotron jumbotron-fluid p-4 bg-light">
  <div class="row px-4">
    <h2><small>Dashboard</small></h2>
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

<?php

echo $this->element('Pages/modal',['modalType' =>'addMemberModal']);
echo $this->element('Pages/modal',['modalType' =>'addComptaModal']);
echo $this->element('Pages/modal',['modalType' =>'addEventModal']);

