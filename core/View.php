<?php

namespace cars\core;

use cars\models\admin\categoryModel;

class View
{
    private $title = '';
    private $metaDescription = '';

    public function setTitle($title){
        $this->title  = $title;
    }
    public function getTitle(){
        return  $this->title;
    }
    public function setMetaDes($meta){
        $this->$this->metaDescription = $meta;
    }
    public function getMetaDes(){
        return $this->metaDescription;
    }

    public function getLayoutData(){
        $cats = new categoryModel();
        return $cats->getOnly(['id' , 'categoryName' , 'type']);
    }

}