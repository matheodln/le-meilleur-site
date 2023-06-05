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
<div id="section_2">
    <div class="col-12 column-height">
        <div class="atp h1"> <h1>Achat immédiat</h1> </div>
    </div>
    <div class="container">
        <div class="row">
            <div class="col-12 column-height">
                <div class="section-column">
                    <form action="<?php echo BASE_URL.'/voyageur/comptes/tout_parcourir_achat_immediat/'.$pseudo ?>" method="post" onsubmit="return validateForm()">
                        <div class="form-check form-check-inline">
                            <select class="form-control" name="Type_Item">
                                <option value="Tout">Tout</option>
                                <option value="Vetements">Vêtements</option>
                                <option value="Accesoires">Accessoires</option>
                                <option value="Objets">Objets</option>
                            </select>
                        </div>
                        <input type="submit" value="Filtrer" class="custom-button_publier">
                    </form>
                </div>
            </div>
        </div>
        <hr style="background-color: lightgray; height: 1px; border: none; margin: 20px 0;">
        <div class="row">
            <?php $row=0 ?>
            <?php foreach($items as $k => $v):?>

                <?php if ($row % 4 == 0): ?>
                    </div>
                    <div class="row">
                <?php endif; ?>
                <div class="col-md-3">
                    <div class="box_article_accueil">
                        <figure>
                            <a href="<?php echo BASE_URL.'/voyageur/comptes/Item_achat_immediat/'.$pseudo.','.$v->Photo ?>">
                                <img src="<?php echo IMAGE_URL.$v->Photo; ?>" alt="<?php echo $v->Nom; ?>" class="article_accueil_vendeur" style="width: 100%";>
                            </a>
                            <figcaption><?php echo $v->Nom; ?><br>Prix: <?php echo $v->Prix; ?></figcaption>
                        </figure>
                    </div>
                </div>
                <?php $row++ ?>
            <?php endforeach;?>

        </div>
    </div>

</div>
