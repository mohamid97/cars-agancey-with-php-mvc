<?php

namespace cars\controllers\admin;

use cars\models\admin\usersModel;

class User extends Controller
{
    public function __construct()
    {
        return app()->midddleware->checkAuth();
        exit;
    }
    public function users(){
      $users = new usersModel();
      $users = $users->getAll();
      $this->data = $users ?? [];
      echo $this->renderView('users' , $this->data);
    }

    public function deleterow(){
        $this->delete('users');
        redirect('/admin_panel/users');
    }

}