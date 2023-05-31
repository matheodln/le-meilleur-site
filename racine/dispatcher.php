<?php
class Dispatcher{
    var $request;
    function __construct(){
        $this->request = new Request();
        Routeur::parse($this->request->url, $this->request);
        $controller = $this->loadController();
        call_user_func_array(array($controller, $this->request->action),$this->request->params);
    }

    function loadController(){
        $name = ucfirst($this->request->controller).'Controller';
        $file = BASE.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.$name.'.php';
        require $file;
        return new $name($this->request);
    }
}