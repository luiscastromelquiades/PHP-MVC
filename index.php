<?php
  define('DS', DIRECTORY_SEPARATOR);
  define('ROOT', realpath(dirname(__FILE__)) . DS);
  define('URL', "http://localhost/php_poo/");
  require_once "Config/Autoload.php";
  Config\Autoload::run();
  require_once "Views/template.php";
  Config\Router::run(new Config\Request());
?>
