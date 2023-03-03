<?php

namespace App\Controllers;

use Psr\Http\Message\ResponseInterface as Response;
use Psr\Http\Message\ServerRequestInterface as Request;
use Twig\Environment as Render;
use Twig\Error\LoaderError;
use Twig\Error\RuntimeError;
use Twig\Error\SyntaxError;

class HelloController
{
    public function __construct(
        private readonly Render $render
    ){}

    /**
     * @param Request $request
     * @param Response $response
     * @return Response
     * @throws LoaderError
     * @throws RuntimeError
     * @throws SyntaxError
     */
    public function show(Request $request, Response $response): Response
    {
        $response->getBody()->write(
            $this->render->render('hello.twig', [
                'name' => $request->getAttribute('name')
            ])
        );

        return $response;
    }

    public function __invoke(Request $request, Response $response): Response
    {
        $response->getBody()->write('World Hello!');

        return $response;
    }
}