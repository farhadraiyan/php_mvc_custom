<?php
class Application{

    protected $controller = 'homeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
//        echo $_SERVER['REQUEST_URI'];
        $this->prepareURL();
        //echo $this->controller, '<br/>', $this->action, '<br/>', print_r($this->params);

        if(file_exists(CONTROLLER .$this->controller .'.php')){
            $this->controller = new $this->controller;
//            $this->controller->index();
            if(method_exists($this->controller, $this->action)){
                call_user_func_array([$this->controller, $this->action], $this->params);
            }
        }
    }

    protected function prepareURL(){
        $request = trim($_SERVER['REQUEST_URI']);
        if(!empty($request)){
            $uri = explode("/", $request);
            //for some reason first element of Uri is empty string, need to delete that
            array_shift($uri);
            $this->controller = isset($uri[0]) ? $uri[0]."Controller" : "homeController";
            $this->action = isset($uri[0]) ? $uri[1]: "index";
            unset($uri[0], $uri[1]);
            $this->params = !empty($uri) ? array_values($uri) : [];

        }

    }
}