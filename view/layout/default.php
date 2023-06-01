<!DOCTYPE html>
<html>
<head>
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1">
    <title>MAMA ROMA</title>

    <!-- Chargement de Bootstrap -->
    <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
    <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>

    <!-- Chargement fichier CSS -->
    <link rel="stylesheet" href="styles.css">

    <!-- CSS Partie -->
    <style>

        /*  HEADER */
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
            text-align: left;
            background-color: #2c5545;
            padding-top: 40px;
            padding-bottom: 10px;
            padding-left: 40px; /* Ajustez la valeur selon votre préférence */
            font-size: 12px;
            position: absolute;
            bottom: 0;
            right: 0;
            left: 0;
        }
        #footer tr {
            color: white;
        }
    </style>
</head>
<body>
    <?php echo $content_for_layout; ?>
</body>
</html>