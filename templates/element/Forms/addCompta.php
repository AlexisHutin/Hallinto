<div class="eventsform form-group">
  <?= $this->Form->create($accountingEntry) ?>
  <fieldset>
    <legend><?= __('Add Event') ?></legend>
    <?php
    echo $this->Form->control('accounting_entry_type_id', ['options' => $type, 'class' => 'form-control input-form']);
    echo $this->Form->control('event_id', ['options' => [-1 => ""] + $event, 'class' => 'form-control input-form']);
    echo $this->Form->control('amount', ['class' => 'form-control input-form']);
    echo $this->Form->control('reason', ['class' => 'form-control input-form']);
    ?>
  </fieldset>
</div>