<?php
class ConnexionsController extends Controller{
    function connexion($id = null){
        $pseudo = isset($_POST["pseudo"])? $_POST["pseudo"] : "";
        $mdp = isset($_POST["mdp"])? $_POST["mdp"] : "";
        $this->loadModel('Acheteur');
        $this->loadModel('Administrateur');
        $this->loadModel('Vendeur');
        $user_Acheteur = $this->Acheteur->findFirst(array('conditions' => array('Pseudo' => $pseudo, 'MDP' => $mdp)));
        $user_Administrateur = $this->Administrateur->findFirst(array('conditions' => array('Pseudo' => $pseudo, 'MDP' => $mdp)));
        $user_Vendeur = $this->Vendeur->findFirst(array('conditions' => array('Pseudo' => $pseudo, 'MDP' => $mdp)));
        if(!empty($user_Acheteur)){

            $this->redirect("/voyageur/comptes/accueil/".$user_Acheteur->Pseudo);
        }
        else if(!empty($user_Administrateur)){
            $this->redirect("/gladiator/comptes/accueil/".$user_Administrateur->Pseudo);
        }
        else if(!empty($user_Vendeur)){
            $this->redirect("/marchand/comptes/accueil/".$user_Vendeur->Pseudo);
        }
        else{
            if(!($pseudo=="")){
                $this->Session->setFlash('Aucun compte n\'existe sous ce pseudo ou mot de passe incorrect');
            }
        }
    }
    function vendeur_inscription($id = null){
        $Nom = isset($_POST["Nom"])? $_POST["Nom"] : "";
        $Prenom = isset($_POST["Prenom"])? $_POST["Prenom"] : "";
        $Pseudo = isset($_POST["Pseudo"])? $_POST["Pseudo"] : "";
        $Mail = isset($_POST["Mail"])? $_POST["Mail"] : "";
        $Photo = isset($_POST["Photo"])? $_POST["Photo"] : "";
        $Image_Fond = isset($_POST["Image_Fond"]) ? $_POST["Image_Fond"] : "";
        $MDP = isset($_POST["MDP"])? $_POST["MDP"] : "";
        $this->loadModel('Acheteur');
        $this->loadModel('Administrateur');
        $this->loadModel('Vendeur');
        $user_Acheteur = $this->Acheteur->findFirst(array('conditions' => array('Pseudo' => $Pseudo)));
        $user_Administrateur = $this->Administrateur->findFirst(array('conditions' => array('Pseudo' => $Pseudo)));
        $user_Vendeur = $this->Vendeur->findFirst(array('conditions' => array('Pseudo' => $Pseudo)));
        $mail_Acheteur = $this->Acheteur->findFirst(array('conditions' => array('Mail' => $Mail)));
        $mail_Administrateur = $this->Administrateur->findFirst(array('conditions' => array('Mail' => $Mail)));
        $mail_Vendeur = $this->Vendeur->findFirst(array('conditions' => array('Mail' => $Mail)));
        if(!empty($user_Acheteur) || !empty($user_Administrateur) || !empty($user_Vendeur)){
            $this->Session->setFlash('Pseudo déjà existant veuillez en choisir un autre');
        }
        if(!empty($mail_Acheteur) || !empty($mail_Administrateur) || !empty($mail_Vendeur)){
            $this->Session->setFlash('Mail déjà utilise, veuillez en insérer un autre');
        }
        if(empty($user_Acheteur) && empty($user_Administrateur) && empty($user_Vendeur) && empty($mail_Acheteur) && empty($mail_Administrateur) && empty($mail_Vendeur) && $Pseudo != ""){
            $r = $this->Vendeur->insert(array(
                'Pseudo' => $Pseudo,
                'Nom' => $Nom,
                'Prenom' => $Prenom,
                'Mail' => $Mail,
                'Photo' => $Photo,
                'Image_Fond' => $Image_Fond,
                'MDP' => $MDP
            ));
            $this->redirect("/marchand/comptes/accueil/".$Pseudo);
        }

    }
    function acheteur_inscription($id=null){
        $Nom = isset($_POST["Nom"])? $_POST["Nom"] : "";
        $Prenom = isset($_POST["Prenom"])? $_POST["Prenom"] : "";
        $Pseudo = isset($_POST["Pseudo"])? $_POST["Pseudo"] : "";
        $Mail = isset($_POST["Mail"])? $_POST["Mail"] : "";
        $Pays = isset($_POST["Pays"])? $_POST["Pays"] : "";
        $Ville = isset($_POST["Ville"])? $_POST["Ville"] : "";
        $CodePostal = isset($_POST["CodePostal"])? $_POST["CodePostal"] : "";
        $Telephone = isset($_POST["Telephone"])? $_POST["Telephone"] : "";
        $Adresse = isset($_POST["Adresse"])? $_POST["Adresse"] : "";
        $Photo = isset($_POST["Photo"])? $_POST["Photo"] : "";
        $MDP = isset($_POST["MDP"])? $_POST["MDP"] : "";
        $this->loadModel('Acheteur');
        $this->loadModel('Administrateur');
        $this->loadModel('Vendeur');
        $user_Acheteur = $this->Acheteur->findFirst(array('conditions' => array('Pseudo' => $Pseudo)));
        $user_Administrateur = $this->Administrateur->findFirst(array('conditions' => array('Pseudo' => $Pseudo)));
        $user_Vendeur = $this->Vendeur->findFirst(array('conditions' => array('Pseudo' => $Pseudo)));
        $mail_Acheteur = $this->Acheteur->findFirst(array('conditions' => array('Mail' => $Mail)));
        $mail_Administrateur = $this->Administrateur->findFirst(array('conditions' => array('Mail' => $Mail)));
        $mail_Vendeur = $this->Vendeur->findFirst(array('conditions' => array('Mail' => $Mail)));
        if(!empty($user_Acheteur) || !empty($user_Administrateur) || !empty($user_Vendeur)){
            $this->Session->setFlash('Pseudo déjà existant veuillez en choisir un autre');
        }
        if(!empty($mail_Acheteur) || !empty($mail_Administrateur) || !empty($mail_Vendeur)){
            $this->Session->setFlash('Mail déjà utilise, veuillez en insérer un autre');
        }
        if(empty($user_Acheteur) && empty($user_Administrateur) && empty($user_Vendeur) && empty($mail_Acheteur) && empty($mail_Administrateur) && empty($mail_Vendeur) && $Pseudo != ""){
            $r = $this->Acheteur->insert(array(
                'Pseudo' => $Pseudo,
                'Nom' => $Nom,
                'Prenom' => $Prenom,
                'Mail' => $Mail,
                'Telephone' => $Telephone,
                'Photo' => $Photo,
                'MDP' => $MDP,
                'Adresse' => $Adresse,
                'Ville' => $Ville,
                'Code_Postal' => $CodePostal,
                'Pays' => $Pays
            ));
            $this->redirect("/voyageur/comptes/accueil/".$Pseudo);
        }
    }
}