<?php
class Request{
    public $url; //URL appellé par l'utilisateur
    public $prefix = false;
    function __construct(){
        $this->url = $_SERVER['PATH_INFO'];
    }
}