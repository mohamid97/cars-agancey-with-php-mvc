<?php

namespace cars\controllers;

class Helper
{


    public function renderLayouts(){
        ob_start();
        require_once VIEW_PATH .DS.'users' .DS . 'layouts'.DS.'main.php';
        return ob_get_clean();

    }

    public function renderMainView($view){
        ob_start();
        require_once VIEW_PATH .DS.'users' .DS . "$view.php";
        return ob_get_clean();
    }
}