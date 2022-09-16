<?php

namespace cars\controllers;

use cars\core\App;

class Controller
{
    protected array $data = [];
    protected array $staticInfo = [];

    /**
     * @param $view
     * @return array|false|string|string[]
     * renderView responsible for render layouts and main view
     */
    protected function renderView($view){
        $helper = new Helper;
        $layout = $helper->renderLayouts();
        $mainView = $helper->renderMainView($view);
        return str_replace('{{content}}' , $mainView , $layout);
    }

}