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
</body>
</html>