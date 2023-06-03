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

        }
    }
    function vendeur_inscription($id = null){

    }
    function acheteur_inscription($id=null){

    }
}