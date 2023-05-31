<?php
class Controller{
    public $request;
    public $vars = array();
    function __construct($request){
        $this->request = $request;
    }
    public function render($view){ //Accessible par tous les controller
        extract($this->vars);
        $view = BASE.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.$this->request->controller.DIRECTORY_SEPARATOR.$view.'.php';
        require($view);
    }
    public function set($key, $value=null){
        if(is_array($key)){
            $this->vars+=$key;
        }
        else {
            $this->vars[$key] = $value;
        }
    }

}