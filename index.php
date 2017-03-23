<?php
ini_set('display_errors', E_ALL);

require 'vendor/autoload.php';

$uri = '/estudos/Twig';
$_SERVER['REQUEST_URI'] = substr($_SERVER['REQUEST_URI'], (strlen($uri)));

$container = new League\Container\Container;

$container->share('response', Zend\Diactoros\Response::class);
$container->share('request', function () {
    return Zend\Diactoros\ServerRequestFactory::fromGlobals(
        $_SERVER, $_GET, $_POST, $_COOKIE, $_FILES
    );
});

$container->share('emitter', Zend\Diactoros\Response\SapiEmitter::class);

$route = new League\Route\RouteCollection($container);

require_once 'app/routes.php';

$response = $route->dispatch($container->get('request'), $container->get('response'));
$container->get('emitter')->emit($response);