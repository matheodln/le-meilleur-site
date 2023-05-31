<?php
class Dispatcher{
    var $request;
    function __construct(){
        $this->request = new Request();
        Routeur::parse($this->request->url, $this->request);
        $controller = $this->loadController();
        $controller->view();
    }

    function loadController(){
        $name = ucfirst($this->request->controller).'Controller';
        $file = BASE.DIRECTORY_SEPARATOR.'Controller'.DIRECTORY_SEPARATOR.$name.'.php';
        require $file;
        return new $name($this->request);
    }
}