<?php

require_once __DIR__.'/../vendor/autoload.php';

$app = new Silex\Application();
$app['debug'] = true;

$app->register(new Silex\Provider\DoctrineServiceProvider(), array(
    'db.options' => array(
        'driver' => 'pdo_mysql',
        'dbname' => 'db',
        'user' => 'root',
        'password' => 'usbw',
        'host' => 'localhost',
        'port' => 3307,
    ),
));

$app->get('/', 'Controller\\AppController::indexAction');
$app->get('/blog', 'Controller\\PostController::indexAction');
$app->get('/blog/{slug}', 'Controller\\PostController::showAction');

$app->run();
