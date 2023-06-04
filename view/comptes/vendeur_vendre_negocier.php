<div id="header">
    <nav class="navbar navbar-expand-sm">
        <div class="container-fluid">
            <ul class="navbar-nav">
                <li class="nav-item1">
                    <a class="nav-link active" href="<?php echo BASE_URL.'/marchand/comptes/accueil/'.$pseudo ?>">MAMA ROMA</a>
                </li>
                <li class="nav-item2_negocier">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/vendre_publier/'.$pseudo ?>">Vendre un article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/supprimer/'.$pseudo ?>">Supprimer un article</a>
                </li>
                <li class="nav-item">
                    <a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/compte_informations/'.$pseudo ?>">Mon compte</a>
                </li>
            </ul>
        </div>
    </nav>
</div>
<div id="section">
    <div class="carre_vendre_negocier">
        <div class="container vendreArticle">
            <!-- 2 CHOIX POSSIBLE : PUBLIER OU NEGOCIER -->
            <div class="row row1_negocier">
                <div class="col-6 publier_negocier"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/vendre_publier/'.$pseudo ?>">Publier un article</a></div>
                <div class="col-6 publier_publier"><a class="nav-link" href="<?php echo BASE_URL.'/marchand/comptes/vendre_negocier/'.$pseudo ?>">Négocier un article</a></div>
            </div>
            <div class="row row2_negocier">
                <div class="col-12 text-center">
                    <div class="accepter_negocier">Accepter</div>
                    <div class="refuser_negocier">Refuser</div>
                </div>
            </div>
        </div>
    </div>
</div>