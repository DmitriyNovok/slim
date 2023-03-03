<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface;
use Psr\Http\Message\ServerRequestInterface as Request;
use Twig\Environment as Render;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HelloController
{
//    /**
//     * @var Render
//     */
//    private $render;
//
//    public function __construct(Render $render)
//    {
//        $this->render = $render;
//    }
//
//    /**
//     * @param ServerRequestInterface $request
//     * @param ResponseInterface $response
//     * @return ResponseInterface
//     * @throws LoaderError
//     * @throws RuntimeError
//     * @throws SyntaxError
//     */
//    public function show(ServerRequestInterface $request, ResponseInterface $response)
//    {
//        $response->getBody()->write($this->render->render('hello.twig', ['name' => $request->getAttribute('name')]));
//        return $response;
//    }

    public function __invoke(Request $request, Response $response): Response
    {
        /**
         * Create JSON response
         */
//        $response->getBody()->write(json_encode(['hello' => 'world']));
//        return $response->withHeader('Content-Type', 'application/json');

        $response->getBody()->write('World Hello!');

        return $response;
    }
}