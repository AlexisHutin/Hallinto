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
                <p class="orange-font tx3 mb-2">Déposer vos fichier pour les téléverser</p>
                <p class="orange-font tx4  mb-2">ou</p>
                <button class="btn button-full mx-2 mb-2">Séléctionner des fichiers</button>
                <p class="orange-font tx4  mb-2">Taille max 9999Mo</p>
              </div>  
            </div>
          </div>
        </div>
          <div class="col-12 mt-3">
            <h2 class="th3-2">Création d'association</h2>
            <div class="card-group">
              <div class="card box-shadow beige2-background rounded-corners m-3">
                <a href="/webroot/docs/file.pdf" download>
                  <div class="card-body rounded-corners grey-background px-4 pt-4 pb-0 ">
                    <div class="white-background mx-2 mt-2 mb-0 p-3 text-center box-shadow">
                      <p class="tx2 font-weight-bold">Formulaire</p>
                      <p>Formulaire de creation d'association. Bien remplir tout les cases. Ne pas oublier de signer.</p>
                    </div>
                  </div>
                </a>
                <div class="card-footer py-3">
                  <p class="card-text tx3">
                    <i class="col-1"><?= $this->Html->image('PDF_file_icon.svg', ['alt' => 'PDF icon','class'=>'pdf-img']);?></i>
                    <span class="col-10 tx4 font-weight-bold">Formulaire de creation</span>
                    <i class="col-1 icon-dot-3"></i>
                  </p>
                </div>
              </div>
              <div class="card box-shadow beige2-background rounded-corners m-3">
                <a href="/webroot/docs/file.pdf" download>
                  <div class="card-body rounded-corners grey-background px-4 pt-4 pb-0 ">
                    <div class="white-background mx-2 mt-2 mb-0 p-3 text-center box-shadow">
                      <p class="tx2 font-weight-bold">Formulaire d'AG</p>
                      <p>Formulaire pour les AG. Bien noter tout les particpants. Faire une résumé de ce qui est dit en AG.</p>
                    </div>
                  </div>
                </a>
                <div class="card-footer py-3">
                  <p class="card-text tx3">
                    <i class="col-1"><?= $this->Html->image('PDF_file_icon.svg', ['alt' => 'PDF icon','class'=>'pdf-img']);?></i>
                    <span class="col-10 tx4 font-weight-bold">Formulaire d'AG</span>
                    <i class="col-1 icon-dot-3"></i>
                  </p>                 
                </div>
              </div>
              <div class="card box-shadow beige2-background rounded-corners m-3">
                <a href="/webroot/docs/file.pdf" download>
                  <div class="card-body rounded-corners grey-background px-4 pt-4 pb-0 ">
                    <div class="white-background mx-2 mt-2 mb-0 p-3 text-center box-shadow">
                      <p class="tx2 font-weight-bold">Dossier de dette</p>
                      <p>Formulaire pour le dossier de dette. Préciser les montants. Préciser les délais ouvrables</p>
                    </div>
                  </div>
                </a>
                <div class="card-footer py-3">
                  <p class="card-text tx3">
                    <i class="col-1"><?= $this->Html->image('PDF_file_icon.svg', ['alt' => 'PDF icon','class'=>'pdf-img']);?></i>
                    <span class="col-10 tx4 font-weight-bold">Dossier de dette</span>
                    <i class="col-1 icon-dot-3"></i>
                  </p>                 
                </div>
              </div>
              <div class="card box-shadow beige2-background rounded-corners m-3">
                <a href="/webroot/docs/file.pdf" download>
                  <div class="card-body rounded-corners grey-background px-4 pt-4 pb-0 ">
                    <div class="white-background mx-2 mt-2 mb-0 p-3 text-center box-shadow">
                      <p class="tx2 font-weight-bold">Dossier de status</p>
                      <p>Bien noter le nom de l'association. Identifier la date en rouge et préciser le lieu de complétion.</p>
                    </div>
                  </div>
                </a>
                <div class="card-footer py-3">
                  <p class="card-text tx3">
                    <i class="col-1"><?= $this->Html->image('PDF_file_icon.svg', ['alt' => 'PDF icon','class'=>'pdf-img']);?></i>
                    <span class="col-10 tx4 font-weight-bold">Dossier de statuts</span>
                    <i class="col-1 icon-dot-3"></i>
                  </p>                 
                </div>
              </div>
            </div>
          </div>
          <div class="col-12 mt-3">
            <h2 class="th3-2">Compte rendus</h2>
            <div class="card-group">
              <div class="card box-shadow beige2-background rounded-corners m-3">
                <a href="/webroot/docs/file.pdf" download>
                  <div class="card-body rounded-corners grey-background px-4 pt-4 pb-0 ">
                    <div class="white-background mx-2 mt-2 mb-0 p-3 text-center box-shadow">
                      <p class="tx2 font-weight-bold">Réglement</p>
                      <p>Règles à suivre. Aucune dérogation est autorisé. à faire signer par tout le monde.</p>
                    </div>
                  </div>
                </a>
                <div class="card-footer py-3">
                  <p class="card-text tx3">
                    <i class="col-1"><?= $this->Html->image('PDF_file_icon.svg', ['alt' => 'PDF icon','class'=>'pdf-img']);?></i>
                    <span class="col-10 tx4 font-weight-bold">Règlement d'intérieur</span>
                    <i class="col-1 icon-dot-3"></i>
                  </p>
                </div>
              </div>
              <div class="card box-shadow beige2-background rounded-corners m-3">
                <a href="/webroot/docs/file.pdf" download>
                  <div class="card-body rounded-corners grey-background px-4 pt-4 pb-0 ">
                    <div class="white-background mx-2 mt-2 mb-0 p-3 text-center box-shadow">
                      <p class="tx2 font-weight-bold">Création</p>
                      <p>Pensez à préciser la nature de l'évènement en intitulé. Toujours mettre le prix à gauche </p>
                    </div>
                  </div>
                </a>
                <div class="card-footer py-3">
                  <p class="card-text tx3">
                    <i class="col-1"><?= $this->Html->image('PDF_file_icon.svg', ['alt' => 'PDF icon','class'=>'pdf-img']);?></i>
                    <span class="col-10 tx4 font-weight-bold">Créations d'évènements</span>
                    <i class="col-1 icon-dot-3"></i>
                  </p>                 
                </div>
              </div>
              <div class="card box-shadow beige2-background rounded-corners m-3">
                <a href="/webroot/docs/file.pdf" download>
                  <div class="card-body rounded-corners grey-background px-4 pt-4 pb-0 ">
                    <div class="white-background mx-2 mt-2 mb-0 p-3 text-center box-shadow">
                      <p class="tx2 font-weight-bold">Dossier type</p>
                      <p>Ajoutez une photo d'identité. C'est important de doubler les exemplaires.</p>
                    </div>
                  </div>
                </a>
                <div class="card-footer py-3">
                  <p class="card-text tx3">
                    <i class="col-1"><?= $this->Html->image('PDF_file_icon.svg', ['alt' => 'PDF icon','class'=>'pdf-img']);?></i>
                    <span class="col-10 tx4 font-weight-bold">Dossier de dette</span>
                    <i class="col-1 icon-dot-3"></i>
                  </p>                 
                </div>
              </div>
              <div class="card box-shadow beige2-background rounded-corners m-3">
                <a href="/webroot/docs/file.pdf" download>
                  <div class="card-body rounded-corners grey-background px-4 pt-4 pb-0 ">
                    <div class="white-background mx-2 mt-2 mb-0 p-3 text-center box-shadow">
                      <p class="tx2 font-weight-bold">Dossier facture</p>
                      <p>L'intitulé est essentiel à spécialiser. Créer un tableau avec 3 partis afin de spécialiser clairement;</p>
                    </div>
                  </div>
                </a>
                <div class="card-footer py-3">
                  <p class="card-text tx3">
                    <i class="col-1"><?= $this->Html->image('PDF_file_icon.svg', ['alt' => 'PDF icon','class'=>'pdf-img']);?></i>
                    <span class="col-10 tx4 font-weight-bold">Dossier de statuts</span>
                    <i class="col-1 icon-dot-3"></i>
                  </p>                 
                </div>
              </div>
            </div>
          </div>
        </div>
      </div>
    </div>
  </div>
</div>