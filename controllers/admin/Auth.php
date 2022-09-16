<?php

namespace cars\controllers\admin;

use cars\core\hashing\Hash;
use cars\core\Request;
use cars\core\validation\Validator;
use cars\models\admin\adminModel;

class Auth extends Controller
{
   public function __construct()
   {
       if(app()->session->get('username')){
           redirect('/admin_panel');
       }
   }

    public function login(){
      echo $this->renderAuth('login');
  }

  public function checkLogin(Request $request){
      if($request->isPost()):
          $validate = new Validator();
          $rules = [
              'email' =>'required|email',
              'password' =>'required|min3|max20',
          ];
          $validate->setRules($rules);
          $validate->make($request->post());
          if($validate->isError()):
              app()->session->setFlash('errors', $validate->getErrors());
              app()->session->setFlash('old', $request->post());
              return back();
          else:
              $admin = new adminModel();
              $admin = $admin->getwhere(['email'=>$request->post()['email']]);
                 if($admin && Hash::verify($request->post()['password'] , $admin[0]['password'])):
                     app()->session->set('username' , $admin[0]['username']);
                      redirect('/admin_panel');
                  else:
                      app()->session->setFlash('notexists', ['login'=>['Email Or password are not correct']]);
                       return back();
                 endif;

          endif;
      endif;
  }



  /*
  public function createAcount(Request $request){
        if($request->isPost()):
            $validate = new Validator();
            $rules = [
                'username' =>'required|text',
                'email'    =>'required|email',
                'password' =>'required|min3|max20',

            ];
            $validate->setRules($rules);
            $validate->make($request->post());
        endif;
  }
  */

}