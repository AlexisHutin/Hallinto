
<?php
/**
 * @var \App\View\AppView $this
 * @var \App\Model\Entity\User $user
 */

use Cake\I18n\FrozenTime;
?>
<div class="beige-background w-100 h-100 px-4">
    <div class="container-fluid">
        <div class="row py-4">
        <div class="col-6 p-0">
                <?= $this->Html->image('hallinto-logo.png', ['alt' => 'Hallinto logo', 'class'=>'hallintoLogo']); ?>
            </div>
            <div class="col-6 py-3 text-right">
                <?= $this->Html->link("Se connecter", ['action' => 'login']) ?>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row form form-group white-background rounded-corners grey-border form-bloc form-bloc p-5 mx-auto">
        
            <div class="col-12">
                <div class=" ">
                    <?= $this->Form->create($user) ?>
                    <fieldset>
                        <legend class="text-center th1-2"><?= __('Inscription') ?></legend>
                        <?php
                            echo $this->Form->control('username',['class' =>'form-control','placeholder'=>'Username']);
                            echo $this->Form->control('password',['class' =>'form-control']);
                            echo $this->Form->control('first_name',['class' =>'form-control']);
                            echo $this->Form->control('last_name',['class' =>'form-control']);
                            echo $this->Form->control('email',['class' =>'form-control']);
                        ?>
                    </fieldset>
                    <div class="col-12 text-center mt-4 px-5">
                        <div class="">
                            <?= $this->Form->button(__('Submit'),['class' =>'btn button-full tx3'])?>
                        </div>
                    </div>

                    <?= $this->Form->end() ?>
                </div>
            </div>
        </div>
    </div>
</div>
