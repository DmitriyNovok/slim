<?php

use App\Controllers\HomeController;
use Slim\App;
use Slim\Routing\RouteCollectorProxy;

return function (App $app) {
    $app->get('/', [HomeController::class, 'home']);
    $app->get('/hello', [HomeController::class, 'hello']);

    $app->group('/group', function (RouteCollectorProxy $group) {
        $group->map(['OPTIONS', 'GET'], '/hello/{name}', [HomeController::class, 'view']);
        $group->map(['OPTIONS', 'GET'], '/world/{say}', [HomeController::class, 'sayWorld']);
    });
};