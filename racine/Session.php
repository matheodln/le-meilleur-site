<?php
class Session{
    function __construct(){
        session_start();
    }
    public function setFlash($message, $type = "failure"){
        $_SESSION['flash'] = array(
            'message'=>$message,
            'type' => $type
        );
    }

    public function flash(){
        if(isset($_SESSION['flash']['message'])){
            $html = '<div class="alert-message '.$_SESSION['flash']['type'].'"><p>'.$_SESSION['flash']['message'].'</p></div>';
            $_SESSION['flash'] = array();
            return $html;
        }
    }


}