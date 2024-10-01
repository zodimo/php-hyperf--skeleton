<?php

declare(strict_types=1);
use Hyperf\HttpServer\Router\Router;

Router::addRoute(['GET', 'POST', 'HEAD'], '/', 'App\Controller\IndexController@index');
Router::addRoute(['GET', 'POST', 'HEAD'], '/hello', 'App\Controller\GrpcController@hello');

Router::get('/favicon.ico', function () {
    return '';
});

Router::addServer('grpc', function () {
    // developer disipline to implement the services as described in the proto file
    Router::addGroup('/grpc.Hi', function () {
        Router::post('/SayHello', 'App\Controller\HiController@sayHello');
    });
});
