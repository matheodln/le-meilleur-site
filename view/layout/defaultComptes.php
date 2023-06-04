<!DOCTYPE html>
<html>
    <head>
        <meta charset="utf-8">
        <meta name="" content="width=device-width, initial-scale=1">
        <title>Mon compte - MAMA ROMA</title>

        <!-- Chargement de Bootstrap -->
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/css/bootstrap.min.css" rel="stylesheet">
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.2.3/dist/js/bootstrap.bundle.min.js"></script>


        <!-- CSS Partie -->
        <style>
            /* CE QUI NE CHANGE JAMAIS */
            .error-message {
                color: red;
            }
            #section {
                background-image: url("<?php echo IMAGE_URL.'arriere_plan.png' ?>");
                background-size: cover;
                background-repeat: no-repeat;
                padding-top: 30px;
                min-height: 100vh;
            }
            #section_2 {
                background-size: cover;
                background-repeat: no-repeat;
                padding-top: 30px;
                background-color: beige;
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
            #header {
                background-color: #efdcbf;
                min-height: 80px;
                position: fixed;
                top: 0;
                left: 0;
                right: 0;
                z-index: 9999;
            }

            .nav-item1 {
                font-size: 30px;
                font-family: "Impact", sans-serif;
                padding-left: 5px;
            }

            .nav-item {
                padding-left: 10px;
                padding-top: 10px;
            }

            body {

                padding-top: 60px;
            }
            /* ACCUEIL SITE MARCHAND */
            .box_article_accueil {
                width: 230px;
                height: 280px;
                background-color: white;
                border-radius: 10px;
                border: 2px solid darkgreen;
                margin-bottom: 70px;
                text-align: center;
            }
            .article_accueil_vendeur {
                width: 225px;
                height: 277px;
                border-radius: 10px;
                margin-bottom: 10px;
            }
            .texte_case_article_accueil {
                text-align: center;
                margin-bottom: 30px;
            }
            .nav-item1_vendeur {
                font-size: 30px;
                font-family: "Impact", sans-serif;
                padding-left: 5px;
            }

            .nav-item_vendeur {
                padding-left: 10px;
                padding-top: 10px;
            }

            /* VENDRE */
            /* PUBLIER UN ARTICLE */
            .carre_vendre_publier {
                width: 1300px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 7%;
                border: 2px solid darkgreen;
            }

            .row1_publier {
                padding-top: 30px;
                text-align: center;
                font-size: 20px;
            }
            .negocier_publier {
                font-weight: lighter;/* Couleur pour dire qu'on est pas sur cet onglet */
                position: relative;
            }

            .negocier_publier::after {
                content: "";
                display: block;
                width: 100%;
                height: 1px;
                background-color: rgba(0, 0, 0, 0.2);
                margin-top: 5px;
            }
            .custom-button_publier {
                background-color: #2C5545;
                color: white;
                margin-top: 40px;
                margin-left: 590px;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
            }
            .publier_publier {
                border-right: 1px solid black;
                margin-bottom: 60px;
                position: relative;
            }

            .publier_publier::after {
                content: "";
                display: block;
                width: 100%;
                height: 2px;
                background-color: green;
                margin-top: 5px;
            }

            .publier_article_publier  {
                margin-top: 10px;
                padding-left: 85px;
            }

            .carre-saisie_publier {
                width: 300px;
                height: 50px;
                margin-left: 0px;
                background-color: #f8f9fa;
                border: 1px solid #ced4da;
                border-radius: 4px;
                padding: 10px;
                display: block;
            }
            .carre-saisie_publier textarea {
                border: none;
                outline: none;
                resize: none;
                width: 100%;
                height: 100%;
                padding: 0;
            }
            .nav-item2_publier {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }
            /* NEGOCIER UN ARTICLE */
            .carre_vendre_negocier {
                width: 1300px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 7%;
                border: 2px solid darkgreen;
            }

            .row1_negocier {
                padding-top: 30px;
                text-align: center;
                font-size: 20px;
            }
            .negocier_negocier {
                font-weight: lighter;
                border-right: 1px solid black;
                margin-bottom: 60px;
                position: relative;
            }

            .publier_negocier {
                position: relative;
                margin-bottom: 60px;
                border-right: 1px solid black;
            }

            .negocier_negocier::after {
                content: "";
                display: block;
                width: 100%;
                height: 2px;
                background-color: green;
                margin-top: 5px;
            }

            .publier_negocier::after {
                content: "";
                display: block;
                width: 100%;
                height: 1px;
                background-color: rgba(0, 0, 0, 0.2); /* Couleur pour dire qu'on est pas sur cet onglet */
                margin-top: 5px;
            }

            .accepter_negocier {
                margin-top: 430px;
                display: inline-block;

                background-color: green;
                color: white;
                border: 2px solid green;
                padding: 13px;
                text-align: center;
                margin-left: 0px;
                width: 100px;
            }

            .refuser_negocier {
                background-color: red;
                border-color: red;
                margin-top: 430px;
                display: inline-block;
                color: white;
                padding: 14.5px;
                margin-left: 1068px;
                text-align: center;
                width: 100px;
            }
            .nav-item2_negocier {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }

            /* SUPPRIMER */
            button.croix_supprimer {
                border: none;
                background: none;
                padding: 0;
                cursor: pointer;
            }

            button.croix_supprimer img {
                width: 30px; /* Ajustez la taille de l'image selon vos besoins */
            }
            .box_article_supprimer {
                position: relative;
                width: 230px;
                height: 280px;
                background-color: white;
                border-radius: 10px;
                border: 2px solid darkgreen;
                margin-bottom: 70px;
                text-align: center;
            }
            .article_supprimer_vendeur {
                width: 225px;
                height: 277px;
                border-radius: 10px;
                margin-bottom: 10px;
            }

            .croix_supprimer {
                position: absolute;
                top: 5px;
                left: 180px;
                width: 40px;
                height: 40px;
                z-index: 1;
            }
            .carre_vendre_supprimer {
                width: 1300px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 7%;
                border: 2px solid darkgreen;
            }
            .nav-item2_supprimer {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }


            /* COMPTE */
            /* INFORMATIONS */
            .circle_info {
                margin-top: 13px;
                margin-left: 20px;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: #2C5545;
            }
            .bonjour_info {
                margin-top: -75px;
                margin-left: 115px;
            }
            .texte_info_info, .texte_theme_info, .texte_mdp_info, .texte_reseaux_sociaux_info, .texte_aide_info, .texte_deco_info {
                margin-top: -40px;
                margin-left: 70px;
            }
            .texte1_dev_info {
                margin-top: -53px;
                margin-left: 90px;
            }
            .texte2_dev_info {
                margin-top: 30px;
                margin-left: 30px;
            }
            .carre_menu_compte_pseudo_info {
                width: 323px;
                height: 107px;
                background-color: white;
                margin-bottom: 10px;
                margin-top: -4px;
                border: 2px solid #dcdcdc;
            }
            .row1_info {
                margin-top: 40px;
                margin-left: 10px;
            }
            .row2_info {
                margin-left: 10px;
            }
            .carre_menu_compte_informations_info, .carre_menu_compte_personnaliser_info, .carre_menu_compte_mdp_info,
            .carre_menu_compte_reseaux_info, .carre_menu_compte_aide_info, .carre_dev_compte_deco_info {
                width: 323px;
                height: 62px;
                background-color: white;
                margin-bottom: 10px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_informations_info {
                border-left-color: #2C5545;
                border-left-width: 5px;
            }
            .carre_dev_compte_info {
                width: 850px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 29%;
                border: 2px solid #dcdcdc;
            }
            .nav-item2_info {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }

            .carre-saisie_info {
                width: 300px;
                height: 50px;
                margin-left: 0px;
                background-color: #f8f9fa;
                border: 1px solid #ced4da;
                border-radius: 4px;
                padding: 10px;
                display: block;
            }
            .carre-saisie_info textarea {
                border: none;
                outline: none;
                resize: none;
                width: 100%;
                height: 100%;
                padding: 0;
            }
            .custom-button_info {
                background-color: #2C5545;
                color: white;
                margin-top: 90px;
                margin-left: 310px;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
            }

            /* THEME QUI EQUIVAUT A REGLAGE */

            .circle_theme {
                margin-top: 13px;
                margin-left: 20px;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: #2C5545;
            }
            .texte1_dev_theme {
                margin-top: -53px;
                margin-left: 90px;
            }
            .texte2_dev_theme {
                margin-top: 30px;
                margin-left: 30px;
            }
            .bonjour_theme {
                margin-top: -75px;
                margin-left: 115px;
            }
            .texte_info_theme, .texte_theme_theme, .texte_mdp_theme, .texte_reseaux_sociaux_theme, .texte_aide_theme, .texte_deco_theme {
                margin-top: -40px;
                margin-left: 70px;
            }
            .row1_theme {
                margin-top: 70px;
                margin-left: 10px;
            }
            .row2_theme {
                margin-left: 10px;
            }
            .carre_menu_compte_pseudo_theme {
                width: 323px;
                height: 107px;
                background-color: white;
                margin-bottom: 10px;
                margin-top: -4px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_informations_theme, .carre_menu_compte_personnaliser_theme, .carre_menu_compte_mdp_theme,
            .carre_menu_compte_reseaux_theme, .carre_menu_compte_aide_theme, .carre_dev_compte_deco_theme {
                width: 323px;
                height: 62px;
                background-color: white;
                margin-bottom: 10px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_personnaliser_theme {
                border-left-color: #2C5545;
                border-left-width: 5px;
            }
            .carre_dev_compte_theme {
                width: 850px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 29%;
                border: 2px solid #dcdcdc;
            }
            .nav-item2_theme {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }
            .custom-button_theme {
                background-color: #2C5545;
                color: white;
                margin-top: 80px;
                margin-left: 340px;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
            }

            /* CHANGER DE MOT DE PASSE */

            .circle_mdp {
                margin-top: 13px;
                margin-left: 20px;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: #2C5545;
            }
            .texte1_dev_mdp {
                margin-top: -53px;
                margin-left: 90px;
            }
            .texte2_dev_mdp {
                margin-top: 30px;
                margin-left: 30px;
            }
            .bonjour_mdp {
                margin-top: -75px;
                margin-left: 115px;
            }
            .texte_info_mdp, .texte_theme_mdp, .texte_mdp_mdp, .texte_reseaux_sociaux_mdp, .texte_aide_mdp, .texte_deco_mdp {
                margin-top: -40px;
                margin-left: 70px;
            }
            .row1_mdp {
                margin-top: 50px;
                margin-left: 10px;
            }
            .row2_mdp {
                margin-left: 10px;
            }
            .carre_menu_compte_pseudo_mdp {
                width: 323px;
                height: 107px;
                background-color: white;
                margin-bottom: 10px;
                margin-top: -4px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_informations_mdp, .carre_menu_compte_personnaliser_mdp, .carre_menu_compte_mdp_mdp,
            .carre_menu_compte_reseaux_mdp, .carre_menu_compte_aide_mdp, .carre_dev_compte_deco_mdp {
                width: 323px;
                height: 62px;
                background-color: white;
                margin-bottom: 10px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_mdp_mdp {
                border-left-color: #2C5545;
                border-left-width: 5px;
            }
            .carre_dev_compte_mdp {
                width: 850px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 29%;
                border: 2px solid #dcdcdc;
            }
            .nav-item2_mdp {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }
            .carre-saisie_mdp {
                width: 300px;
                height: 50px;
                margin-left: 0px;
                background-color: #f8f9fa;
                border: 1px solid #ced4da;
                border-radius: 4px;
                padding: 10px;
                display: block;
            }
            .carre-saisie_mdp textarea {
                border: none;
                outline: none;
                resize: none;
                width: 100%;
                height: 100%;
                padding: 0;
            }
            .custom-button_mdp {
                background-color: #2C5545;
                color: white;
                margin-top: 80px;
                margin-left: 250px;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
            }

            /* RESEAUX SOCIAUX */
            .circle_reseaux_sociaux {
                margin-top: 13px;
                margin-left: 20px;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: #2C5545;
            }
            .texte1_dev_reseaux_sociaux {
                margin-top: -53px;
                margin-left: 90px;
            }
            .texte2_dev_reseaux_sociaux {
                margin-top: 30px;
                margin-left: 30px;
                margin-bottom: 40px;
            }
            .bonjour_reseaux_sociaux {
                margin-top: -75px;
                margin-left: 115px;
            }
            .texte_info_reseaux_sociaux, .texte_theme_reseaux_sociaux, .texte_mdp_reseaux_sociaux, .texte_reseaux_sociaux_reseaux_sociaux, .texte_aide_reseaux_sociaux, .texte_deco_reseaux_sociaux {
                margin-top: -40px;
                margin-left: 70px;
            }
            .carre_menu_compte_pseudo_reseaux_sociaux {
                width: 323px;
                height: 107px;
                background-color: white;
                margin-bottom: 10px;
                margin-top: -4px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_informations_reseaux_sociaux, .carre_menu_compte_personnaliser_reseaux_sociaux, .carre_menu_compte_mdp_reseaux_sociaux,
            .carre_menu_compte_reseaux_reseaux_sociaux, .carre_menu_compte_aide_reseaux_sociaux, .carre_dev_compte_deco_reseaux_sociaux {
                width: 323px;
                height: 62px;
                background-color: white;
                margin-bottom: 10px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_reseaux_reseaux_sociaux {
                border-left-color: #2C5545;
                border-left-width: 5px;
            }
            .carre_dev_compte_reseaux_sociaux {
                width: 850px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 29%;
                border: 2px solid #dcdcdc;
            }
            .nav-item2_reseaux_sociaux{
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }
            .icones_reseaux_sociaux {
                margin-left: 60px;
            }

            /* BESOIN D'AIDE */
            .circle_aide {
                margin-top: 13px;
                margin-left: 20px;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: #2C5545;
            }
            .texte1_dev_aide {
                margin-top: -53px;
                margin-left: 90px;
            }
            .texte2_dev_aide {
                margin-top: 30px;
                margin-left: 30px;
            }
            .texte2_dev_aide h6 span {
                text-decoration: underline;
                cursor: pointer;
            }
            .texte3_dev_aide {
                display: inline-block;
                background-color: #2C5545;
                color: white;
                margin-top: 50px;
                margin-left: 30px;
                text-align: center;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
            }
            .bonjour_aide {
                margin-top: -75px;
                margin-left: 115px;
            }
            .texte_info_aide, .texte_theme_aide, .texte_mdp_aide, .texte_reseaux_sociaux_aide, .texte_aide_aide, .texte_deco_aide {
                margin-top: -40px;
                margin-left: 70px;
            }
            .carre_menu_compte_pseudo_aide {
                width: 323px;
                height: 107px;
                background-color: white;
                margin-bottom: 10px;
                margin-top: -4px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_informations_aide, .carre_menu_compte_personnaliser_aide, .carre_menu_compte_mdp_aide,
            .carre_menu_compte_reseaux_aide, .carre_menu_compte_aide_aide, .carre_dev_compte_deco_aide {
                width: 323px;
                height: 62px;
                background-color: white;
                margin-bottom: 10px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_aide_aide {
                border-left-color: #2C5545;
                border-left-width: 5px;
            }
            .carre_dev_compte_aide {
                width: 850px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 29%;
                border: 2px solid #dcdcdc;
            }
            .nav-item2_aide {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }

            /* DECONNEXION */
            .circle_deconnexion {
                margin-top: 13px;
                margin-left: 20px;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: #2C5545;
            }
            .texte1_dev_deconnexion {
                margin-top: -53px;
                margin-left: 90px;
            }
            .texte2_dev_deconnexion {
                margin-top: 30px;
                margin-left: 30px;
            }
            .texte3_dev_deconnexion {
                display: inline-block;
                background-color: #2C5545;
                color: white;
                margin-top: 50px;
                margin-left: 30px;
                text-align: center;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
            }
            .bonjour_deconnexion {
                margin-top: -75px;
                margin-left: 115px;
            }
            .texte_info_deconnexion, .texte_theme_deconnexion, .texte_mdp_deconnexion, .texte_reseaux_sociaux_deconnexion, .texte_aide_deconnexion, .texte_deco_deconnexion {
                margin-top: -40px;
                margin-left: 70px;
            }
            .carre_menu_compte_pseudo_deconnexion {
                width: 323px;
                height: 107px;
                background-color: white;
                margin-bottom: 10px;
                margin-top: -4px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_informations_deconnexion, .carre_menu_compte_personnaliser_deconnexion, .carre_menu_compte_mdp_deconnexion,
            .carre_menu_compte_reseaux_deconnexion, .carre_menu_compte_aide_deconnexion, .carre_dev_compte_deco_deconnexion {
                width: 323px;
                height: 62px;
                background-color: white;
                margin-bottom: 10px;
                border: 2px solid #dcdcdc;
            }
            .carre_dev_compte_deco_deconnexion {
                border-left-color: #2C5545;
                border-left-width: 5px;
            }
            .carre_dev_compte_deconnexion {
                width: 850px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 29%;
                border: 2px solid #dcdcdc;
            }
            .nav-item2_deconnexion {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }
            .custom-button_deconnexion {
                background-color: red;
                color: white;
                margin-top: 10px;
                margin-left: 30px;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
            }
            /* SITE ADMIN ACCUEIL */
            .nav-item1_admin {
                font-size: 30px;
                font-family: "Impact", sans-serif;
                padding-left: 5px;
            }

            .nav-item_admin {
                padding-left: 10px;
                padding-top: 10px;
            }


            /* GERER VENDEURS */
            .nav-item2_admin_vendeur {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }

            .nav-item1_admin_vendeur {
                font-size: 30px;
                font-family: "Impact", sans-serif;
                padding-left: 5px;
            }

            .nav-item_admin_vendeur {
                padding-left: 10px;
                padding-top: 10px;
            }


            /* GERER LES ARTICLES */
            .nav-item1_admin_articles {
                font-size: 30px;
                font-family: "Impact", sans-serif;
                padding-left: 5px;
            }

            .nav-item_admin_articles {
                padding-left: 10px;
                padding-top: 10px;
            }
            .nav-item2_admin_articles {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }


            /* COMPTE ADMIN */
            /* INFORMATIONS ADMIN */
            .circle_admin_info {
                margin-top: 13px;
                margin-left: 20px;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: #2C5545;
            }
            .bonjour_admin_info {
                margin-top: -75px;
                margin-left: 115px;
            }
            .texte_info_admin_info, .texte_theme_admin_info, .texte_mdp_admin_info, .texte_deco_admin_info{
                margin-top: -40px;
                margin-left: 70px;
            }
            .texte1_dev_admin_info{
                margin-top: -53px;
                margin-left: 90px;
            }
            .carre_menu_compte_pseudo_admin_info{
                width: 323px;
                height: 107px;
                background-color: white;
                margin-bottom: 10px;
                margin-top: -4px;
                border: 2px solid #dcdcdc;
            }
            .row1_admin_info{
                margin-top: 40px;
                margin-left: 10px;
                margin-bottom: 70px;
            }
            .carre_menu_compte_informations_admin_info, .carre_menu_compte_personnaliser_admin_info, .carre_menu_compte_mdp_admin_info,
            .carre_dev_compte_deco_admin_info {
                width: 323px;
                height: 62px;
                background-color: white;
                margin-bottom: 10px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_informations_admin_info {
                border-left-color: #2C5545;
                border-left-width: 5px;
            }
            .carre_dev_compte_admin_info {
                width: 850px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 29%;
                border: 2px solid #dcdcdc;
            }
            .nav-item2_admin_info {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }


            /* ADMIN THEME (REGLAGE)  */
            .circle_admin_theme {
                margin-top: 13px;
                margin-left: 20px;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: #2C5545;
            }
            .texte1_dev_admin_theme {
                margin-top: -53px;
                margin-left: 90px;
            }
            .bonjour_admin_theme {
                margin-top: -75px;
                margin-left: 115px;
            }
            .texte_info_admin_theme, .texte_theme_admin_theme, .texte_mdp_admin_theme, .texte_deco_admin_theme {
                margin-top: -40px;
                margin-left: 70px;
            }
            .row1_admin_theme {
                margin-top: 70px;
                margin-left: 10px;
            }
            .row2_admin_theme {
                margin-left: 10px;
            }
            .carre_menu_compte_pseudo_admin_theme {
                width: 323px;
                height: 107px;
                background-color: white;
                margin-bottom: 10px;
                margin-top: -4px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_informations_admin_theme, .carre_menu_compte_personnaliser_admin_theme, .carre_menu_compte_mdp_admin_theme,
            .carre_dev_compte_deco_admin_theme {
                width: 323px;
                height: 62px;
                background-color: white;
                margin-bottom: 10px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_personnaliser_admin_theme {
                border-left-color: #2C5545;
                border-left-width: 5px;
            }
            .carre_dev_compte_admin_theme {
                width: 850px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 29%;
                border: 2px solid #dcdcdc;
            }
            .nav-item2_admin_theme {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }
            .custom-button_admin_theme {
                background-color: #2C5545;
                color: white;
                margin-top: 80px;
                margin-left: 340px;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
            }

            /* ADMIN MDP */
            .circle_admin_mdp {
                margin-top: 13px;
                margin-left: 20px;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: #2C5545;
            }
            .texte1_dev_admin_mdp {
                margin-top: -53px;
                margin-left: 90px;
            }
            .bonjour_admin_mdp {
                margin-top: -75px;
                margin-left: 115px;
            }
            .texte_info_admin_mdp, .texte_theme_admin_mdp, .texte_mdp_admin_mdp, .texte_deco_admin_mdp {
                margin-top: -40px;
                margin-left: 70px;
            }
            .row1_admin_mdp {
                margin-top: 50px;
                margin-left: 10px;
            }
            .row2_admin_mdp {
                margin-left: 10px;
            }
            .carre_menu_compte_pseudo_admin_mdp {
                width: 323px;
                height: 107px;
                background-color: white;
                margin-bottom: 10px;
                margin-top: -4px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_informations_admin_mdp, .carre_menu_compte_personnaliser_admin_mdp, .carre_menu_compte_mdp_admin_mdp,
            .carre_dev_compte_deco_admin_mdp {
                width: 323px;
                height: 62px;
                background-color: white;
                margin-bottom: 10px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_mdp_admin_mdp {
                border-left-color: #2C5545;
                border-left-width: 5px;
            }
            .carre_dev_compte_admin_mdp {
                width: 850px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 29%;
                border: 2px solid #dcdcdc;
            }
            .nav-item2_admin_mdp {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }
            .carre-saisie_admin_mdp {
                width: 300px;
                height: 50px;
                margin-left: 0px;
                background-color: #f8f9fa;
                border: 1px solid #ced4da;
                border-radius: 4px;
                padding: 10px;
                display: block;
            }
            .carre-saisie_admin_mdp textarea {
                border: none;
                outline: none;
                resize: none;
                width: 100%;
                height: 100%;
                padding: 0;
            }
            .custom-button_admin_mdp {
                background-color: #2C5545;
                color: white;
                margin-top: 80px;
                margin-left: 250px;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
            }

            /* ADMIN DECONNEXION */
            .circle_admin_deconnexion {
                margin-top: 13px;
                margin-left: 20px;
                width: 80px;
                height: 80px;
                border-radius: 50%;
                background-color: #2C5545;
            }
            .texte1_dev_admin_deconnexion {
                margin-top: -53px;
                margin-left: 90px;
            }
            .texte2_dev_admin_deconnexion {
                margin-top: 30px;
                margin-left: 30px;
            }
            .texte3_dev_admin_deconnexion {
                display: inline-block;
                background-color: #2C5545;
                color: white;
                margin-top: 50px;
                margin-left: 30px;
                text-align: center;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
            }
            .bonjour_admin_deconnexion {
                margin-top: -75px;
                margin-left: 115px;
            }
            .texte_info_admin_deconnexion, .texte_theme_admin_deconnexion, .texte_mdp_admin_deconnexion, .texte_deco_admin_deconnexion {
                margin-top: -40px;
                margin-left: 70px;
            }
            .carre_menu_compte_pseudo_admin_deconnexion {
                width: 323px;
                height: 107px;
                background-color: white;
                margin-bottom: 10px;
                margin-top: -4px;
                border: 2px solid #dcdcdc;
            }
            .carre_menu_compte_informations_admin_deconnexion, .carre_menu_compte_personnaliser_admin_deconnexion, .carre_menu_compte_mdp_admin_deconnexion,
            .carre_dev_compte_deco_admin_deconnexion {
                width: 323px;
                height: 62px;
                background-color: white;
                margin-bottom: 10px;
                border: 2px solid #dcdcdc;
            }
            .carre_dev_compte_deco_admin_deconnexion {
                border-left-color: #2C5545;
                border-left-width: 5px;
            }
            .carre_dev_compte_admin_deconnexion {
                width: 850px;
                height: 540px;
                background-color: white;
                position: absolute;
                top: 12%;
                left: 29%;
                border: 2px solid #dcdcdc;
            }
            .nav-item2_admin_deconnexion {
                padding-left: 10px;
                padding-top: 10px;
                font-weight: bold;
            }
            .custom-button_admin_deconnexion {
                background-color: red;
                color: white;
                margin-top: 10px;
                margin-left: 30px;
                padding: 10px 20px;
                border-radius: 5px;
                border: none;
                cursor: pointer;
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