<div class="jumbotron jumbotron-fluid p-4 bg-light">
  <div class="container-fluid">
    <h2><small>Connexion</small></h2>
  </div>
</div>
<div class="container">
    <div class="row users form form-group">
        <div class="col-12">
        <?= $this->Form->create() ?>
            <fieldset>
                <?= $this->Form->control('email', ['required' => true,'type' => 'text','placeholder' => 'hello@email.fr','class' =>'form-control','id'=>'emailInput']) ?>
                <?= $this->Form->control('password', ['required' => true,'class' =>'form-control','id'=>'passwordInput']) ?>
            </fieldset>
        </div>
        <div class="row col-12">
            <div class="col-6">
                <?= $this->Form->submit(__('Login'), ['class' =>'btn btn-primary col-6']); ?>
            </div>
            <div class="col-6">
                <?= $this->Html->link("Créer un compte", ['action' => 'add']) ?>
            </div>
        </div>
        <?= $this->Form->end() ?>            
    </div>
</div>
