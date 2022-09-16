<?php

namespace cars\controllers\admin;

class Logout
{
    public function __construct()
    {
        return app()->midddleware->checkAuth();
    }

    public function logout(){
        app()->session->remove('username');
        redirect('/admin_panel/login');
    }
}