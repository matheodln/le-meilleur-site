<div id="header">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item1">
                    <a class="nav-link active" href="<?php echo BASE_URL.'/gladiator/comptes/compte_informations/'.$pseudo ?>">MAMA ROMA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/gerer_vendeurs/'.$pseudo ?>">Gérer les vendeurs</a>
                </li>
                <li class="nav-item2_admin_articles">
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
            <form action="traitement.php" method="POST">
                <!-- SI PUBLIER EST SELECTIONNE -->
                <div class="texte_article_supprimer_article_admin"><p>
                        <?php foreach ($items as $k => $v): ?>
                            <?php echo 'Nom item: '.$v->Nom.', Date publication: '.$v->Date_Publication; ?>, vide=non accepté, 1=accepté<br>
                        <?php endforeach;?></p></div>
                <div class="row publier_article_supprimer_article_admin">
                    <div class="col-4 nom">Référence :</div>
                    <div class="col-4 mdp">Mot de passe :</div>
                </div>
                <div class="row publier_article_supprimer_article_admin">
                    <div class="col-4 saisie-nom">
                        <div class="carre-saisie_supprimer_article_admin">
                            <textarea class="form-control_supprimer_article_admin" rows="3" placeholder="Saisissez la réference de l'article" name="reference"></textarea>
                        </div>
                    </div>
                    <div class="col-4 saisie-mdp">
                        <div class="carre-saisie_supprimer_article_admin">
                            <textarea class="form-control_supprimer_article_admin" rows="3" placeholder="Saisissez votre mot de passe" name="mdp"></textarea>
                        </div>
                    </div>
                </div>
                <select class="custom-select_article_admin">
                    <option value="">Choisissez une option</option>
                    <option value="supprimer">Supprimer</option>
                    <option value="ajouter">Ajouter</option>
                </select>
                <input type="submit" value="Mettre à jour" class="custom-select_article_admin2">
            </form>
        </div>
    </div>
</div>
