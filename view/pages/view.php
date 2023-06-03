<div id="header">
    <div class="presentation">
        <img src="/le-meilleur-site/programmation/images/logo.png" alt="logo" class="logo" style="width: 130px;">
        <h1>MAMA ROMA</h1>
        <div class="dropdown">
            <img src="/le-meilleur-site/programmation/images/menu-defilant.png" alt="menu-defilant" class="menu-defilant" style="width: 100px;">
            <div class="dropdown-content">
                <a href="<?php echo BASE_URL.'/connexions/connexion' ?>">Connexion</a>
                <a href="<?php echo BASE_URL.'/voyageur/connexions/inscription' ?>">Inscription</a>
            </div>
        </div>
    </div>
</div>

<div id="section">
    <div class="container-fluid promo">
        <p>Bénéficiez d’une réduction de -10 % grâce au code : ROMAINKHALASS10</p>
    </div>
    <div class="container-fluid galerie">
        <?php foreach($images as $k => $v):?>
            <img src="/le-meilleur-site/programmation/images/<?php echo $v->Nom_Photo;?>" alt="<?php echo $v->Nom_Photo;?>" style="width: 25%;">
        <?php endforeach;?>
    </div>
</div>

<!-- FOOTER -->
<div id="footer">
    <div class="container-fluid">
        <div class="row">
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li><a href="#">A propos de Mama Roma</a></li>
                    <li><a href="#">Livraison et retours</a></li>
                    <li><a href="#">Confidentialités et cookies</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li><a href="#">Conditions générales</a></li>
                    <li><a href="#">Mama Roma recrute</a></li>
                    <li><a href="#">Vous êtes en GAULE</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li><a href="#">Mobile et applis Mama Roma</a></li>
                    <li><a href="#">Responsabilité des entreprises</a></li>
                    <li><a href="#">Mama Roma Marketplace</a></li>
                </ul>
            </div>
            <div class="col-md-3">
                <ul class="list-unstyled">
                    <li><a href="#">&copy; 2023 - Mama Roma</a></li>
                </ul>
            </div>
        </div>
    </div>
</div>