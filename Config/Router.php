<?php namespace Config;
  class Router{
    public static function run(Request $request){
      $controller = $request->getController() . "Controller";
      $route = ROOT . "Controllers" . DS . $controller . ".php";
      $method = $request->getMethod();
      if($method == "index.php"){
        $method = "index";
        print($method);
      }
      $argument = $request->getArgument();
      if(is_readable($route)){
        require_once $route;
        $mostrar = "Controllers\\" . $controller;
        $controller = new $mostrar;
        if(!isset($argument)){
          $data = call_user_func(array($controller, $method));
        }else{
          $data = call_user_func(array($controller, $method), $argument);
        }
      }

      //Load View
      $route = ROOT . "Views" . DS . $request->getController() . DS . $request->getMethod() . ".php";
      if(is_readable($route)){
        require_once $route;
      }else{
        print "The required route doesn't exists";
      }
    }
  }
?>
