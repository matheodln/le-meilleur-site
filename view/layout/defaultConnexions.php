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
    <!-- CSS Partie -->
    <style>
        html, body {
            height: 100%;
            margin: 0;
            padding: 0;
        }

        body {
            background-image: url("<?php echo IMAGE_URL.'arriere_plan.png' ?>");
            background-size: cover;
            background-repeat: no-repeat;
            background-position: center;
            display: flex;
            flex-direction: column;
            justify-content: center;
            align-items: center;
            opacity: 1;
            transition: opacity 0.75s ease-in-out;
        }

        .white-square {
            width: 400px;
            height: 500px;
            background-color: white;
            display: flex;
            flex-direction: column;
            align-items: flex-start;
            justify-content: flex-start;
            overflow-y: scroll;
            margin-bottom: auto;
        }
        .input-field {
            width: 80%;
            padding: 1px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-radius: 5px;
            font-size: 12px;
        }

        .container2 {
            display: flex;
            justify-content: space-between;
        }

        .small-box {
            width: 10px;
            height: 10px;
            background-color: #2c5545;
            border: 1px solid #000000;
            box-sizing: border-box;
            margin-bottom: 5px;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .small-box2 {
            width: 10px;
            height: 10px;
            margin-bottom: 5px;
            background: white;
            border: 1px solid #000000;
            box-sizing: border-box;
            display: flex;
            justify-content: center;
            align-items: center;
        }


        .small-box + .small-box2 {
            margin-left: 80px;
        }
        .title {
            padding-top: 40px;
            padding-bottom: 20px;
            font-size: 40px;
            text-align: center;
            font-family: "Bodoni MT", sans-serif;
        }

        .sub-title {
            text-align: center;
            font-size: 30px;
            margin-top: 30px;
            font-family: "Bodoni MT", sans-serif;
            display: flex;
            justify-content: center;
            align-items: center;
        }

        .select {
            padding-left: 120px;
        }

        .container {
            display: flex;
            justify-content: space-between;
            padding: 10px;
        }
        .box2 {
            background-color: white;
            color: black;
            padding: 10px;
            margin-right: 5px;
            text-align: center;
            text-align: center;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
        }


        .box2:last-child {
            margin-right: 0;
            border-bottom: 1px solid #ccc;
            padding-left: 50px;
        }

        .box2 h2 {
            font-size: 12px;
        }

        .box {
            flex: 1;
            background-color: #2c5545;
            color: white;
            padding: 10px;
            margin-right: 5px;
            text-align: center;
            border-bottom: 1px solid #ccc;
            cursor: pointer;
        }

        .box:last-child {
            margin-right: 0;
            border-bottom: 1px solid #ccc;
            padding-left: 10px;
        }

        .box h2 {
            font-size: 12px;
        }

        .line {
            width: 1px;
            background-color: #ccc;
            margin: 10px 5px;
        }

        .horizontal-line {
            width: calc(100% - 20px);
            background-color: #ccc;
            margin: -10px -10px 0;
        }

        .horizontal-line-top {
            width: calc(100% - 20px);
            background-color: #ccc;
            margin: 0 -10px -10px;
        }

        .form-container {
            display: flex;
            flex-direction: column;
            align-items: center;
            justify-content: center;
            padding: 20px;
            margin-top: 30px;
        }

        .input-field {
            width: 100%;
            padding: 10px;
            margin-bottom: 10px;
            box-sizing: border-box;
            border-radius: 5px;
        }

        .submit-button {
            background-color: #2c5545;
            color: white;
            border: none;
            padding: 10px;
            border-radius: 5px;
            cursor: pointer;
        }

        #footer {
            background-color: #2C5545;
            padding-top: 20px;
            font-size: 10px;
            padding-left: 15px;
            position: fixed;
            left: 0;
            bottom: 0;
            width: 100%;
        }

        #footer a {
            color: whitesmoke;
            text-decoration: none;
        }

        .photo-label {
            font-size: 14px;
            text-align: left;
        }

        .case-label {
            font-size: 14px;
            text-align: left;
            margin: 10px;
        }
        a {
            text-decoration: none;
        }
        .alert-message {
            padding: 10px;
            border-radius: 5px;
            color: #fff;
            font-weight: bold;
        }

        .alert-message.success {
            background-color: #4CAF50; /* Vert */
        }

        .alert-message.failure {
            background-color: #FF0000; /* Rouge */
        }

    </style>

</head>
<body>
    <h1 class="title">MAMA ROMA</h1>
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
