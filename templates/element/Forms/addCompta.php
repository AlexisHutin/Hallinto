<div class="eventsform form-group">
  <?= $this->Form->create($accountingEntry) ?>
  <fieldset>
    <?php
    echo $this->Form->hidden('add_accounting_entry');
    echo $this->Form->control('accounting_entry_type_id', ['options' => $type, 'class' => 'form-control input-form']);
    echo $this->Form->control('event_id', ['options' => [-1 => ""] + $events, 'class' => 'form-control input-form']);
    echo $this->Form->control('amount', ['class' => 'form-control input-form']);
    echo $this->Form->control('reason', ['class' => 'form-control input-form']);
    ?>
  </fieldset>
</div>