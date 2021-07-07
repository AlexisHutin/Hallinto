<div class="members form form-group">
    <?= $this->Form->create($member) ?>
    <fieldset>
      <legend><?= __('Add Member') ?></legend>
      <?php
        echo $this->Form->control('first_name',['class' =>'form-control','label' => 'First name']);
        echo $this->Form->control('last_name',['class' =>'form-control','label' => 'Last name']);
        echo $this->Form->control('birth_date',['class' =>'form-control','label' => 'Birth date']);
        echo $this->Form->control('email',['class' =>'form-control','label' => 'Email']);
        echo '<label for="contribution_is_paid">Contribution has been paid</label>';
        ?><div class="input">
        <?php
        echo $this->Form->radio(
          'contribution_is_paid',
          [
              ['value' => '0', 'text' => 'Yes'],
              ['value' => '1', 'text' => 'No']

          ]
      );
      ?></div>
        <?php
      ?>
    </fieldset>
  </div>