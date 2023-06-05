<!-- HEADER -->
<div id="header">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item1">
                    <a class="nav-link active" href="<?php echo BASE_URL.'/voyageur/comptes/accueil/'.$pseudo ?>">MAMA ROMA</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/voyageur/comptes/tout_parcourir/'.$pseudo ?>"> <strong> Tout parcourir </strong> </a>
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
    <div class="atp h1"> <h1>Tout parcourir</h1> </div>
    <div class="container">
        <div class="row">
            <div class="col-4 column-height_atp">
                <div class="section-column_atp">
                    <a href="<?php echo BASE_URL.'/voyageur/comptes/Item_meilleure_offre/'.$pseudo ?>">
                        <img src="<?php echo IMAGE_URL.'vase.png'; ?>" alt="Image 1" class="section-image">
                    </a>
                </div>
                <a href="<?php echo BASE_URL.'/voyageur/comptes/Item_meilleure_offre/'.$pseudo ?>" class="section-link_atp">
                    <h2>Enchère de la semaine</h2>
                </a>
            </div>
            <div class="col-4 column-height_atp">
                <div class="section-column_atp">
                    <a href="<?php echo BASE_URL.'/voyageur/comptes/tout_parcourir_transaction/'.$pseudo ?>">
                        <img src="<?php echo IMAGE_URL.'damevase.png'; ?>" alt="Image 2" class="section-image">
                    </a>
                </div>
                <a href="<?php echo BASE_URL.'/voyageur/comptes/tout_parcourir_transaction/'.$pseudo ?>" class="section-link_atp">
                    <h2>Négociation</h2>
                </a>
            </div>
            <div class="col-4 column-height_atp">
                <div class="section-column_atp">
                    <a href="<?php echo BASE_URL.'/voyageur/comptes/tout_parcourir_achat_immediat/'.$pseudo ?>">
                        <img src="<?php echo IMAGE_URL.'cesar.png'; ?>" alt="Image 3" class="section-image">
                    </a>
                </div>
                <a href="<?php echo BASE_URL.'/voyageur/comptes/tout_parcourir_achat_immediat/'.$pseudo ?>" class="section-link_atp">
                    <h2>Achat immédiat</h2>
                </a>
            </div>
        </div>
    </div>
</div>
