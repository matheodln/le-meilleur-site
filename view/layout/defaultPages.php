<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="" content="width=device-width, initial-scale=1">
    <title>Accueil MAMA ROMA</title>

    <!-- Chargement de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS Partie -->
    <style>

        /*  HEADER */
        .dropdown {
            position: relative;
            display: inline-block;
        }

        .dropdown-content {
            position: absolute;
            top: 100%;
            left: 0;
            z-index: 1;
            display: none;
            background-color: #f9f9f9;
            min-width: 160px;
            box-shadow: 0px 8px 16px 0px rgba(0,0,0,0.2);
            padding: 12px 16px;
        }

        .dropdown:hover .dropdown-content {
            display: block;
        }
        .presentation {
            display: flex;
            justify-content: space-between; /* Répartit les éléments sur la ligne */
            align-items: center; /* Aligne les éléments verticalement au centre */
            background-color: #efdcbf;
        }

        .logo {
            margin-right: 20px; /* Pousse le logo à droite */
            padding-left: 10px;
        }

        .menu-defilant {
            width: 150px;
        }
        #header h1 {
            padding-top: 10px; /*descendre le titre*/
            padding-bottom: 10px; /* Ajoute un espace */
            font-size: 80px;
            text-align: center;
            font-family: "Bodoni MT", sans-serif;
        }

        /*  NAV */

        /*  SECTION  */
        #section {
            min-height: 400px;
        }
        .promo {
            font-size: 25px;
            text-align: center;
            background-color: #f4e7d3;
            font-family: "Courier New", sans-serif;
            padding-top: 10px; /*descendre le titre*/
            padding-bottom: 1px; /* Spécifiez la hauteur minimale souhaitée */
        }

        .galerie {
            display: flex;
            justify-content: center;
        }

        /* FOOTER */
        #footer {
            background-color: #2C5545;
            padding-top: 20px;
            font-size: 10px;
            padding-left: 15px;
        }

        #footer a {
            color: whitesmoke;
            text-decoration: none;
        }
    </style>
</head>
<body>
    <?php echo $content_for_layout; ?>
    <!-- FOOTER -->
    <div id="footer">
        <div class="container-fluid">
            <div class="row">
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        <li><a href="<?php echo BASE_URL.'/infos/histoire' ?>">A propos de Mama Roma</a></li>
                        <li><a href="<?php echo BASE_URL.'/infos/livraisons_retours' ?>">Livraison et retours</a></li>
                        <li><a href="<?php echo BASE_URL.'/infos/confidentialite' ?>">Confidentialités et cookies</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        <li><a href="<?php echo BASE_URL.'/infos/condition_generales' ?>">Conditions générales</a></li>
                        <li><a href="<?php echo BASE_URL.'/infos/recrutement' ?>">Mama Roma recrute</a></li>
                        <li><a href="<?php echo BASE_URL.'/infos/localisation' ?>">Vous êtes en GAULE</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        <li><a href="<?php echo BASE_URL.'/infos/mobile' ?>">Mobile et applis Mama Roma</a></li>
                        <li><a href="<?php echo BASE_URL.'/infos/responsabilites' ?>">Responsabilité des entreprises</a></li>
                        <li><a href="<?php echo BASE_URL.'/infos/marketplace' ?>">Mama Roma Marketplace</a></li>
                    </ul>
                </div>
                <div class="col-md-3">
                    <ul class="list-unstyled">
                        <li><a href="<?php echo BASE_URL.'/pages' ?>">&copy; 2023 - Mama Roma</a></li>
                    </ul>
                </div>
            </div>
        </div>
    </div>
</body>
</html>