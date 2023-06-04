<?php
class ComptesController extends Controller{
    function acheteur_accueil($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function acheteur_tout_parcourir($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function acheteur_tout_parcourir_meilleure_offre($pseudo_type){
        if(is_array($pseudo_type)){
            $this->set('pseudo', $pseudo_type['pseudo']);
        }
        else{
            $this->set('pseudo',$pseudo_type);
        }
    }
    function acheteur_tout_parcourir_transaction($pseudo_type){
        if(is_array($pseudo_type)){
            $this->set('pseudo', $pseudo_type['pseudo']);
        }
        else{
            $this->set('pseudo',$pseudo_type);
        }

    }
    function acheteur_tout_parcourir_achat_immediat($pseudo_type){
        if(is_array($pseudo_type)){
            $this->set('pseudo', $pseudo_type['pseudo']);
        }
        else{
            $this->set('pseudo',$pseudo_type);
        }

    }
    function acheteur_Item($pseudo_item){

    }
    function acheteur_panier($pseudo){
        $this->set('pseudo', $pseudo);

    }
    function acheteur_compte_informations($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function acheteur_compte_personnaliser($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function acheteur_compte_mdp($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function acheteur_compte_paiement($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function vendeur_accueil($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function vendeur_vendre_publier($pseudo){
        //Recuperation du pseudo de l'utilisateur
        $this->set('pseudo', $pseudo);

        //Chargement des données du formulaire:
        $Nom = isset($_POST["Nom"])? $_POST["Nom"] : "";
        $Prix = isset($_POST["Prix"])? $_POST["Prix"] : "";
        $Photo = isset($_POST["Photo"])? $_POST["Photo"] : "";
        $Description = isset($_POST["Description"])? $_POST["Description"] : "";
        $Quantite = isset($_POST["Quantite"])? $_POST["Quantite"] : "";
        $Video = isset($_POST["Video"])? $_POST["Video"] : "";
        $Categorie = isset($_POST["Categorie"])? $_POST["Categorie"] : "";
        $type_vente = isset($_POST["type_vente"])? $_POST["type_vente"] : "";

        if($Nom != "" && $Prix != "" && $Photo != "" && $Description != "" && $Quantite != "" && $Video != "" && $Categorie != "" && $type_vente != "") {
            //Chargement des models necessaires:
            $this->loadModel('Item');
            $this->loadModel('Photo_Item');

            //Ajout de l'item à la base de donnée:
            $r = $this->Item->insert(array(
                'Nom' => $Nom,
                'Description' => $Description,
                'Date_Publication' => date('Y-m-d H:i:s'),
                'Prix' => $Prix,
                'Categorie' => $Categorie,
                'Quantite_actuel' => $Quantite,
                'Quantite_initial' => $Quantite,
                'Pseudo_Vendeur' => $pseudo,
                'Video' => $Video,
                'type_vente' => $type_vente
            ));

            //Ajout de la premiere photo lié à cette item:
            //recuperation du dernier id
            $nombre = $this->Item->findCount('Id_Item');
            $nombre = $nombre[0];
            $premierElement = null;
            foreach ($nombre as $element) {
                $premierElement = intval($element);
                break;
            }
            $r = $this->Photo_Item->insert(array(
                'Nom_Photo' => $Photo,
                'Id_Item' => $premierElement,
            ));

            //Commentaire pour confirmer que l'item a bien été ajouter
            $this->Session->setFlash("Item correctement ajouter", "success");
        }
    }
    function vendeur_vendre_negocier($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function vendeur_supprimer($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function vendeur_compte_informations($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function vendeur_compte_theme($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function vendeur_compte_mdp($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function vendeur_compte_reseaux($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function vendeur_compte_aide($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function admin_accueil($pseudo){
        $this->set('pseudo', $pseudo);
    }
}