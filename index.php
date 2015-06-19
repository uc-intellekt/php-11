<?php

require __DIR__ . '/vendor/autoload.php';

/*
use Monolog\Logger;
use Monolog\Handler\StreamHandler;

// create a log channel
$log = new Logger('name');
$log->pushHandler(new StreamHandler('logs/log.log', Logger::WARNING));

// add records to the log
$log->addWarning('Foo');
$log->addError('Bar');
*/

$config = new \Doctrine\DBAL\Configuration();
//..
$connectionParams = array(
    'dbname' => 'db',
    'user' => 'root',
    'password' => 'usbw',
    'host' => 'localhost',
    'port' => 3307,
    'driver' => 'pdo_mysql',
);
$conn = \Doctrine\DBAL\DriverManager::getConnection($connectionParams, $config);

if (isset($_GET['id'])) {
    require_once 'post.php';
} else {
    require_once 'posts.php';
}
