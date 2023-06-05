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
                    <a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/panier/'.$pseudo ?>"> <strong> Panier </strong> </a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/compte_informations/'.$pseudo ?>">Mon compte</a>
                </li>
            </ul>
        </div>
    </nav>
</div>

<!-- SECTION -->
<div id="section_2">
    <div class="container">
        <div class="row">
            <div class="col-12 column-height1_ap">
                <div class="section-column_ap">
                    <h3> MON PANIER </h3>
                </div>
            </div>
        </div>

        <div class="row">
            <div class="col-8 column-height_ap">
                <div class="section-column2_ap">
                    <div class="image-info-container_panier">
                        <div class="image-container2_panier">
                            <a href="zoom_article.html">
                                <img src="<?php echo IMAGE_URL.'roberouge.jpg'; ?>" alt="Image">
                            </a>
                        </div>
                        <div class="info-container_panier">
                            <h5> Prix </h5>
                            <div class="nom_article"> <p>
                                    <a href="zoom_article.html">Nom article </a>
                                </p> </div>
                            <p> Description </p>
                            <div class="quantity-container_panier">
                                <label for="quantity"> <strong> Quantité </strong> </label>
                                <select id="quantity" name="quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                        <!-- on affiche la croix que si c'est un article "achat immédiat" sinon on peut pas le supp -->
                        <div class="image-container_croix_panier">
                            <img src="<?php echo IMAGE_URL.'croix.png'; ?>" alt="Image"> <!-- quand on clique dessus ça supp l'article du panier -->
                        </div>
                    </div>
                </div>

                <!-- Structure d'un article à copier-coller -->
                <div class="section-column2_ap">
                    <div class="image-info-container_panier">
                        <div class="image-container2_panier">
                            <a href="zoom_article.html">
                                <img src="<?php echo IMAGE_URL.'robeblancheantique.jpg'; ?>" alt="Image">
                            </a>
                        </div>
                        <div class="info-container_panier">
                            <h5> Prix </h5>
                            <div class="nom_article"> <p> <a href="zoom_article.html">Nom article</a> </p> </div>
                            <p> Description </p>
                            <div class="quantity-container_panier">
                                <label for="quantity"> <strong> Quantité </strong> </label>
                                <select id="quantity" name="quantity">
                                    <option value="1">1</option>
                                    <option value="2">2</option>
                                    <option value="3">3</option>
                                    <option value="4">4</option>
                                    <option value="5">5</option>
                                    <option value="6">6</option>
                                    <option value="7">7</option>
                                    <option value="8">8</option>
                                    <option value="9">9</option>
                                    <option value="10">10</option>
                                </select>
                            </div>
                        </div>
                    </div>
                </div>
                <!-- jusqu'ici -->
            </div>

            <div class="col-4 column-height_ap3">
                <div class="section-column_ap3">
                    <h4> TOTAL </h4>
                    <hr style="border-top: 1px solid #ccc;">
                    <h5> Sous-total </h5>
                    <h5> Livraison </h5> <br>
                    <div class="boutton_ap"><button class="btn btn-success custom-btn">PAIEMENT</button> </div>
                    <div class="p_ap"> <p> <strong>Nous acceptons :</strong> </p> </div>
                    <div class="image-container_ap">
                        <img src="<?php echo IMAGE_URL.'visa.png'; ?>" alt="Image 1">
                        <img src="<?php echo IMAGE_URL.'mastercard.png'; ?>" alt="Image 2">
                        <img src="<?php echo IMAGE_URL.'paypal.png'; ?>" alt="Image 3">
                        <img src="<?php echo IMAGE_URL.'amex.png'; ?>" alt="Image 4">
                    </div>
                </div>
            </div>
        </div>
    </div>
</div>