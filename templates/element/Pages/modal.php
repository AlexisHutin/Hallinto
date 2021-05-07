<div class="modal fade" id="dashboardModal-<?=$modalType?>" tabindex="-1" role="dialog" aria-labelledby="Modal" aria-hidden="true">
  <div class="modal-dialog" role="document">
    <div class="modal-content">
      <?php
        switch ($modalType) {
          case 'addMemberModal':
              echo $this->element('Members/add');
              break;
          case 'addComptaModal':
              echo $this->element('AccountingEntries/add');
              break;
          case 'addEventModal':
              echo $this->element('Events/add');
              break;
        }
      ?>
    </div>
  </div>
</div>