<div class="modal-header">
  <h5 class="modal-title" >Créer un nouveau événement</h5>
  <button type="button" class="close" data-dismiss="modal" aria-label="Close">
    <span aria-hidden="true">&times;</span>
  </button>
</div>
<div class="modal-body">
  <?= $this->element('Forms/addEvent');?>
</div>
<div class="modal-footer">
  <button type="button" class="btn btn-secondary" data-dismiss="modal">Fermer</button>
  <button type="button" class="btn btn-primary">Enregistrer</button>
</div>
