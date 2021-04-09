
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

use Cake\I18n\FrozenTime;
?>
<div class="jumbotron jumbotron-fluid p-4 bg-light">
  <div class="container-fluid">
    <h2><small>Création d'un compte</small></h2>
  </div>
</div>
<div class="container">
    <div class="row form form-group">
        <div class="col-12">
            <div class=" ">
                <?= $this->Form->create($user) ?>
                <fieldset>
                    <legend><?= __('Add User') ?></legend>
                    <?php
                        echo $this->Form->control('username',['class' =>'form-control']);
                        echo $this->Form->control('password',['class' =>'form-control']);
                        echo $this->Form->control('first_name',['class' =>'form-control']);
                        echo $this->Form->control('last_name',['class' =>'form-control']);
                        echo $this->Form->control('email',['class' =>'form-control']);
                    ?>
                </fieldset>
                <div class="row col-12 text-center mt-4">
                    <div class="col-6">
                        <?= $this->Form->button(__('Submit'),['class' =>'btn btn-primary col-6'])?>
                    </div>
                    <div class="col-6">
                        <?= $this->Html->link("Se connecter", ['action' => 'login']) ?>
                    </div>
                </div>

                <?= $this->Form->end() ?>
            </div>
        </div>
    </div>


</div>
