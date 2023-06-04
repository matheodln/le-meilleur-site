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
                <li class="nav-item2_reseaux_sociaux">
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
                <div class="carre_menu_compte_pseudo_reseaux_sociaux">
                    <div class="circle_reseaux_sociaux"></div>
                    <div class="bonjour_reseaux_sociaux"><h6>Bonjour, </h6></div>
                </div>
                    <div class="carre_menu_compte_informations_reseaux_sociaux">
                        <div class="photo_repertoire"><img src="<?php echo IMAGE_URL.'repertoire.png'; ?>" alt="repertoire contact" style="width: 80px;"></div>
                        <div class="texte_info_reseaux_sociaux"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_informations/'.$pseudo ?>"><h6>Mes informations</h6></a></div>
                    </div>
                <div class="carre_menu_compte_personnaliser_reseaux_sociaux">
                    <div class="photo_reglage"><img src="<?php echo IMAGE_URL.'reglage.png'; ?>" alt="thème" style="width: 80px;"></div>
                    <div class="texte_theme_reseaux_sociaux"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_theme/'.$pseudo ?>"><h6>Personnaliser le thème</h6></a></div>
                </div>
                <div class="carre_menu_compte_mdp_reseaux_sociaux">
                    <div class="photo_mdp"><img src="<?php echo IMAGE_URL.'mdp.png'; ?>" alt="Changer mdp" style="width: 80px;"></div>
                    <div class="texte_mdp_reseaux_sociaux"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_mdp/'.$pseudo ?>"><h6>Changer le mot de passe</h6></a></div>
                </div>
                <div class="carre_menu_compte_reseaux_reseaux_sociaux">
                    <div class="photo_reseaux_sociaux"><img src="<?php echo IMAGE_URL.'reseaux.png'; ?>" alt="reseaux sociaux" style="width: 80px;"></div>
                    <div class="texte_reseaux_sociaux_reseaux_sociaux"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_reseaux/'.$pseudo ?>"><h6>Réseaux sociaux</h6></a></div>
                </div>
                <div class="carre_menu_compte_aide_reseaux_sociaux">
                    <div class="photo_aide"><img src="<?php echo IMAGE_URL.'aide.png'; ?>" alt="aide" style="width: 80px;"></div>
                    <div class="texte_aide_reseaux_sociaux"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_aide/'.$pseudo ?>"><h6>Besoin d'aide ? </h6></a></div>
                </div>
                <div class="carre_dev_compte_deco_reseaux_sociaux">
                    <div class="photo_deco"><img src="<?php echo IMAGE_URL.'deconnexion.png'; ?>" alt="deconnexion" style="width: 80px;"></div>
                    <div class="texte_deco_reseaux_sociaux"><a class="nav-link" href="<?php echo BASE_URL.'/pages' ?>"><h6>Déconnexion</h6></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- CARRE DE DEVELOPPEMENT -->
    <div class="carre_dev_compte_reseaux_sociaux">
        <div class="photo_reseaux"><img src="<?php echo IMAGE_URL.'reseaux.png'; ?>" alt="reseaux" style="width: 100px;"></div>
        <div class="texte1_dev_reseaux_sociaux"><h3>RESEAUX SOCIAUX</h3></div>
        <div class="texte2_dev_reseaux_sociaux">
            <p>Utilisez vos réseaux sociaux pour booster vos ventes</p><br>
            <h6>Créez-vous un compte en l'égérie de votre boutique : </h6>
        </div>
        <div class="icones_reseaux_sociaux">
            <a href="https://fr-fr.facebook.com/reg/">
                <img src="<?php echo IMAGE_URL.'facebook.png'; ?>" alt="facebook" style="width: 80px;">
            </a>
            <a href="https://www.instagram.com/accounts/signup/email/">
                <img src="<?php echo IMAGE_URL.'instagram.png'; ?>" alt="instagram" style="width: 80px;">
            </a>
            <a href="https://accounts.snapchat.com/accounts/signup?client_id=ads-api&referrer=https%253A%252F%252Fads.snapchat.com%252F">
                <img src="<?php echo IMAGE_URL.'snapchat.png'; ?>" alt="snapchat" style="width: 80px;">
            </a>
            <a href="https://www.whatsapp.com/join">
                <img src="<?php echo IMAGE_URL.'whatsapp.png'; ?>" alt="whatsapp" style="width: 80px;">
            </a>
            <a href="https://www.tiktok.com/signup?lang=fr">
                <img src="<?php echo IMAGE_URL.'tiktok.png'; ?>" alt="tiktok" style="width: 80px;">
            </a>
            <a href="https://twitter.com/i/flow/signup">
                <img src="<?php echo IMAGE_URL.'twitter.png'; ?>" alt="twitter" style="width: 80px;">
            </a>
        </div>
    </div>
</div>
