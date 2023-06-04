<div id="header">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item1">
                    <a class="nav-link active" href="<?php echo BASE_URL.'/marchand/comptes/accueil/'.$pseudo ?>">MAMA ROMA</a>
                </li>
                <li class="nav-item2_publier">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/vendre_publier/'.$pseudo ?>">Vendre un article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/supprimer/'.$pseudo ?>">Supprimer un article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_informations/'.$pseudo ?>">Mon compte</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div id="section">
    <div class="carre_vendre_publier">
        <div class="container vendreArticle">
            <div class="row row1_publier">
                <!-- 2 CHOIX POSSIBLE : PUBLIER OU NEGOCIER -->
                <div class="col-6 publier_publier"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/vendre_publier/'.$pseudo ?>">Publier un article</a></div>
                <div class="col-6 publier_negocier"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/vendre_negocier/'.$pseudo ?>">Négocier un article</a></div>
            </div>
            <form action="<?php echo BASE_URL.'/marchand/comptes/vendre_publier/'.$pseudo ?>" method="post" onsubmit="return validateForm()">
                <!-- SI PUBLIER EST SELECTIONNE -->
                <div class="row publier_article_publier">
                    <div class="col-4 nom">Nom :</div>
                    <div class="col-4 prix">Prix :</div>
                    <div class="col-4 photos">Photo :</div>
                </div>
                <div class="row publier_article_publier">
                    <div class="col-4 saisie-nom">
                        <div class="carre-saisie_publier">
                            <textarea class="form-control_publier" rows="3" placeholder="Saisissez le nom de l'article" name="Nom"></textarea>
                            <span class="error-message" id="nom-error"></span>
                        </div>
                    </div>
                    <div class="col-4 saisie-prix">
                        <div class="carre-saisie_publier">
                            <input type="number" placeholder="Saisissez votre prix" rows="3" class="form-control_publier" name="Prix">
                            <span class="error-message" id="prix-error"></span>
                        </div>
                    </div>
                    <div class="col-4 saisie-photos">
                        <div class="carre-saisie_publier">
                            <textarea class="form-control_publier" rows="3" placeholder="Saisissez le nom d'une image pour votre article" name="Photo"></textarea>
                        </div>
                    </div>
                </div>
                <!-- SI PUBLIER SELECTIONNE -->
                <div class="row publier_article_publier">
                    <div class="col-4 nom">Description :</div>
                    <div class="col-4 prix">Quantité :</div>
                    <div class="col-4 photos">Vidéo :</div>
                </div>
                <div class="row publier_article_publier">
                    <div class="col-4 saisie-description">
                        <div class="carre-saisie_publier">
                            <textarea class="form-control" rows="3" placeholder="Description" name="Description"></textarea>
                            <span class="error-message" id="description-error"></span>
                        </div>
                    </div>
                    <div class="col-4 saisie-référence">
                        <div class="carre-saisie_publier">
                            <input type="number" placeholder="Quantité d'article" rows="3" class="form-control" name="Quantite">
                        </div>
                    </div>
                    <div class="col-4 saisie-video">
                        <div class="carre-saisie_publier">
                            <textarea class="form-control" rows="3" placeholder="Vidéo" name="Video"></textarea>
                            <span class="error-message" id="video-error"></span>
                        </div>
                    </div>
                </div>
                <!-- SI PUBLIER SELECTIONNE-->
                <div class="row publier_article_publier">
                    <div class="col-4 nom">Type article :</div>
                    <div class="col-4 prix">Type de vente :</div>
                    <div class="col-4 photos"></div>
                </div>
                <div class="row publier_article_publier">
                    <div class="col-4 saisie-type">
                        <div class="carre-saisie_publier">
                            <select class="form-control" name="Categorie">
                                <option value="vêtements">Vêtements</option>
                                <option value="objets">Objets</option>
                                <option value="accessoires">Accessoires</option>
                            </select>
                        </div>
                    </div>
                    <div class="col-4 saisie-quantite">
                        <div class="carre-saisie_publier">
                            <select class="form-control" name="type_vente">
                                <option value="achat immédiat">achat immédiat</option>
                                <option value="enchère">enchère</option>
                                <option value="négociation">négociation</option>
                            </select>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Publier" class="custom-button_publier">
            </form>
            <?php echo $this->Session->flash(); ?>
        </div>
    </div>
</div>
