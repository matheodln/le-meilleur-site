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
    <h1 class="title">MAMA ROMA</h1>
    <?php echo $content_for_layout; ?>
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
</body>
</html>
