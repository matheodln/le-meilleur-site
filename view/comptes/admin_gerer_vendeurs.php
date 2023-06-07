<div id="header">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item1">
                    <a class="nav-link active" href="<?php echo BASE_URL.'/gladiator/comptes/compte_informations/'.$pseudo ?>">MAMA ROMA</a>
                </li>
                <li class="nav-item2_admin_vendeur">
                    <a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/gerer_vendeurs/'.$pseudo ?>">Gérer les vendeurs</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/gerer_articles/'.$pseudo ?>">Gérer les articles</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/compte_informations/'.$pseudo ?>">Mon compte</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- SECTION -->
<div id="section_2">
    <div class="carre_vendre_supprimer">
        <div class="container vendreArticle">
            <form action="<?php echo BASE_URL.'/gladiator/comptes/gerer_vendeurs/'.$pseudo ?>" method="post">
                <!-- SI PUBLIER EST SELECTIONNE -->
                <div class="texte_article_supprimer_vendeur_admin"><p>
                        <?php foreach ($vendeurs as $k => $v): ?>
                            <?php echo 'Pseudo du vendeur: '.$v->Pseudo.', statut: '.$v->Validation; ?>, vide=non accepté, 1=accepté<br>
                        <?php endforeach;?>
                    </p></div>
                <div class="row publier_article_supprimer_vendeur_admin">
                    <div class="col-4 nom">Id vendeur :</div>
                    <div class="col-4 mdp">Mot de passe :</div>
                </div>
                <div class="row publier_article_supprimer_vendeur_admin">
                    <div class="col-4 saisie-nom">
                        <div class="carre-saisie_supprimer_vendeur_admin">
                            <textarea class="form-control_supprimer_vendeur_admin" rows="3" placeholder="Saisissez l'id du vendeur" name="id"></textarea>
                        </div>
                    </div>
                    <div class="col-4 saisie-mdp">
                        <div class="carre-saisie_supprimer_vendeur_admin">
                            <textarea class="form-control_supprimer_vendeur_admin" rows="3" placeholder="Saisissez votre mot de passe" name="mdp"></textarea>
                        </div>
                    </div>
                </div>
                <select class="custom-select_vendeur_admin" name="option">
                    <option value="">Choisissez une option</option>
                    <option value="supprimer">Supprimer</option>
                    <option value="ajouter">Ajouter</option>
                </select>
                <input type="submit" value="Mettre à jour" class="custom-select_vendeur_admin2">
            </form>
            <?php echo $this->Session->flash(); ?>
        </div>
    </div>
</div>

