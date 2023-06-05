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
                <div class="carre_menu_compte_pseudo_reseaux_sociaux">
                    <div class="circle"></div>
                    <div class="bonjour_reseaux_sociaux"><h6>Bonjour, <?php echo $pseudo?></h6></div>
                    <img src="<?php echo IMAGE_URL.$user->Photo; ?>" alt="photo ID" style="width: 80px" class="info_pdp">
                </div>
                <div class="carre_menu_compte_informations_reseaux_sociaux">
                    <div class="photo_repertoire"><img src="<?php echo IMAGE_URL.'repertoire.png'; ?>" alt="repertoire contact" style="width: 80px;"></div>
                    <div class="texte_info"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_informations/'.$pseudo ?>"><h6>Mes informations</h6></a></div>
                </div>
                <div class="carre_menu_compte_personnaliser_reseaux_sociaux">
                    <div class="photo_reglage"><img src="<?php echo IMAGE_URL.'reglage.png'; ?>" alt="thème" style="width: 80px;"></div>
                    <div class="texte_theme"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_personnaliser/'.$pseudo ?>"><h6>Personnaliser le thème</h6></a></div>
                </div>
                <div class="carre_menu_compte_mdp_reseaux_sociaux">
                    <div class="photo_mdp"><img src="<?php echo IMAGE_URL.'mdp.png'; ?>" alt="Changer mdp" style="width: 80px;"></div>
                    <div class="texte_mdp"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_mdp/'.$pseudo ?>"><h6>Changer le mot de passe</h6></a></div>
                </div>
                <div class="carre_menu_compte_paiement_info">
                    <div class="photo_paiement"><img src="<?php echo IMAGE_URL.'diamant.png'; ?>" alt="paiement" style="width: 80px;"></div>
                    <div class="texte_paiement"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_paiement/'.$pseudo ?>"><h6>Mes modes de paiement</h6></a></div>
                </div>
                <div class="carre_menu_compte_aide_reseaux_sociaux">
                    <div class="photo_aide"><img src="<?php echo IMAGE_URL.'aide.png'; ?>" alt="aide" style="width: 80px;"></div>
                    <div class="texte_aide"><a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_aide/'.$pseudo ?>"><h6>Besoin d'aide ? </h6></a></div>
                </div>
                <div class="carre_dev_compte_deco_reseaux_sociaux">
                    <div class="photo_deco"><img src="<?php echo IMAGE_URL.'deconnexion.png'; ?>" alt="deconnexion" style="width: 80px;"></div>
                    <div class="texte_deco"><a class="nav-link" href="<?php echo BASE_URL.'/pages' ?>"><h6>Déconnexion</h6></a></div>
                </div>
            </div>
        </div>
    </div>
    <!-- CARRE DE DEVELOPPEMENT -->
    <div class="carre_dev_compte_paiement">
        <div class="photo_paiement"><img src="<?php echo IMAGE_URL.'diamant.png'; ?>" alt="paiement" style="width: 100px;"></div>
        <div class="texte1_dev_reseaux_sociaux"><h3>AJOUTER UN MODE DE PAIEMENT</h3></div>
        <div class="infos_paiement">
            <form id="paiement-form">
                <div class="form-group_paiement">
                    <input type="text" id="nom" name="nom" class="form-control" style="width:auto;" placeholder="Nom">
                </div>
                <div class="form-group_paiement2">
                    <input type="text" id="prenom" name="prenom" class="form-control"  style="width:auto;" placeholder="Prénom">
                </div>
                <div class="form-group_paiement2">
                    <input type="text" id="adresse" name="adresse" class="form-control"  style="width:auto;" placeholder="Adresse">
                </div>
                <div class="form-group_paiement2">
                    <input type="text" id="ville" name="ville" class="form-control"  style="width:auto;" placeholder="Ville">
                </div>
                <div class="form-group_paiement2">
                    <input type="number" id="postal" name="postal" class="form-control"  style="width:auto;" placeholder="Code postal">
                </div>
                <div class="form-group_paiement2">
                    <input type="text" id="pays" name="pays" class="form-control"  style="width:auto;" placeholder="Pays">
                </div>
                <div class="form-group_paiement2">
                    <input type="tel" id="tel" name="tel" class="form-control"  style="width:auto;" placeholder="Numéro de téléphone">
                </div>
                <div class="form-group_paiement2">
                    <select id="carte" name="carte" class="form-control" style="width:auto;font-size: 12px; height: 24px; padding: 3px 6px; margin-top: 10px">
                        <option value="visa">Visa</option>
                        <option value="mastercard">Mastercard</option>
                        <option value="amex">American Express</option>
                    </select>
                </div>
                <div class="form-group_paiement2">
                    <input type="text" id="numcarte" name="numcarte" class="form-control"  style="width:auto;" placeholder="Numéro de carte">
                </div>
                <div class="form-group_paiement2">
                    <input type="month" id="mois" name="mois" class="form-control"  style="width:auto;" placeholder="MM">
                </div>
                <div class="form-group_paiement2">
                    <input type="number" id="cvv" name="cvv" class="form-control"  style="width:auto;" placeholder="CVV">
                </div>
                <div class="boutton_ap"><button type="submit" class="btn btn-success custom-btn custom-black-btn" style="margin-top: 30px;">VALIDER</button> </div>
            </form>
            <div id="error-message" style="display: none; color: red; margin-top: 10px;">Veuillez remplir tous les champs.</div>
        </div>
    </div>
</div>