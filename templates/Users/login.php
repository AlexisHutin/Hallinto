<div class="beige-background w-100 h-100 px-4">
    <div class="container-fluid">
        <div class="row py-4 tex-right">
            <div class="col-6 p-0">
                <?= $this->Html->image('hallinto-logo.png', ['alt' => 'Hallinto logo', 'class'=>'hallintoLogo']); ?>
            </div>
            <div class="col-6 py-3 text-right">
                <?= $this->Html->link("Créer un compte", ['action' => 'add']) ?>
            </div>
        </div>
    </div>
    <div class="container py-5">
        <div class="row users form form-group white-background rounded-corners grey-border form-bloc form-bloc p-5 mx-auto">
        <legend class="text-center th1-2"><?= __('Connexion') ?></legend>
            <div class="col-12 px-5">
            <?= $this->Form->create() ?>
                <fieldset>
                    <div class="mt-4">
                        <?= $this->Form->control('email', ['required' => true,'type' => 'text','placeholder' => 'Email','class' =>'form-control input-form','id'=>'emailInput']) ?>
                    </div>
                    <div class="mt-4">
                        <?= $this->Form->control('password', ['required' => true,'placeholder' => 'Mot de passe','class' =>'form-control input-form','id'=>'passwordInput']) ?>
                    </div>
                </fieldset>
            </div>
            <div class="col-12 text-center mt-4 px-5">
                    <div class="">
                        <?= $this->Form->submit(__('Se connecter'), ['class' =>'btn button-full tx3']); ?>
                    </div>
            </div>
            <?= $this->Form->end() ?>            
        </div>
    </div>
</div>
