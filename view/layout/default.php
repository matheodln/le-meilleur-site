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
            align-items: center; /* Aligne les éléments verticalement au centre */
            background-color: #efdcbf;
        }

        .presentation Logo {
            margin-left: 100px; /* Ajoute un espace à gauche de l'image */
        }
        .presentation Menu Defillant {
            margin-right: 100px; /* Ajoute un espace à droite de l'image */
        }
        #header h1 {
            padding-top: 10px; /*descendre le titre*/
            padding-bottom: 10px; /* Ajouter un espace en bas du div */
            font-size: 80px;
            text-align: center;
            font-family: "Bodoni MT", sans-serif;
        }

        /*  NAV */

        /*  SECTION  */
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
            text-align: center;
            background-color: #2c5545;
            padding-top: 10px;
            padding-bottom: 2px;
            font-size: 12px;
            position: fixed;
            bottom: 0;
            right: 0;
            left: 0;
        }
        .column {
            width: 33.33%;
            vertical-align: top;
        }

        .column ul {
            padding: 0;
            margin: 0;
        }

        .column li {
            margin-bottom: 5px;
        }
        .colonne1{
            color: white;
        }
        .colonne2{
            color: white;
        }
        .colonne3{
            color: white;
        }
        .colonne4{
            font-size:14px;
            color: black;
            font-weight: bold;
        }
    </style>
</head>
<body>
    <?php echo $content_for_layout; ?>
</body>
</html>