<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 2020-01-13
 * Time: 10:54 PM
 */

class View
{
    protected $view_file;
    protected $view_data;

    public function __construct($view_file,$view_data)
    {
        $this->view_file = $view_file;
        $this->view_data = $view_data;

    }

    public function render(){
        if(file_exists(VIEW . $this->view_file . '.phtml')){
            include VIEW . $this->view_file . '.phtml';
        }
    }

    public function getAction(){
        $this->view_file=substr($this->view_file,1);
        return explode(DIRECTORY_SEPARATOR, $this->view_file);
    }

}