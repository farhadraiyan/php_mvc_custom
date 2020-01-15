<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 2020-01-13
 * Time: 10:51 PM
 */

class Controller
{
    protected $view;
    protected $model;

    public function view($viewName, $data=[]){
        $this->view = new View($viewName, $data);
        return $this->view;

    }

}