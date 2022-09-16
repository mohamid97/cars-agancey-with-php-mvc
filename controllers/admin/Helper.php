<?php

namespace cars\controllers\admin;

use Couchbase\View;

class Helper
{
   public function renderLayouts(){
           ob_start();
           require_once VIEW_PATH .DS.'admin'.DS . 'layouts'.DS.'main.php';
           return ob_get_clean();

   }

   public function renderMainView($view , $data){

       ob_start();
       require_once VIEW_PATH .DS.'admin' .DS . "$view.php";
       return ob_get_clean();
   }
   public static function adminView($view){
       ob_start();
        require_once VIEW_PATH .DS.'admin' .DS . "$view.php";
       return ob_get_clean();
   }


}