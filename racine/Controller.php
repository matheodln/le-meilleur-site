<?php
class Controller{
    public $request;
    private $vars = array();
    private $rendered = false;
    function __construct($request){
        $this->request = $request;
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

}