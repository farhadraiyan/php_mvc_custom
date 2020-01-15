<?php
/**
 * Created by PhpStorm.
 * User: macbookpro
 * Date: 2020-01-14
 * Time: 6:57 PM
 */

class carController extends Controller
{

    public function index(){
        $this->view('car'. DIRECTORY_SEPARATOR . 'index');
        $this->view->render();
    }

}