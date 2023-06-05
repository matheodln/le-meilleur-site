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
        .presentation {
            display: flex;
            justify-content: space-between;
            align-items: center;
            background-color: #efdcbf;
        }

        .logo {
            margin-right: 20px;
            padding-left: 10px;
        }

        .menu-defilant {
            width: 150px;
        }

        #header h1 {
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 80px;
            text-align: center;
            font-family: "Bodoni MT", sans-serif;
            color: black;
            text-decoration: none;
        }

        /*  NAV */

        /*  SECTION  */
        /* SECTION */
        #section {
            min-height: 400px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .galerie .img-fluid {
            max-width: 100%;
            max-height: 100%;
            margin: 0 auto;
            display: block;
        }


        .promo {
            font-size: 25px;
            text-align: center;
            background-color: #f4e7d3;
            font-family: "Courier New", sans-serif;
            padding-top: 10px;
            padding-bottom: 1px;
            color: black;
            text-decoration: none;
        }

        .galerie {
            display: flex;
            justify-content: flex-start;
            overflow: hidden;
        }

        .galerie img {
            width: 200px;
            height: 300px;
            object-fit: cover;
            animation: defilement 10s linear infinite;
        }

        @keyframes defilement {
            0% {
                transform: translateX(0);
            }
            50% {
                transform: translateX(-100%);
            }
            100% {
                transform: translateX(0);
            }
        }

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