<?php
class ComptesController extends Controller{
    function acheteur_accueil($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function acheteur_tout_parcourir($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function acheteur_tout_parcourir_meilleure_offre($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function acheteur_tout_parcourir_transaction($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Item');
        $Type_Item = isset($_POST["Type_Item"])? $_POST["Type_Item"] : "";
        if($Type_Item == "Tout"){
            $items = $this->Item->find(array(
                'conditions'=>array(
                    'type_vente' => "négociation"
                )
            ));
        }
        else if($Type_Item == "Vetements"){
            $items = $this->Item->find(array(
                'conditions'=>array(
                    'type_vente' => "négociation",
                    'Categorie' => "vêtements"
                )
            ));
        }
        else if($Type_Item == "Accesoires"){
            $items = $this->Item->find(array(
                'conditions'=>array(
                    'type_vente' => "négociation",
                    'Categorie' => "accessoires"
                )
            ));
        }
        else{
            $items = $this->Item->find(array(
                'conditions'=>array(
                    'type_vente' => "négociation",
                    'Categorie' => "objets"
                )
            ));
        }
        $this->set('items', $items);

    }
    function acheteur_tout_parcourir_achat_immediat($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Item');
        $Type_Item = isset($_POST["Type_Item"])? $_POST["Type_Item"] : "";
        if($Type_Item == "Tout"){
            $items = $this->Item->find(array(
                'conditions'=>array(
                    'type_vente' => "achat immédiat"
                )
            ));
        }
        else if($Type_Item == "Vetements"){
            $items = $this->Item->find(array(
                'conditions'=>array(
                    'type_vente' => "achat immédiat",
                    'Categorie' => "vêtements"
                )
            ));
        }
        else if($Type_Item == "Accesoires"){
            $items = $this->Item->find(array(
                'conditions'=>array(
                    'type_vente' => "achat immédiat",
                    'Categorie' => "accessoires"
                )
            ));
        }
        else{
            $items = $this->Item->find(array(
                'conditions'=>array(
                    'type_vente' => "achat immédiat",
                    'Categorie' => "objets"
                )
            ));
        }
        $this->set('items', $items);
    }
    function acheteur_Item_meilleure_offre($pseudo_item){
        $tab = explode(",",$pseudo_item);
        $pseudo = $tab[0];
        $imgItem = $tab[1];
        $this->set('pseudo', $pseudo);

    }
    function acheteur_Item_transaction($pseudo_item){
        $tab = explode(",",$pseudo_item);
        $pseudo = $tab[0];
        $imgItem = $tab[1];
        $this->set('pseudo', $pseudo);

    }
    function acheteur_Item_achat_immediat($pseudo_item){
        //Recuperation des données nécessaires depuis l'url
        $tab = explode(",",$pseudo_item);
        $pseudo = $tab[0];
        $imgItem = $tab[1];
        $this->set('pseudo', $pseudo);
        $this->loadModel('Item');
        $this->loadModel('Photo_Item');
        //Récupération des données et des images de l'item
        $item = $this->Item->findFirst(array(
            'conditions' => array(
                'Photo' => $imgItem
            )
        ));
        $photosItem = $this->Photo_Item->find(array(
            'conditions' => array(
                'Id_Item' => $item->Nom
            )
        ));
        $this->set('item', $item);
        $this->set('photosItem', $photosItem);
    }
    function acheteur_panier($pseudo){
        $this->set('pseudo', $pseudo);

    }
    function acheteur_compte_informations($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Vendeur');
        $this->loadModel('Administrateur');
        $this->loadModel('Acheteur');
        $user = $this->Acheteur->findFirst(array(
            'conditions'=> array(
                'Pseudo' => $pseudo
            )
        ));
        $this->set('user', $user);
        $Nom = isset($_POST["Nom"])? $_POST["Nom"] : "";
        $Prenom = isset($_POST["Prenom"])? $_POST["Prenom"] : "";
        $Pseudo = isset($_POST["Pseudo"])? $_POST["Pseudo"] : "";
        $Courriel = isset($_POST["Courriel"])? $_POST["Courriel"] : "";
        $checkV = $this->Vendeur->findFirst(array(
            'conditions' => array(
                'Pseudo' => $Pseudo
            )
        ));
        $checkAdmin = $this->Administrateur->findFirst(array(
            'conditions' => array(
                'Pseudo' => $Pseudo
            )
        ));
        $checkAcheteur = $this->Acheteur->findFirst(array(
            'conditions' => array(
                'Pseudo' => $Pseudo
            )
        ));
        if(($Nom != "" || $Prenom != "" || $Pseudo != "" || $Courriel != "") && empty($checkV) && empty($checkAdmin) && empty($checkAcheteur)){
            if($Pseudo == ""){
                $Pseudo = $pseudo;
            }
            if($Nom == ""){
                $Nom = $user->Nom;
            }
            if($Prenom == ""){
                $Prenom = $user->Prenom;
            }
            if($Courriel == ""){
                $Courriel = $user->Mail;
            }
            $this->Acheteur->save(array(
                'Pseudo' => $Pseudo,
                'Nom' => $Nom,
                'Prenom' => $Prenom,
                'Mail' => $Courriel
            ), 'Pseudo');
            $this->redirect("/voyageur/comptes/compte_informations/".$pseudo);
            $this->Session->setFlash("Modification effectuées", "success");
        }
        else if(($Nom != "" || $Prenom != "" || $Pseudo != "" || $Courriel != "") && (!empty($checkV) || !empty($checkAdmin) || !empty($checkAcheteur))){
            $this->Session->setFlash("Pseudo déjà existant");
        }
    }
    function acheteur_compte_personnaliser($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Acheteur');
        $user = $this->Acheteur->findFirst(array(
            'conditions'=> array(
                'Pseudo' => $pseudo
            )
        ));
        $this->set('user', $user);
    }
    function acheteur_compte_mdp($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Acheteur');
        $user = $this->Acheteur->findFirst(array(
            'conditions'=> array(
                'Pseudo' => $pseudo
            )
        ));
        $this->set('user', $user);
    }
    function acheteur_compte_paiement($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Acheteur');
        $user = $this->Acheteur->findFirst(array(
            'conditions'=> array(
                'Pseudo' => $pseudo
            )
        ));
        $this->set('user', $user);
    }
    function acheteur_compte_aide($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Acheteur');
        $user = $this->Acheteur->findFirst(array(
            'conditions'=> array(
                'Pseudo' => $pseudo
            )
        ));
        $this->set('user', $user);
    }
    function vendeur_accueil($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Item');
        $items = $this->Item->find(array(
            'conditions'=>array(
                'Pseudo_Vendeur' => $pseudo
            )
        ));
        $this->set('items', $items);
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
        $this->loadModel('Item');
        $check = $this->Item->findFirst(array(
            'conditions'=> array(
                'Nom' => $Nom
            )
        ));

        if(($Nom != "" && $Prix != "" && $Photo != "" && $Description != "" && $Quantite != "" && $Categorie != "" && $type_vente != "") && empty($check)){
            //Chargement des models necessaires:
            $this->loadModel('Photo_Item');

            //Ajout de l'item à la base de donnée:
            $r1 = $this->Item->insert(array(
                'Nom' => $Nom,
                'Description' => $Description,
                'Date_Publication' => date('Y-m-d H:i:s'),
                'Prix' => $Prix,
                'Categorie' => $Categorie,
                'Quantite_actuel' => $Quantite,
                'Quantite_initial' => $Quantite,
                'Pseudo_Vendeur' => $pseudo,
                'Video' => $Video,
                'type_vente' => $type_vente,
                'Photo' => $Photo
            ));

            //Ajout de la premiere photo lié à cette item:

            $r2 = $this->Photo_Item->insert(array(
                'Nom_Photo' => $Photo,
                'Id_Item' => $Nom
            ));

            //Commentaire pour confirmer que l'item a bien été ajouter
            $this->Session->setFlash("Item correctement ajouter", "success");
        }
        else if(($Nom != "" && $Prix != "" && $Photo != "" && $Description != "" && $Quantite != "" && $Categorie != "" && $type_vente != "") && !empty($check)){
            $this->Session->setFlash("Article similaire publié");
        }
    }
    function vendeur_vendre_negocier($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function vendeur_supprimer($pseudo){
        $this->loadModel('Item');
        $this->set('pseudo', $pseudo);
        //Affichage de tous les articles du vendeur:
        $item_vendeur = $this->Item->find(array(
            'conditions'=>array(
                'Pseudo_Vendeur'=>$pseudo
            )
        ));
        $this->set('item_vendeur', $item_vendeur);
        //Chargement des données du formulaire
        $reference = isset($_POST["reference"])? $_POST["reference"] : "";
        $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
        if ($reference != "" && $mdp != ""){
            $this->loadModel('Vendeur');
            $item = $this->Item->findFirst(array(
                'conditions' =>array(
                    'Nom' => $reference,
                    'Pseudo_Vendeur' => $pseudo
                )
            ));
            $vendeur = $this->Vendeur->findFirst(array(
                'conditions' => array(
                    'Pseudo' => $pseudo,
                    'MDP' => $mdp
                )
            ));
            if(!empty($item) && !empty($vendeur)){
                $this->loadModel('Photo_Item');
                $r = $this->Item->delete($reference, 'Nom');
                $this->Session->setFlash("Article correctement supprimer", "success");
            }
            else{
                $this->Session->setFlash("Article non trouver, ou mot de passe incorrect");
            }

        }
    }
    function vendeur_compte_informations($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Vendeur');
        $this->loadModel('Administrateur');
        $this->loadModel('Acheteur');
        $user = $this->Vendeur->findFirst(array(
            'conditions'=> array(
                'Pseudo' => $pseudo
            )
        ));
        $this->set('user', $user);
        $Nom = isset($_POST["Nom"])? $_POST["Nom"] : "";
        $Prenom = isset($_POST["Prenom"])? $_POST["Prenom"] : "";
        $Pseudo = isset($_POST["Pseudo"])? $_POST["Pseudo"] : "";
        $Courriel = isset($_POST["Courriel"])? $_POST["Courriel"] : "";
        $checkV = $this->Vendeur->findFirst(array(
            'conditions' => array(
                'Pseudo' => $Pseudo
            )
        ));
        $checkAdmin = $this->Administrateur->findFirst(array(
            'conditions' => array(
                'Pseudo' => $Pseudo
            )
        ));
        $checkAcheteur = $this->Acheteur->findFirst(array(
            'conditions' => array(
                'Pseudo' => $Pseudo
            )
        ));
        if(($Nom != "" || $Prenom != "" || $Pseudo != "" || $Courriel != "") && empty($checkV) && empty($checkAdmin) && empty($checkAcheteur)){
            if($Pseudo == ""){
                $Pseudo = $pseudo;
            }
            if($Nom == ""){
                $Nom = $user->Nom;
            }
            if($Prenom == ""){
                $Prenom = $user->Prenom;
            }
            if($Courriel == ""){
                $Courriel = $user->Mail;
            }
            $this->Vendeur->save(array(
                'Pseudo' => $Pseudo,
                'Nom' => $Nom,
                'Prenom' => $Prenom,
                'Mail' => $Courriel
            ), 'Pseudo');
            $this->redirect("/marchand/comptes/compte_informations/".$pseudo);
            $this->Session->setFlash("Modification effectuées", "success");
        }
        else if(($Nom != "" || $Prenom != "" || $Pseudo != "" || $Courriel != "") && (!empty($checkV) || !empty($checkAdmin) || !empty($checkAcheteur))){
            $this->Session->setFlash("Pseudo déjà existant");
        }
    }
    function vendeur_compte_theme($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Vendeur');
        $user = $this->Vendeur->findFirst(array(
            'conditions'=> array(
                'Pseudo' => $pseudo
            )
        ));
        $this->set('user', $user);
    }
    function vendeur_compte_mdp($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Vendeur');
        $user = $this->Vendeur->findFirst(array(
            'conditions'=> array(
                'Pseudo' => $pseudo
            )
        ));
        $this->set('user', $user);
    }
    function vendeur_compte_reseaux($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Vendeur');
        $user = $this->Vendeur->findFirst(array(
            'conditions'=> array(
                'Pseudo' => $pseudo
            )
        ));
        $this->set('user', $user);
    }
    function vendeur_compte_aide($pseudo){
        $this->set('pseudo', $pseudo);
        $this->loadModel('Vendeur');
        $user = $this->Vendeur->findFirst(array(
            'conditions'=> array(
                'Pseudo' => $pseudo
            )
        ));
        $this->set('user', $user);
    }
    function admin_accueil($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function admin_compte_informations($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function admin_compte_theme($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function admin_compte_mdp($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function admin_gerer_vendeurs($pseudo){
        $this->set('pseudo', $pseudo);
    }
    function admin_gerer_articles($pseudo){
        $this->set('pseudo', $pseudo);
    }
}