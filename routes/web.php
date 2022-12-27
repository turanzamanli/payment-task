<?php 

use Symfony\Component\Routing\Route;
use Symfony\Component\Routing\RouteCollection;

// Routes system
$routes = new RouteCollection();
$routes->add('homepage', new Route(constant('URL_SUBFOLDER') . '/', ['controller' => 'PageController', 'method'=>'indexAction'], []));
$routes->add('payment', new Route(constant('URL_SUBFOLDER') . '/payment/{id}',  ['controller' => 'PaymentController', 'method'=>'showAction'], ['id' => '[0-9]+'], [], '', [], ['GET']));
