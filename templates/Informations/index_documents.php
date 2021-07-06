<div class="row h-100">
  <?= $this->Element('nav') ?>
  <div class="col-10 p-0">
    <div id="docuementsHelp" class="pb-4 accountingEntries index content">
        <div class="jumbotron jumbotron-fluid p-3 mb-2">
            <div class="row px-2 mx-1">
              <h1 class="th1-1">Documents & Aide</h1>
            </div>
        </div>
    
      <div class="container-fluid align-self-end">
        <div class="col-3">
          <form class="form-inline my-2 my-lg-0">
            <input class="form-control search input-form" type="search" placeholder="Search" aria-label="Search">
           
              <i class="icon-search orange-font"></i>
            
            </input>
          </form>
        </div>
      </div>
      <div class="container-fluid ">
        <div class="mt-3">
          <div class="col-12">
            <div class="p-3 grey-border rounded-corners">
              <p>Pour vous aider au mieux dans vos démarches administratives, nous vous proposons de nous envoyer les documents remplis par vos soins afin que notre équipe légale puisse vérifier que tous les éléments ont été remplis correctement.</p>
              <div class="m-5 p-3 orange90-background text-center rounded-corners">
                <p>Déposer vos fichier pour les téléverser <br>ou</p>
              </div>  
            </div>
          </div>
        </div>
          <div class="col-12 mt-3">
            <h2 class="th3-2">Création d'associations</h2>
            <div class="card-group">
              <div class="card m-3">
                <div class="card-body grey-background box-shadow">
                  <div class="white-background m-2 p-2 text-center box-shadow">
                    <p class="tx1">Formulaire</p>
                  </div>
                </div>
                <div class="card-footer">
                  <p class="card-text tx3">
                    <i><?= $this->Html->image('PDF_file_icon.svg', ['alt' => 'PDF icon','class'=>'pdf-img']);?></i>
                    Formulaire de creation
                  </p>
                </div>
              </div>
              <div class="card ">
                <p class="card-text">Formulaire d'AG</p>
              </div>
              <div class="card ">
                <p class="card-text">Dossier de dette</p>
              </div>
              <div class="card ">
                <p class="card-text">Dossier de statuts</p>
              </div>
            </div>
          </div>
          <div class="col-12 mt-3">
            <h2 class="th3-2">Compte rendus</h2>
            <div class="card-group">
              <div class="card ">
                <p class="card-text">Réglement intérieur</p>
              </div>
              <div class="card ">
                <p class="card-text">Création d'évenements</p>
              </div>
              <div class="card ">
                <p class="card-text">Dossier type d'adhésion</p>
              </div>
              <div class="card ">
                <p class="card-text">Dossier type de facture</p>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>