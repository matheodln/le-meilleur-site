<!-- HEADER -->
<div id="header">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item1">
                    <a class="nav-link active" href="<?php echo BASE_URL.'/voyageur/comptes/accueil/'.$pseudo ?>">MAMA ROMA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/tout_parcourir/'.$pseudo ?>">Tout parcourir</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="#">Notifications</a>
                </li>
                <li class="nav-item">
                    <a href="<?php echo BASE_URL.'/voyageur/comptes/panier/'.$pseudo ?>">
                        <img src="<?php echo IMAGE_URL.'panier.png'; ?>" alt="Logo" class="logo-img">
                    </a>
                </li>
                <li class="nav-item3">
                    <a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/panier/'.$pseudo ?>">Panier</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_informations/'.$pseudo ?>">Mon compte</a>
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
                <div class="carre_menu_compte_pseudo_mdp">
                    <div class="circle"></div>
                    <div class="bonjour_mdp"><h6>Bonjour, <?php echo $pseudo?></h6></div>
                    <img src="<?php echo IMAGE_URL.$user->Photo; ?>" alt="photo ID" style="width: 80px" class="info_pdp">
                </div>
                <div class="carre_menu_compte_informations_mdp">
                    <div class="photo_repertoire"><img src="<?php echo IMAGE_URL.'repertoire.png'; ?>" alt="repertoire contact" style="width: 80px;"></div>
                    <div class="texte_info"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_informations/'.$pseudo ?>"><h6>Mes informations</h6></a></div>
                </div>
                <div class="carre_menu_compte_personnaliser_mdp">
                    <div class="photo_reglage"><img src="<?php echo IMAGE_URL.'reglage.png'; ?>" alt="thème" style="width: 80px;"></div>
                    <div class="texte_theme"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_personnaliser/'.$pseudo ?>"><h6>Personnaliser le thème</h6></a></div>
                </div>
                <div class="carre_menu_compte_mdp_mdp">
                    <div class="photo_mdp"><img src="<?php echo IMAGE_URL.'mdp.png'; ?>" alt="Changer mdp" style="width: 80px;"></div>
                    <div class="texte_mdp"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_mdp/'.$pseudo ?>"><h6>Changer le mot de passe</h6></a></div>
                </div>
                <div class="carre_menu_compte_paiement_mdp">
                    <div class="photo_paiement"><img src="<?php echo IMAGE_URL.'diamant.png'; ?>" alt="paiement" style="width: 80px;"></div>
                    <div class="texte_paiement"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_paiement/'.$pseudo ?>"><h6>Mes modes de paiement</h6></a></div>
                </div>
                <div class="carre_menu_compte_aide_mdp">
                    <div class="photo_aide"><img src="<?php echo IMAGE_URL.'aide.png'; ?>" alt="aide" style="width: 80px;"></div>
                    <div class="texte_aide"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_aide/'.$pseudo ?>"><h6>Besoin d'aide ? </h6></a></div>
                </div>
                <div class="carre_dev_compte_deco_mdp">
                    <div class="photo_deco"><img src="<?php echo IMAGE_URL.'deconnexion.png'; ?>" alt="deconnexion" style="width: 80px;"></div>
                    <div class="texte_deco"><a class="nav-link" href="<?php echo BASE_URL.'/pages' ?>"><h6>Déconnexion</h6></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- CARRE DE DEVELOPPEMENT -->
    <div class="carre_dev_compte_mdp">
        <div class="photo_mdp"><img src="<?php echo IMAGE_URL.'mdp.png'; ?>" alt="mdp" style="width: 100px;"></div>
        <div class="texte1_dev_mdp"><h3>PERSONNALISER LE THEME</h3></div>
        <div class="texte2_dev_mdp"><p>N'hésitez pas à mettre à jour votre mot de passe pour que votre compte vendeur MAMA ROMA soit toujours sécurisé.</p></div>
        <form id="mdp-form">
            <div class="container">
                <div class="row row1_mdp">
                    <div class="col-6 nom"><h6>Mot de passe actuel :</h6></div>
                </div>
                <div class="row row2_mdp">
                    <div class="col-6 saisie-nom_mdp">
                        <div class="carre-saisie_mdp">
                            <textarea id="mdp-actuel" class="form-control_mdp" rows="3" placeholder="Saisissez votre mot de passe actuel"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row row1_mdp">
                    <div class="col-6 pseudo"><h6>Nouveau mot de passe :</h6></div>
                </div>
                <div class="row row2_mdp">
                    <div class="col-6 saisie-pseudo_mdp">
                        <div class="carre-saisie_mdp">
                            <textarea id="nouveau-mdp" class="form-control_mdp" rows="3" placeholder="Saisissez votre nouveau mot de passe"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Sauvegarder le nouveau mot de passe" class="custom-button_mdp">
            </div>
        </form>
    </div>
    <div id="error-message" style="display: none; color: red;">Veuillez remplir tous les champs.</div>
</div>
