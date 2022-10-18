<?php

  namespace App;

  class Route{

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
    }

    public function getUrl() {
      // return parse_url($_SERVER['REQUEST_URI'], PHP_URL_PATH);
      return parse_url('www.google.com/gmail?x10', PHP_URL_PATH);
    }
  }

?>