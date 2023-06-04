<div id="header">
    <div class="presentation">
        <img src="<?php echo IMAGE_URL.'logo.png'; ?>" alt="logo" class="logo" style="width: 130px;">
        <h1>MAMA ROMA</h1>
        <div class="dropdown">
            <img src="<?php echo IMAGE_URL.'menu-defilant.png'; ?>" alt="menu-defilant" class="menu-defilant" style="width: 100px;">
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
            <img src="<?php echo IMAGE_URL.$v->Nom_Photo; ?>" alt="<?php echo $v->Nom_Photo;?>" style="width: 25%;">
        <?php endforeach;?>
    </div>
</div>

