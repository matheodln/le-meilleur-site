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
    <!-- Notre menu principal -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="carre_menu_compte_pseudo">
                    <div class="circle_info"></div>
                    <div class="bonjour_info"><h6>Bonjour, <?php echo $pseudo?></h6></div>
                    <img src="<?php echo IMAGE_URL.$user->Photo; ?>" alt="photo ID" style="width: 80px" class="info_pdp">
                </div>
                <div class="carre_menu_compte_informations_info">
                    <div class="photo_repertoire"><img src="<?php echo IMAGE_URL.'repertoire.png'; ?>" alt="repertoire contact" style="width: 80px;"></div>
                    <div class="texte_info"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_informations/'.$pseudo ?>"><h6>Mes informations</h6></a></div>
                </div>
                <div class="carre_menu_compte_personnaliser_info">
                    <div class="photo_reglage"><img src="<?php echo IMAGE_URL.'reglage.png'; ?>" alt="thème" style="width: 80px;"></div>
                    <div class="texte_theme"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_personnaliser/'.$pseudo ?>"><h6>Personnaliser le thème</h6></a></div>
                </div>
                <div class="carre_menu_compte_mdp_info">
                    <div class="photo_mdp"><img src="<?php echo IMAGE_URL.'mdp.png'; ?>" alt="Changer mdp" style="width: 80px;"></div>
                    <div class="texte_mdp"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_mdp/'.$pseudo ?>"><h6>Changer le mot de passe</h6></a></div>
                </div>
                <div class="carre_menu_compte_paiement_info">
                    <div class="photo_paiement"><img src="<?php echo IMAGE_URL.'diamant.png'; ?>" alt="paiement" style="width: 80px;"></div>
                    <div class="texte_paiement"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_paiement/'.$pseudo ?>"><h6>Mes modes de paiement</h6></a></div>
                </div>
                <div class="carre_menu_compte_aide_info">
                    <div class="photo_aide"><img src="<?php echo IMAGE_URL.'aide.png'; ?>" alt="aide" style="width: 80px;"></div>
                    <div class="texte_aide"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_aide/'.$pseudo ?>"><h6>Besoin d'aide ? </h6></a></div>
                </div>
                <div class="carre_dev_compte_deco_info">
                    <div class="photo_deco"><img src="<?php echo IMAGE_URL.'deconnexion.png'; ?>" alt="deconnexion" style="width: 80px;"></div>
                    <div class="texte_deco"><a class="nav-link" href="<?php echo BASE_URL.'/pages' ?>"><h6>Déconnexion</h6></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nos boutons et zones de saisie -->
    <div class="carre_dev_compte_info">
        <div class="photo_repertoire"><img src="<?php echo IMAGE_URL.'repertoire.png'; ?>" alt="repertoire contact" style="width: 100px;"></div>
        <div class="texte1_dev"><h3>MES INFORMATIONS</h3></div>
        <div class="texte2_dev"><p>N'hésitez pas à modifier vos coordonnées ci-dessous pour que votre compte MAMA ROMA soit parfaitement à jour. </p></div>
        <form action="<?php echo BASE_URL.'/voyageur/comptes/compte_informations/'.$pseudo ?>" method="post">
            <div class="container">
                <div class="row row1_info">
                    <div class="col-6 nom"><h6>Nom :</h6></div>
                    <div class="col-6 prenom"><h6>Prénom :</h6></div>
                </div>
                <div class="row row2">
                    <div class="col-6 saisie-nom_info">
                        <div class="carre-saisie_info">
                            <textarea class="form-control_info" rows="3" placeholder="<?php echo $user->Nom; ?>" name="Nom"></textarea>
                        </div>
                    </div>
                    <div class="col-6 saisie-prenom_info">
                        <div class="carre-saisie_info">
                            <textarea class="form-control_info" rows="3" placeholder="<?php echo $user->Prenom; ?>" name="Prenom"></textarea>
                        </div>
                    </div>
                </div>
                <div class="row row1_info">
                    <div class="col-6 pseudo"><h6>Pseudo :</h6></div>
                    <div class="col-6 courriel"><h6>Courriel :</h6></div>
                </div>
                <div class="row row2">
                    <div class="col-6 saisie-pseudo_info">
                        <div class="carre-saisie_info">
                            <textarea class="form-control_info" rows="3" placeholder="<?php echo $user->Pseudo; ?>" name="Pseudo"></textarea>
                        </div>
                    </div>
                    <div class="col-6 saisie-courriel_info">
                        <div class="carre-saisie_info">
                            <textarea class="form-control_info" rows="3" placeholder="<?php echo $user->Mail; ?>" name="Courriel"></textarea>
                        </div>
                    </div>
                </div>
                <input type="submit" value="Mettre à jour" class="custom-button_info">
            </div>
        </form>
        <?php echo $this->Session->flash(); ?>
    </div>
</div>

