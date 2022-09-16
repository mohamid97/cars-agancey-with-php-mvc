<?php

if(!function_exists('url')){
    function getUrl($url , $type){
        if($type == 'admin'){
            echo "http://". HOST. "/asset/css/admin/".$url.".css";
        }else{
            echo "http://". HOST. "/asset/css/users/".$url.".css";
        }
    }
}

if(!function_exists('getJs')){

    function getJs($url  , $type){
        if($type == 'admin'){
            echo "http://".HOST."/asset/js/admin/" .$url .".js";
        }else{
            echo "http://".HOST."/asset/js/users/" .$url .".js";
        }
    }
}
if(!function_exists('getImage')){

    function getImage($url  , $type){
        if($type == 'admin'){
            echo "http://".HOST."/asset/js/admin/" .$url;
        }else{
            echo "http://".HOST."/asset/img/users/" .$url;
        }
    }
}

if(!function_exists('app')){
    function app(){
        return \cars\core\App::getInstance();
    }
}

if(!function_exists('back')){
    function back(){
        header('Location: '.$_SERVER['HTTP_REFERER']);
    }
}

if(!function_exists('redirect')){
     function redirect(string $url){
        header('Location: '.$url);
    }
}