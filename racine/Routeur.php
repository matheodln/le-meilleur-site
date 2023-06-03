<?php
class Routeur{
    static $prefixes = array();

    static function prefix($url, $prefix){
        self::$prefixes[$url] = $prefix;
    }
    static function parse($url, $request){
        $url = trim($url, '/');
        $params = explode('/', $url);
        if(in_array($params[0],array_keys(self::$prefixes))){
            $request->prefix = self::$prefixes[$params[0]];
            array_shift($params);
        }
        $request->controller = $params[0];
        $request->action = isset($params[1]) ? $params[1] : 'view';
        $request->params = array_slice($params, 2);
        return true;
    }
}