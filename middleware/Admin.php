<?php
namespace cars\middleware;
class Admin
{

    private function Auth(){
            if(app()->session->get('username') == false){
                redirect('/admin_panel/login');
                exit;
            }
    }

    public function checkAuth(){
        return $this->Auth();
    }
}