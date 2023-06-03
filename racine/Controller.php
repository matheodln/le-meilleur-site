<?php
class Controller{
    public $request;
    private $vars = array();
    private $rendered = false;
    function __construct($request = null){
        if ($request){
            $this->request = $request;
        }
    }
    public function render($view, $layout){ //Accessible par tous les controller
        if($this->rendered){return false;}
        extract($this->vars);
        if(strpos($view,'/')===0){
            $view = BASE.DIRECTORY_SEPARATOR.'view'.$view.'.php';
        }
        else{
            $view = BASE.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.$this->request->controller.DIRECTORY_SEPARATOR.$view.'.php';
        }
        ob_start();
        require($view);
        $content_for_layout = ob_get_clean();
        require BASE.DIRECTORY_SEPARATOR.'view'.DIRECTORY_SEPARATOR.'layout'.DIRECTORY_SEPARATOR.$layout.'.php';
        $this->rendered = true;
    }
    public function set($key, $value=null){
        if(is_array($key)){
            $this->vars+=$key;
        }
        else {
            $this->vars[$key] = $value;
        }
    }
    public function loadModel($name){
        $file = BASE.DIRECTORY_SEPARATOR.'model'.DIRECTORY_SEPARATOR.$name.'.php';
        require_once($file);
        if(!isset($this->$name)){
            $this->$name = new $name();
        }

    }
    function request($controller, $action, $params = null){
        $controller .= 'Controller';
        require_once BASE.DIRECTORY_SEPARATOR.'controller'.DIRECTORY_SEPARATOR.$controller.'.php';
        $c = new $controller();
        if ($params!= null){
            return $c->$action($params);
        }
        else{
            return $c->$action();
        }
    }

    function redirect($url){
        header("Location: ".BASE_URL.$url);
    }
}