<?php

namespace App\Controllers;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;

class HomeController
{
    // constructor receives container instance
    public function __construct(
        private ContainerInterface $container
    ){}

    public function home(Request $request, Response $response, array $args): Response
    {
        /**
         * Create JSON response
         */
        $response->getBody()->write(json_encode(['Hello' => 'World!']));
        return $response->withHeader('Content-Type', 'application/json');

        // your code to access items in the container... $this->container->get('');
        return $response;
    }

    public function hello(Request $request, Response $response, array $args): Response
    {

        $response->getBody()->write(json_encode(['world' => 'hello']));
        return $response->withHeader('Content-Type', 'application/json');

        // your code to access items in the container... $this->container->get('');
        return $response;
    }

    public function view(Request $request, Response $response, array $args): Response
    {
        $response->getBody()->write(json_encode(['hello' => $args['name']]));
        return $response->withHeader('Content-Type', 'application/json');

        // your code to access items in the container... $this->container->get('');
        return $response;
    }

    public function sayWorld(Request $request, Response $response, array $args): Response
    {
        $response->getBody()->write(json_encode(['world_say' => $args['say']]));
        return $response->withHeader('Content-Type', 'application/json');

        // your code to access items in the container... $this->container->get('');
        return $response;
    }
}