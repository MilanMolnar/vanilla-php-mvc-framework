<?php

require_once __DIR__ . '/../vendor/autoload.php';
use app\core\Application;

$app = new Application(dirname(__DIR__));

$app->router->get('/','home' );
$app->router->get('/contact', 'Contact');
$app->router->post('/contact', function (){
    return 'handling submitting data';
});





$app->run();
