<?php
namespace cars\controllers;
use cars\controllers\Controller;

class Home extends Controller
{
    public function home(){
        app()->view->setTitle('Cars | Mohamed Hamed');
       echo $this->renderView('home');
    }
    public function search(){
        var_dump($_GET);
    }


}