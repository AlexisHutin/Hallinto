<div class="row h-100">
  <?= $this->Element('nav') ?>
  <div class="col-10 p-0">
    <div id="dashboard" class="pb-4">
      <div class="jumbotron jumbotron-fluid p-3 mb-2">
        <div class="row px-2 mx-1">
          <h1 class="th1-1">Dashboard</h1>
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
        <div class="row mt-5 mx-0" >

            <div class="col-3 h-100">
              <div class="card text-center p-2 h-100">
                <p class="th1-1 purple-font"><?=$query1[0]['count']?></p>
                <p class="display-5">Adhérents à ASSO</p>
              </div>
            </div>

          <div class="col-6 h-100">
            <div class="card p-0 overflow-hidden h-100">
              <div class="col-12 p-2">
                <p class="th1-1 purple-font">
                  <?php
                  if($total>0){
                    echo "+".$total;
                  }else{
                    echo "-".$total;
                  }
                  ?>
                  €</p>
                  <p class="display-5 mb-0">Solde opérations comptables</p>
              </div>
              <div class="col-12 p-0 dashboard chart-container">
                <canvas id="dashboardChart" data-amounts='<?=$amounts?>'></canvas>
              </div>
            </div>
          </div>

          <div class="col-3 h-100">
              <div class="card text-center p-2 h-100">
                <h5>Documents importants</h5>
                <ul class="list-group">
                  <li class="list-group-item">
                    <i class="icon-file-text d-inline-block"></i>
                    DocumentAG.pdf
                  </li>
                  <li class="list-group-item">
                    <i class="icon-file-text d-inline-block"></i>
                    RécapitulatifMensuel.pdf
                  </li>
                  <li class="list-group-item">
                    <i class="icon-file-text d-inline-block"></i>
                    DocumentEtatDesLieux.pdf
                  </li>
                </ul>
              </div>
          </div>

        </div>
        <div class="row mt-5 mx-0" >
          <div class="col-8 h-100">
            <div class="card text-center p-2 h-100">
            <h5>Evénements à venir</h5>
            <div class="row m-2">
              <div class="col-4 p-relative">
                <div class="text-center p-relative d-inline-block">
                  <div class="horizontal-center rounded-corners white-font purple-background w-100 h-100">
                    <div class="horizontal-center">
                    <?php 
                    list($day1, $month1, $year1)= explode('/',$query4[0]['start_date']);
                    $dateObj   = DateTime::createFromFormat('!m', $month1);
                    $monthName = $dateObj->format('F');
                    ?>

                      <p class="th1-1"><?=$day1?></p>
                      <p><?= $monthName." ".$year1?></p>
                    </div>
                  </div>
                </div>
              </div>
              <div class="col-8 text-left d-inline-block">
                <h5><?=$query4[0]['event_name']?></h5>
                <p><?=$query4[0]['location']?></p>
                <p><?=$query4[0]['start_date']?></p>
                <p>NOMBRE PARTICIPANTS</p>
              </div>
            </div>
            <div class="row m-2">
              <div class="col-4 p-relative">
                <div class="text-center p-relative d-inline-block">
                  <div class="horizontal-center rounded-corners white-font orange-background w-100 h-100">
                    <div class="horizontal-center">
                    <?php 
                    list($day2, $month2, $year2)= explode('/',$query4[1]['start_date']);
                    $dateObj   = DateTime::createFromFormat('!m', $month2);
                    $monthName = $dateObj->format('F');
                    ?>

                      <p class="th1-1"><?=$day2?></p>
                      <p><?= $monthName." ".$year2?></p>
                      </div>
                  </div>
                </div>
              </div>
              <div class="col-8 text-left d-inline-block">
              <h5><?=$query4[1]['event_name']?></h5>
                <p><?=$query4[1]['location']?></p>
                <p><?=$query4[1]['start_date']?></p>
                <p>NOMBRE PARTICIPANTS</p>
              </div>
            </div>  
          </div>
        </div>
          <div class="col-4 h-100">
            <div class="card text-center p-2 h-100">
              <h5>Derniers mouvements comptables</h5>

              <table class="table">
                <tbody>
                    <?php foreach($query3 as $recentEntry){?>
                        <tr>
                          <td scope='row' class='text-left'> <?=$recentEntry['reason']?></td>
                          <?php 
                            if($recentEntry['accounting_entry_type_id'] == 2){?>
                              <td scope='row' class='text-right orange-font'>-<?=$recentEntry['amount']?></td>
                          <?php
                            }elseif($recentEntry['accounting_entry_type_id'] == 1){?>
                              <td scope='row' class='text-right purple-font'>+<?=$recentEntry['amount']?></td>
                          <?php
                            }
                          ?>
                          
                        </tr>
                        
                    <?php ;}?>
                </tbody>
              </table>
            </div>
          </div>
        </div>
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
