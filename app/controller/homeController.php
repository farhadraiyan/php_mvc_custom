<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 2020-01-13
 * Time: 10:27 PM
 */

class homeController extends Controller
{

    public function index($id='', $name='')
    {
//        echo 'I am in class: ' . __CLASS__ . ' method: ' . __METHOD__;
//        echo 'ID is ' . $id . 'name: ' . $name;

        $this->view(DIRECTORY_SEPARATOR.'home' . DIRECTORY_SEPARATOR . 'index',[
            'name' => $name,
            'id' => $id
        ]);
        $this->view->render();
//        var_dump($this);
    }

    public function aboutUs($id='', $name=''){
        //        echo 'I am in class: ' . __CLASS__ . ' method: ' . __METHOD__;
        $this->view(DIRECTORY_SEPARATOR.'home' . DIRECTORY_SEPARATOR . 'aboutUs');
        $this->view->render();

    }

//    public function login(){
//        echo 'I am in class: ' . __CLASS__ . ' method: ' . __METHOD__;
//
//    }

}