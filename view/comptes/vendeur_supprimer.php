<div id="header">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item1">
                    <a class="nav-link active" href="<?php echo BASE_URL.'/marchand/comptes/accueil/'.$pseudo ?>">MAMA ROMA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/vendre_publier/'.$pseudo ?>">Vendre un article</a>
                </li>
                <li class="nav-item2_supprimer">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/supprimer/'.$pseudo ?>">Supprimer un article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_informations/'.$pseudo ?>">Mon compte</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div id="section_2">
        <h2>Vos articles: </h2>
        <div class="container vendreArticle">
            <div class="texte_article_supprimer">
                <p>
                    <?php foreach ($item_vendeur as $k => $v): ?>
                        <?php echo 'Nom de l\'objet: '.$v->Nom.', Date de publication: '.$v->Date_Publication.', Quantité initial: '.$v->Quantite_initial.', Quantite_actuel: '.$v->Quantite_actuel.', reference: '.$v->Nom; ?><br>
                    <?php endforeach;?>
                </p>
            </div>
            <form action="<?php echo BASE_URL.'/marchand/comptes/supprimer/'.$pseudo ?>" method="post">
                <div class="row publier_article_supprimer">
                    <div class="col-4 nom">Référence :</div>
                    <div class="col-4 mdp">Mot de passe :</div>
                </div>
                <div class="row publier_article_supprimer">
                    <div class="col-4 saisie-nom">
                        <div class="carre-saisie_supprimer">
                            <textarea class="form-control_supprimer" rows="3" placeholder="Saisissez la référence de l'article" name="reference"></textarea>
                        </div>
                    </div>
                    <div class="col-4 saisie-mdp">
                        <div class="carre-saisie_supprimer">
                            <textarea class="form-control_supprimer" rows="3" placeholder="Saisissez votre mot de passe" name="mdp"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Supprimer" class="custom-button_supprimer">
            </form>
            <?php echo $this->Session->flash(); ?>
        </div>
</div>