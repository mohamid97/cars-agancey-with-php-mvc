<?php

namespace cars\controllers\admin;

use cars\models\admin\contactModel;

class Contact extends Controller
{
    public function __construct()
    {
        return app()->midddleware->checkAuth();
        exit;
    }
    public function contact(){
     $contact = new contactModel();
     $this->data = $contact->getAll();
     echo $this->renderView('contact');
    }

}