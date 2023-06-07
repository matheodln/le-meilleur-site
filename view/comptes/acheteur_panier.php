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

        <div class="flex-row-reverse">
            <form action="<?php echo BASE_URL.'/voyageur/comptes/panier/'.$pseudo ?>" method="post" onsubmit="return validateForm()">
                <div class="col-md-8">
                    <?php $i=0 ?>
                    <?php foreach($achat_immediat as $k => $v):?>
                        <div class="section-column2_ap">
                            <div class="image-info-container_panier">
                                <div class="image-container2_panier">
                                    <a href="zoom_article.html">
                                        <img src="<?php echo IMAGE_URL.$items[$i]->Photo; ?>" alt="Image">
                                    </a>
                                </div>
                                <div class="info-container_panier">
                                    <h5> <?php echo $items[$i]->Prix; ?> écus </h5>
                                    <div class="nom_article"> <p>
                                            <a href="#"><?php echo $items[$i]->Nom; ?> </a>
                                        </p> </div>
                                    <p> <?php echo $items[$i]->Description; ?> </p>
                                    <select  name="<?php echo $i ?>">
                                        <option value="-------">------</option>
                                        <option value="acheter">acheter</option>
                                        <option value="supprimer">supprimer</option>
                                    </select>
                                    <div class="quantity-container_panier">
                                        <h5> <?php echo $v->Quantite; ?> </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++ ?>
                    <?php endforeach;?>
                    <?php $i=0 ?>
                    <?php foreach($negociations as $k => $v):?>
                        <div class="section-column2_ap">
                            <div class="image-info-container_panier">
                                <div class="image-container2_panier">
                                    <a href="zoom_article.html">
                                        <img src="<?php echo IMAGE_URL.$items_nego[$i]->Photo; ?>" alt="Image">
                                    </a>
                                </div>
                                <div class="info-container_panier">
                                    <h5> Prix initial: <?php echo $items_nego[$i]->Prix; ?> écus                              Achat obligatoire si vendeur accepte</h5>
                                    <div class="nom_article"> <p>
                                            <a href="#"><?php echo $items_nego[$i]->Nom; ?> </a>
                                        </p> </div>
                                    <p> <?php echo $items_nego[$i]->Description; ?> </p>
                                    <div class="quantity-container_panier">
                                        <h5>Votre offre:  <?php echo $v->Nouveau_Prix; ?> </h5>
                                    </div>
                                </div>
                            </div>
                        </div>
                        <?php $i++ ?>
                    <?php endforeach;?>
                </div>

                <div class="col-md-4 float-right">
                    <div class="section-column_ap3">
                        <h4> TOTAL: <?php echo $total ?> écus</h4>
                        <hr style="border-top: 1px solid #ccc;">
                        <h5> Sous-total </h5>
                        <h5> Livraison:  <?php echo $acheteur->Adresse.' '.$acheteur->Ville.' '.$acheteur->Code_Postal.', '.$acheteur->Pays ?></h5> <br>
                        <select  name="paiement">
                            <?php foreach($paiements as $k => $v): ?>
                                <option value="<?php echo $v->Numero_Carte ?>"><?php echo $v->Numero_Carte ?></option>
                            <?php endforeach;?>
                        </select>
                        <div class="boutton_ap"><button class="btn btn-success custom-btn">Appliquer</button> </div>
                        <div class="p_ap"> <p> <strong>Nous acceptons :</strong> </p> </div>
                        <div class="image-container_ap">
                            <img src="<?php echo IMAGE_URL.'visa.png'; ?>" alt="Image 1">
                            <img src="<?php echo IMAGE_URL.'mastercard.png'; ?>" alt="Image 2">
                            <img src="<?php echo IMAGE_URL.'paypal.png'; ?>" alt="Image 3">
                            <img src="<?php echo IMAGE_URL.'amex.png'; ?>" alt="Image 4">
                        </div>
                    </div>
                </div>
            </form>
            <?php echo $this->Session->flash(); ?>
        </div>
    </div>
</div>