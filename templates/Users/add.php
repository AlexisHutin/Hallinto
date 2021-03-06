
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */
?>
<div class="jumbotron jumbotron-fluid p-4 bg-light">
  <div class="container-fluid">
    <h2><small>Création d'un compte</small></h2>
  </div>
</div>
<div class="container">
    <div class="row">
        <div class="">
            <div class="users form form-group">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Add User') ?></legend>
                    <?php
                        echo $this->Form->control('username',['class' =>'form-control']);
                        echo $this->Form->control('password',['class' =>'form-control']);
                        echo $this->Form->control('first_name',['class' =>'form-control']);
                        echo $this->Form->control('last_name',['class' =>'form-control']);
                        echo $this->Form->control('email',['class' =>'form-control']);
                        //echo $this->Form->control('id_association');
                        //echo $this->Form->control('id_role');
                    ?>
                </fieldset>
                <?= $this->Form->button(__('Submit'),['class' =>'btn btn-primary']) ?>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>

<?= $this->Html->link("Se connecter", ['action' => 'login']) ?>
</div>
