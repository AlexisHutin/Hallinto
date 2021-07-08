<div class="eventsform form-group">
    <?= $this->Form->create($event) ?>
    <fieldset>
      <?php
        echo $this->Form->hidden('add_event');
        echo $this->Form->control('event_name',['class' =>'form-control','label' => 'Event name']);
        echo $this->Form->control('start_date',['class' =>'form-control','label' => 'Start date']);
        echo $this->Form->control('end_date',['class' =>'form-control','label' => 'End date']);
        echo $this->Form->control('end_time',['class' =>'form-control','label' => 'Start time']);
        echo $this->Form->control('end_time',['class' =>'form-control','label' => 'End time']);
        echo $this->Form->control('location',['class' =>'form-control','label' => 'Location']);
        echo $this->Form->control('event_type_id',['class' =>'form-control', 'options' => $eventTypes, 'empty' => 'Type d\'évenement']);
      ?>
    </fieldset>
  </div>