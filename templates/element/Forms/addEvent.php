<div class="eventsform form-group">
    <?= $this->Form->create($event) ?>
    <fieldset>
      <legend><?= __('Add Event') ?></legend>
      <?php
        echo $this->Form->control('event_name',['class' =>'form-control','label' => 'Event name']);
        echo $this->Form->control('Start_date',['class' =>'form-control','label' => 'Start date']);
        echo $this->Form->control('end_date',['class' =>'form-control','label' => 'End date']);
        echo $this->Form->control('end_time',['class' =>'form-control','label' => 'Start time']);
        echo $this->Form->control('end_time',['class' =>'form-control','label' => 'End time']);
        echo $this->Form->control('location',['class' =>'form-control','label' => 'Location']);
      ?>
    </fieldset>
    <?= $this->Form->end() ?>
  </div>