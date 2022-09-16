<?php

namespace cars\core;
/**
 * Reuest class is responsible for get path and the method of request
 */
class Request
{
    private $controller;
    private $visitor;
    // get path
    public function getPath(){

        $path = $_SERVER['REQUEST_URI'] ?? '/';
        $position = strpos($path , '?');
        if(!$position === false){
             return substr($path , 0 , $position);
        }
        if($path !== "/"){
            $path = rtrim($path , '/');
        }
        return $path;
    }

    public function getMethod(){

        return strtolower($_SERVER['REQUEST_METHOD']);
    }


    public function filterRequest($callable){
        if(is_callable( $callable)):
            call_user_func($callable);
        exit;
        elseif(is_array($callable) && count($callable) == 3):
             $this->controller = $callable[0];
             $this->visitor = $callable[2];
             return $this->checkControllerPath();
        endif;
        // call callable function
    }

    // return controller name to make object
    private  function checkControllerPath(){
       if($this->visitor == 'admin'):
           return  'cars\\controllers\\admin\\'. $this->controller;
       else:
           return  'cars\\controllers\\'. $this->controller;
       endif;
    }

    public function isGet(){
      if($this->getMethod() == 'get'):
          return true;
      else:
          return false;
      endif;
    }
    public function isPost(){
        if ($this->getMethod() == 'post'):
            return true;
        else:
            return false;
        endif;
    }
    public function get(){
        if ($this->isGet()):
        return $_GET;
        endif;
    }
    public function post(){
        if ($this->isPost()):
         return $_POST;
        endif;
    }


}