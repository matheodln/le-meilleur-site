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
    <!-- Notre menu principal -->
    <div class="container">
        <div class="row">
            <div class="col-12">
                <div class="carre_menu_compte_pseudo_admin_info">
                    <div class="circle_admin_info"></div>
                    <div class="bonjour_admin_info"><h6>Bonjour, <?php echo $pseudo?></h6></div>
                    <img src="<?php echo IMAGE_URL.$user->Photo; ?>" alt="deconnexion" style="width: 80px" class="info_pdp_admin">
                </div>
                <div class="carre_menu_compte_informations_admin_info">
                    <div class="photo_repertoire"><img src="<?php echo IMAGE_URL.'repertoire.png'; ?>" alt="repertoire contact" style="width: 80px;"></div>
                    <div class="texte_info_admin_info"><a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/compte_informations/'.$pseudo ?>"><h6>Mes informations</h6></a></div>
                </div>
                <div class="carre_menu_compte_personnaliser_admin_info">
                    <div class="photo_reglage"><img src="<?php echo IMAGE_URL.'reglage.png'; ?>" alt="thème" style="width: 80px;"></div>
                    <div class="texte_theme_admin_info"><a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/compte_theme/'.$pseudo ?>"><h6>Personnaliser le thème</h6></a></div>
                </div>
                <div class="carre_menu_compte_mdp_admin_info">
                    <div class="photo_mdp"><img src="<?php echo IMAGE_URL.'mdp.png'; ?>" alt="Changer mdp" style="width: 80px;"></div>
                    <div class="texte_mdp_admin_info"><a class="nav-link" href="<?php echo BASE_URL.'/gladiator/comptes/compte_mdp/'.$pseudo ?>"><h6>Changer le mot de passe</h6></a></div>
                </div>
                <div class="carre_dev_compte_deco_admin_info">
                    <div class="photo_deco"><img src="<?php echo IMAGE_URL.'deconnexion.png'; ?>" alt="deconnexion" style="width: 80px;"></div>
                    <div class="texte_deco_admin_info"><a class="nav-link" href="<?php echo BASE_URL.'/pages' ?>"><h6>Déconnexion</h6></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- Nos boutons et zones de saisie -->
    <div class="carre_dev_compte_admin_info">
        <div class="photo_repertoire"><img src="<?php echo IMAGE_URL.'repertoire.png'; ?>" alt="repertoire contact" style="width: 100px;"></div>
        <div class="texte1_dev_admin_info"><h3>MES INFORMATIONS</h3></div>
        <div class="container">
            <div class="row row1_admin_info">
                <div class="col-6 nom"><h6>Nom :</h6></div>
                <div class="col-6 prenom"><h6>Prénom :</h6></div>
            </div>
            <div class="row row2_admin_info">
                <div class="col-6 nom_saisie"><h6><?php echo $user->Nom; ?></h6></div>
                <div class="col-6 prenom_saisie"><h6><?php echo $user->Prenom; ?></h6></div>
            </div>
            <div class="row row1_admin_info">
                <div class="col-6 pseudo"><h6>Pseudo :</h6></div>
                <div class="col-6 courriel"><h6>Courriel :</h6></div>
            </div>
            <div class="row row2_admin_info">
                <div class="col-6 pseudo_saisie"><h6><?php echo $user->Pseudo; ?></h6></div>
                <div class="col-6 courriel_saisie"><h6><?php echo $user->Mail; ?></h6></div>
            </div>
        </div>
    </div>
</div>
