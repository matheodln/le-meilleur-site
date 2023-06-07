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

<!-- SECTION -->
<div id="section">
    <div class="container">
        <div class="row">
            <div class="col-4 column-height_zoom_article_2">
                <div class="section-column_zoom_article_carrousel">
                    <div id="carrousel">
                        <ul>
                            <?php foreach($photosItem as $k => $v):?>
                                <li><img src="<?php echo IMAGE_URL.$v->Nom_Photo; ?>" width="300" height="300" /></li>
                            <?php endforeach;?>
                        </ul>
                        <div class="carousel-navigation">
                            <div class="carousel-prev">&#8592;</div>
                            <div class="carousel-next">&#8594;</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-8 column-height_zoom_article_1">
                <form action="<?php echo BASE_URL.'/voyageur/comptes/Item_transaction/'.$pseudo.','.$imgItem ?>" method="post">
                    <div class="section-column_zoom_article">
                        <h2><?php echo $item->Nom ?></h2>
                        <p><?php echo $item->Description ?></p> <br>
                        <h4><?php echo $item->Prix ?> écus</h4> <br>
                        <h4> Quantité restante : <?php echo ($item->Quantite_actuel)?></h4> <br>
                        <div class="proposer_prix">
                                <div class="form-group d-flex">
                                    <input type="number" id="nouveau_prix" name="nouveau_prix" class="form-control" style="width: auto;" placeholder="Proposer un nouveau prix">
                                    <div class="txt_ecus"> <p class="ml-1 mb-0">écus</p> </div>
                                </div>
                        </div>
                    </div>
                    <div class="section-column_ajoutpanier">
                        <div class="boutton_ap"><button class="btn btn-success custom-btn custom-black-btn">AJOUTER AU PANIER</button> </div>
                    </div>
                </form>
                <?php echo $this->Session->flash(); ?>
            </div>
        </div>
    </div>
</div>