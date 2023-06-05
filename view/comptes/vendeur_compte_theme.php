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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/supprimer/'.$pseudo ?>">Supprimer un article</a>
                </li>
                <li class="nav-item2_theme">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_informations/'.$pseudo ?>">Mon compte</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div id="section">
    <!--MENU-->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="carre_menu_compte_pseudo_theme">
                    <div class="circle_theme"></div>
                    <div class="bonjour_theme"><h6>Bonjour, <?php echo $pseudo?></h6></div>
                    <img src="<?php echo IMAGE_URL.$user->Photo; ?>" alt="photo ID" style="width: 80px" class="info_pdp">
                </div>
                <div class="carre_menu_compte_informations_theme">
                    <div class="photo_repertoire"><img src="<?php echo IMAGE_URL.'repertoire.png'; ?>" alt="repertoire contact" style="width: 80px;"></div>
                    <div class="texte_info_theme"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_informations/'.$pseudo ?>"><h6>Mes informations</h6></a></div>
                </div>
                <div class="carre_menu_compte_personnaliser_theme">
                    <div class="photo_reglage"><img src="<?php echo IMAGE_URL.'reglage.png'; ?>" alt="thème" style="width: 80px;"></div>
                    <div class="texte_theme_theme"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_theme/'.$pseudo ?>"><h6>Personnaliser le thème</h6></a></div>
                </div>
                <div class="carre_menu_compte_mdp_theme">
                    <div class="photo_mdp"><img src="<?php echo IMAGE_URL.'mdp.png'; ?>" alt="Changer mdp" style="width: 80px;"></div>
                    <div class="texte_mdp_theme"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_mdp/'.$pseudo ?>"><h6>Changer le mot de passe</h6></a></div>
                </div>
                <div class="carre_menu_compte_reseaux_theme">
                    <div class="photo_reseaux_sociaux"><img src="<?php echo IMAGE_URL.'reseaux.png'; ?>" alt="reseaux sociaux" style="width: 80px;"></div>
                    <div class="texte_reseaux_sociaux_theme"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_reseaux/'.$pseudo ?>"><h6>Réseaux sociaux</h6></a></div>
                </div>
                <div class="carre_menu_compte_aide_theme">
                    <div class="photo_aide"><img src="<?php echo IMAGE_URL.'aide.png'; ?>" alt="aide" style="width: 80px;"></div>
                    <div class="texte_aide_theme"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_aide/'.$pseudo ?>"><h6>Besoin d'aide ? </h6></a></div>
                </div>
                <div class="carre_dev_compte_deco_theme">
                    <div class="photo_deco"><img src="<?php echo IMAGE_URL.'deconnexion.png'; ?>" alt="deconnexion" style="width: 80px;"></div>
                    <div class="texte_deco_theme"><a class="nav-link" href="<?php echo BASE_URL.'/pages' ?>"><h6>Déconnexion</h6></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- CARRE DE DEVELOPPEMENT -->
    <div class="carre_dev_compte_theme">
        <div class="photo_reglage"><img src="<?php echo IMAGE_URL.'reglage.png'; ?>" alt="reglage" style="width: 100px;"></div>
        <div class="texte1_dev_theme"><h3>PERSONNALISER LE THEME</h3></div>
        <div class="texte2_dev_theme"><p>N'hésitez pas à personnaliser le thème du site en modifiant votre photo de profil et votre arrière-plan ci-dessous pour que votre compte MAMA ROMA soit parfaitement à votre image.  </p></div>
        <form>
            <div class="container">
                <div class="row row1_theme">
                    <div class="col-6 nom"><h6>Photo de profil :</h6></div>
                </div>
                <div class="row row2_theme">
                    <div class="col-6 saisie-nom_theme">
                        <div class="carre-saisie_theme">
                            <input type="file" id="image-input_photoprfil_theme" accept="image/*" name="photos">
                        </div>
                    </div>
                </div>
                <div class="row row1_theme">
                    <div class="col-6 pseudo"><h6>Arrière Plan :</h6></div>
                </div>
                <div class="row row2_theme">
                    <div class="col-6 saisie-pseudo_theme">
                        <div class="carre-saisie_theme">
                            <input type="file" id="image-input_arriereplan_theme" accept="image/*" name="photos">
                        </div>
                    </div>
                </div>
                <input type="submit" value="Mettre à jour" class="custom-button_theme">
            </div>
        </form>
    </div>
</div>