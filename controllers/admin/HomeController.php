<?php
namespace cars\controllers\admin;
use cars\core\Request;
use cars\models\admin\usersModel;

class HomeController extends Controller
{
    public function __construct()
    {
        return app()->midddleware->checkAuth();
        exit;
    }

    public function home(){
        $tables = ['category' , 'users' , 'car'];
       foreach ($tables as $table){
           $className = 'cars\\models\\admin\\'.$table . 'Model';
           $count = new $className;
           $this->data[$table] = $count->getCountTable();
       }

        echo $this->renderView('home');
    }
    public function editUser(){
        var_dump($_GET);
    }
}