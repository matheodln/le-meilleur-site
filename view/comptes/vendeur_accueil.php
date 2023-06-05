<!-- HEADER -->
<div id="header">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item1_vendeur">
                    <a class="nav-link active" href="<?php echo BASE_URL.'/marchand/comptes/accueil/'.$pseudo ?>">MAMA ROMA</a>
                </li>
                <li class="nav-item_vendeur">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/vendre_publier/'.$pseudo ?>">Vendre un article</a>
                </li>
                <li class="nav-item_vendeur">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/supprimer/'.$pseudo ?>">Supprimer un article</a>
                </li>
                <li class="nav-item_vendeur">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_informations/'.$pseudo ?>">Mon compte</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<!-- SECTION -->
<div id="section_2">
    <div class="case_article">
        <div class="texte_case_article_accueil"><h1>MES ARTICLES</h1></div>
        <div class="container">
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
                            <img src="<?php echo IMAGE_URL.$v->Photo; ?>" alt="<?php echo $v->Nom; ?>" class="article_accueil_vendeur" style="width: 100%";>
                            <figcaption><?php echo $v->Nom; ?><br>Article vendus: <?php echo ($v->Quantite_initial - $v->Quantite_actuel);?>, prix: <?php echo $v->Prix; ?></figcaption>
                        </figure>
                    </div>
                </div>
                <?php $row++ ?>
                <?php endforeach;?>

            </div>
        </div>
    </div>
</div>