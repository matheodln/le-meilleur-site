<?php
class Dispatcher{
    var $request;
    function __construct(){
        $this->request = new Request();
        Routeur::parse($this->request->url, $this->request);
        $controller = $this->loadController();
        $action = $this->request->action;
        if($this->request->prefix){
            $action = $this->request->prefix.'_'.$action;
        }
        if(!in_array($action, array_diff(get_class_methods($controller), get_class_methods('Controller')))){
            $this->error('Le controller '.$this->request->controller.' n\'a pas de méthode '.$action);
        }
        call_user_func_array(array($controller, $action),$this->request->params);
        $default = 'default'.$this->request->controller;
        $controller->render($action, $default);
    }

    function error($message){ //Gestions des erreurs
        header("HTTP/1.0 404 Not Found");
        $controller = new Controller($this->request);
        $controller->set('message', $message);
        $controller->render('/errors/404', 'defaultPages');
        die();
    }

    function loadController(){
        $name = ucfirst($this->request->controller).'Controller';
        $file = BASE.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.$name.'.php';
        require $file;
        $controller = new $name($this->request);
        $controller->Session = new Session();
        return $controller;
    }
}