<?php
class Application{

    protected $controller = 'homeController';
    protected $action = 'index';
    protected $params = [];

    public function __construct()
    {
//        echo $_SERVER['REQUEST_URI'];
        //#1 parse the url, which will get the first url as home,second as index, from third to rest as array of params
        $this->prepareURL();
        //echo $this->controller, '<br/>', $this->action, '<br/>', print_r($this->params);

        // #2 validate if controller exist
        if(file_exists(CONTROLLER .$this->controller .'.php')){
            $this->controller = new $this->controller;
//            $this->controller->index();
            if(method_exists($this->controller, $this->action)){
                call_user_func_array([$this->controller, $this->action], $this->params);
            }
        }
        else{
            //Else redirect to home page
            header("Location:"."http://customapp.local");
        }
    }

    protected function prepareURL(){
        $request = trim($_SERVER['REQUEST_URI']);
        if(!empty($request)){
            $uri = explode("/", $request);
            //for some reason for default url  first element of Uri is empty string, need to delete that
            //check if after explode if second element of uri is empty string then make the array empty else array shift first el only
            $uri= (isset($uri) && $uri[1]=="") ? [] : array_slice($uri,1);
            $this->controller = isset($uri[0]) ? $uri[0]."Controller" : "homeController";
            $this->action = isset($uri[1]) ? $uri[1]: "index";
            unset($uri[0], $uri[1]);
            $this->params = !empty($uri) ? array_values($uri) : [];

        }


    }
}