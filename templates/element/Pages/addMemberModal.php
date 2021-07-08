<div class="modal-header">
  <h5 class="modal-title" >Ajouter un nouvel adhérent</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <?php
    echo $this->element('Forms/addMember');
  ?>
</div>
<div class="modal-footer">
  <button type="button" class="btn button-secondary" data-dismiss="modal">Fermer</button>
  <?= $this->Form->button(__('Submit'),['class' =>'btn button-full']) ?>
  <?= $this->Form->end() ?>

</div>
