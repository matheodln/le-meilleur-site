<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAMA ROMA</title>

    <!-- Chargement de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- CSS Partie -->
    <style>
        /* HEADER */
        #header {
            background-color: #efdcbf;
            min-height: 70px;
        }

        .Barre_outils {
            text-align: center;
        }

        .title {
            padding-top: 10px;
            padding-bottom: 10px;
            font-size: 30px;
            text-align: center;
            font-family: "Bodoni MT", sans-serif;
        }

        /* SECTION */
        #section {
            display: flex;
            justify-content: center;
            align-items: center;
            height: 100vh;
            background-image: url("<?php echo IMAGE_URL.'arriere_plan.png' ?>");
            background-size: cover;
            background-position: center;
            background-repeat: no-repeat;
        }

        .white-square {
            width: 800px;
            height: 450px;
            background-color: white;
            display: flex;
            flex-direction: column;
            margin-bottom: 5px;
            border-radius: 15px;
            justify-content: center;
            align-items: center;
            border: 3px solid #2c5545;
            box-sizing: border-box;
            padding: 20px;
            font-size: 16px;
            line-height: 1.5;
            text-align: justify;
        }
        .scrollable-content {
            max-height: 300px;
            overflow: auto;
            padding: 0;
        }

        .green-square {
            width: 250px;
            height: 80px;
            background-color: #2c5545;
            display: flex;
            justify-content: center;
            position: center;
            align-items: center;
            margin-top: 80px;
            margin-left: 20px;
            border-radius: 5px;
            transition: color 0.3s;
        }

        .green-square a {
            color: white;
            text-decoration: none;
            font-weight: bold;
            position: center;

        }
        .green-square a:hover {
            color: white;
        }
        .image{
            padding-left: 300px;
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