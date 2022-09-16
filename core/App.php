<?php
namespace cars\core;
use cars\core\sessions\Session;
use cars\core\validation\Validator;
use cars\middleware\Admin;

class App
{
  public Router $router;
  private static $instance = null;
  public Session $session;
  public Admin $midddleware;
  public Request $request;
  public View $view;
  public Validator $validate;

  public function __construct()
  {
      $this->router = new Router(new Request());
      $this->session = new Session();
      $this->midddleware = new Admin();
      $this->request = new Request();
      $this->view = new View();
      $this->validate = new Validator();
  }
  public function run(){
      $this->router->resolve();
  }
  public static function getInstance(){
      if(self::$instance == null){
          self::$instance = new self;
      }
      return self::$instance;
  }


}