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
    <div id="carouselExampleIndicators" class="carousel slide" data-bs-ride="carousel">
        <ol class="carousel-indicators">
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="0" class="active"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="1"></li>
            <li data-bs-target="#carouselExampleIndicators" data-bs-slide-to="2"></li>
        </ol>
        <div class="carousel-inner">
            <?php $row=0 ?>
            <?php foreach($images as $k => $v):?>
                <?php if ($row == 0): ?>
                    <div class="carousel-item active">
                <?php else: ?>
                    <div class="carousel-item">
                <?php endif; ?>
                        <img src="<?php echo IMAGE_URL.$v->Nom_Photo; ?>" alt="<?php echo $v->Nom_Photo;?>" class="d-block img-fluid galerie-img">
                    </div>
                <?php $row++ ?>
                <?php endforeach; ?>
        </div>
        <a class="carousel-control-prev" href="#carouselExampleIndicators" role="button" data-bs-slide="prev">
            <span class="carousel-control-prev-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Previous</span>
        </a>
        <a class="carousel-control-next" href="#carouselExampleIndicators" role="button" data-bs-slide="next">
            <span class="carousel-control-next-icon" aria-hidden="true"></span>
            <span class="visually-hidden">Next</span>
        </a>
    </div>
</div>


