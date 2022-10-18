<?php

  namespace App;

  class Route{

    private $routes;

    public function __construct(){
      $this->initRoutes();
      $this->run($this->getUrl());
    }

    public function getRoutes(){
      return $this->routes;
    }

    public function setRoutes(array $routes){
      $this->routes = $routes;
    }

    public function initRoutes(){
      
      $routes['home'] = array(
        'route' => '/',
        'controller' => 'indexController', 
        'action' => 'index'
      );
      
      $routes['sobre_nos'] = array(
        'route' => '/sobre_nos',
        'controller' => 'indexController',
        'action' => 'sobreNos'
      );

      $this->setRoutes($routes);
    }

    public function run($url) {
      echo "********".$url."********";
      foreach ($this->getRoutes() as $key => $route) {
        print_r($route);
        echo '<br><br><br><br><br>';

      }
    }

    public function getUrl() {
      return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      // return parse_url('www.google.com/gmail?x10', PHP_URL_PATH);
    }
  }

?>