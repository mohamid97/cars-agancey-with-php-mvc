<?php
namespace cars\controllers\admin;
use cars\controllers\admin\Helper;
use cars\core\App;

class Controller
{
    protected array $data = [];
    protected array $staticInfo = [];
    protected function renderView($view){
     $helper = new Helper();
     $layout = $helper->renderLayouts();
     $data = $this->data;
     $mainView = $helper->renderMainView($view ,$data);
     return str_replace('{{content}}' , $mainView , $layout);

    }
    protected function renderAuth($view){;
        return Helper::adminView($view);
    }

    protected function get_all($model){
        $className = 'cars\\models\\admin\\'.$model . 'Model';
        $instance = new $className;
        $this->data = $instance->getAll() ?? [];
        /* $category = new categoryModel();
        $this->data = $category->getAll() ?? [];*/
    }





        protected function delete(string $model){
        if(app()->request->isGet() && app()->request->get()['id']):
            $id= app()->request->get()['id'];
            if(is_numeric($id)):
                $className = 'cars\\models\\admin\\'.$model . 'Model';
                $instance = new $className;
                if($instance->deleteRow($id)):
                    app()->session->setFlash('success', [$model =>["$model delete succesfully"]]);

                endif;

            else:
                redirect('/admin_panel');
            endif;
        else:
            redirect('/admin_panel');
        endif;
    }


    public function getEditView(string $model){
        if(app()->request->isGet() && app()->request->get()['id']):
            $id= app()->request->get()['id'];
            if(is_numeric($id)):
                $className = 'cars\\models\\admin\\'.$model . 'Model';
                $instance = new $className;
                $this->data = $instance->getWhere(['id' => $id]);
            endif;
        endif;
    }



}