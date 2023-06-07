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
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/gerer_articles/'.$pseudo ?>">Gérer les articles</a>
                </li>
                <li class="nav-item2_admin_info">
                    <a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/compte_informations/'.$pseudo ?>">Mon compte</a>
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
                <div class="carre_menu_compte_pseudo_admin_theme">
                    <div class="circle_admin_theme"></div>
                    <div class="bonjour_admin_theme"><h6>Bonjour, <?php echo $pseudo?></h6></div>
                    <img src="<?php echo IMAGE_URL.$user->Photo; ?>" alt="deconnexion" style="width: 80px" class="info_pdp_admin">
                </div>
                <div class="carre_menu_compte_informations_admin_theme">
                    <div class="photo_repertoire"><img src="<?php echo IMAGE_URL.'repertoire.png'; ?>" alt="repertoire contact" style="width: 80px;"></div>
                    <div class="texte_info_admin_theme"><a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/compte_informations/'.$pseudo ?>"><h6>Mes informations</h6></a></div>
                </div>
                <div class="carre_menu_compte_personnaliser_admin_theme">
                    <div class="photo_reglage"><img src="<?php echo IMAGE_URL.'reglage.png'; ?>" alt="thème" style="width: 80px;"></div>
                    <div class="texte_theme_admin_theme"><a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/compte_theme/'.$pseudo ?>"><h6>Personnaliser le thème</h6></a></div>
                </div>
                <div class="carre_menu_compte_mdp_admin_theme">
                    <div class="photo_mdp"><img src="<?php echo IMAGE_URL.'mdp.png'; ?>" alt="Changer mdp" style="width: 80px;"></div>
                    <div class="texte_mdp_admin_theme"><a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/compte_mdp/'.$pseudo ?>"><h6>Changer le mot de passe</h6></a></div>
                </div>
                <div class="carre_dev_compte_deco_admin_theme">
                    <div class="photo_deco"><img src="<?php echo IMAGE_URL.'deconnexion.png'; ?>" alt="deconnexion" style="width: 80px;"></div>
                    <div class="texte_deco_admin_theme"><a class="nav-link" href="<?php echo BASE_URL.'/pages' ?>"><h6>Déconnexion</h6></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- CARRE DE DEVELOPPEMENT -->
    <div class="carre_dev_compte_admin_theme">
        <div class="photo_reglage"><img src="<?php echo IMAGE_URL.'reglage.png'; ?>" alt="reglage" style="width: 100px;"></div>
        <div class="texte1_dev_admin_theme"><h3>PERSONNALISER LE THEME</h3></div>
        <form>
            <div class="container">
                <div class="row row1_admin_theme">
                    <div class="col-6 nom"><h6>Photo de profil :</h6></div>
                </div>
                <div class="row row2_admin_theme">
                    <div class="col-6 saisie-nom">
                        <div class="carre-saisie_admin_theme">
                            <textarea class="form-control_theme_admin" id="pdp_theme_admin" rows="3" placeholder="Saisissez le nom de votre photo de profil"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row row1_admin_theme">
                    <div class="col-6 pseudo"><h6>Arrière Plan :</h6></div>
                </div>
                <div class="row row2_admin_theme">
                    <div class="col-6 saisie-pseudo_admin_theme">
                        <div class="carre-saisie_admin_theme">
                            <textarea class="form-control_theme_admin" id="arriere_plan_theme_admin" rows="3" placeholder="Saisissez le nom de votre arriere plan"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Mettre à jour" class="custom-button_admin_theme">
            </div>
        </form>
    </div>
</div>
