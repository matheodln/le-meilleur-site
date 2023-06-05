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
                            <li><img src="<?php echo IMAGE_URL.'piece1.jpg'; ?>" width="300" height="300" /></li>
                            <li><img src="<?php echo IMAGE_URL.'piece2.jpg'; ?>" width="300" height="300" /></li>
                            <li><img src="<?php echo IMAGE_URL.'piece3.jpg'; ?>" width="300" height="300" /></li>
                            <li><img src="<?php echo IMAGE_URL.'piece4.jpg'; ?>" width="300" height="300" /></li>
                        </ul>
                        <div class="carousel-navigation">
                            <div class="carousel-prev">&#8592;</div>
                            <div class="carousel-next">&#8594;</div>
                        </div>
                    </div>
                </div>
            </div>

            <div class="col-8 column-height_zoom_article_1">
                <div class="section-column_zoom_article">
                    <h2> Nom article </h2>
                    <h6> Numéro d'identification </h6>
                    <p> Description article </p> <br>
                    <h4> Prix </h4> <br>
                    <div class="proposer_prix">
                        <form class="d-flex align-items-center">
                            <div class="form-group d-flex">
                                <input type="text" id="nouveau-prix" name="nouveau-prix" class="form-control" style="width: auto;" placeholder="Proposer un nouveau prix">
                                <div class="txt_ecus"> <p class="ml-1 mb-0">écus</p> </div>
                            </div>
                        </form>
                    </div>
                </div>
                <div class="section-column_ajoutpanier">
                    <div class="boutton_ap"><button type="submit" class="btn btn-success custom-btn custom-black-btn">FAIRE UNE OFFRE</button> </div>
                </div>
            </div>
        </div>
    </div>
</div>