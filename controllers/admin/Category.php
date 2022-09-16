<?php

namespace cars\controllers\admin;
use cars\models\admin\categoryModel;

class Category extends Controller
{
    public function __construct()
    {
        return app()->midddleware->checkAuth();
       
    }
    public function addCategory(){
        echo $this->renderView('addCategory');
    }
  public function getAll(){
        $this->get_all('category');
    echo $this->renderView('categories');
  }


  public function checkCategory(){
    if(app()->request->isPost()):
     $rules = [
         'categoryName' =>'required|text',
         'type'        =>'required|text'
     ];
    app()->validate->setRules($rules);
    app()->validate->make(app()->request->post());
        if (app()->validate->isError()):
            app()->session->setFlash('errors', app()->validate->getErrors());
            app()->session->setFlash('old', app()->request->post());
            return back();
            else:
                $cat = new categoryModel();
                 $cat->categoryName = app()->request->post()['categoryName'];
                 $cat->type = app()->request->post()['type'];
                 if($cat->create()){
                     app()->session->setFlash('success', ['category'=>['category added succesfully']]);
                     redirect('/admin_panel/categories');
                 }

        endif;
    endif;
  }


   public function deleterow(){
         $this->delete('category');
       redirect('/admin_panel/categories');

   }


   public function getEdit(){
        $this->getEditView('category');
        echo $this->renderView('editCategory');
   }

   public function edit(){
       if(app()->request->isPost() && is_numeric(app()->request->post()['id'])):
               $rules = [
                   'categoryName' =>'required|text',
                   'type'        =>'required|text'
               ];
               app()->validate->setRules($rules);
               app()->validate->make(app()->request->post());
               if (app()->validate->isError()):
                   app()->session->setFlash('errors', app()->validate->getErrors());
                   return back();
               else:
                   $cat = new categoryModel();
                   $cat->categoryName = app()->request->post()['categoryName'];
                   $cat->type = app()->request->post()['type'];
                   if($cat->edit(app()->request->post()['id'])){
                       app()->session->setFlash('success', ['category'=>['category edited succesfully']]);
                       redirect('/admin_panel/categories');
                   }

               endif;
       else:
       return back();

       endif;
   }



}