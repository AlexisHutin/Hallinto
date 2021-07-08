<div class="modal-header">
  <h5 class="modal-title">Créer un nouvel évènement</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <?= $this->element('Forms/addEvent'); ?>
</div>
<div class="modal-footer">
  <button type="button" class="btn button-secondary" data-dismiss="modal">Fermer</button>
  <?= $this->Form->button(__('Submit'), ['class' => 'btn button-full']) ?>
  <?= $this->Form->end() ?>

</div>