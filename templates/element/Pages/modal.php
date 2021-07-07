<div class="modal fade" id="dashboardModal-<?=$modalType?>" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php
        switch ($modalType) {
          case 'addMemberModal':
              echo $this->element('Pages/addMemberModal');
              break;
          case 'addComptaModal':
              echo $this->element('Pages/addComptaModal');
              break;
          case 'addEventModal':
              echo $this->element('Pages/addEventModal');
              break;
        }
      ?>
    </div>
  </div>
</div>