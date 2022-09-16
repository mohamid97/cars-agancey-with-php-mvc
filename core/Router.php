<?php
namespace  cars\core;
/**
 * Router class is responsible for store Request and run callable function
 */
class Router
{
    // Request Class
    public Request $request;
    // array of all routes contain method(get or post) and clousre function
    protected  array  $routes = [];
    // construct build request class
    public function __construct(Request  $request)
    {
        $this->request = $request;
    }

    /**
     * @param $path
     * @param $callable
     * @return void
     * function get store get request at array (routes)
     */
    public function get($path , callable|array|string $callable):void{
      $this->routes['get'][$path] = $callable;

  }

    /**
     * @param $path
     * @param $callable
     * @return void
     * function post store post request at array (routes)
     */
  public function post($path , $callable):void{
        $this->routes['post'][$path] = $callable;

  }

    /**
     * @return void
     *
     */
  public function resolve():void{
        // get path from request ( $_SERVER['REQUEST_URI] ) from Request class
     $path =  $this->request->getPath();
      // get path from request ( Get or Post ) from Request class
     $method = $this->request->getMethod();
     // check if thes elements in routes
     if (isset($this->routes[$method][$path])):
         $callable = $this->routes[$method][$path];
         else:
         echo "not Founded hhh ";
         exit;
     endif;
     $controller = $this->request->filterRequest($callable);
     if(class_exists($controller)):
         $fun = $callable[1];
         $obj = new $controller;
         $obj->$fun($this->request);
      else:
         require_once VIEW_PATH;

     endif;

  }

}