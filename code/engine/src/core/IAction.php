<?php

namespace TestEngine\core;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;

interface IAction
{
    /**
     * Action constructor with DI
     * @param ContainerInterface $container
     */
    public function __construct(ContainerInterface $container);

    /**
     * Action invoke method which realise middleware
     * @param ServerRequestInterface $request
     * @param ResponseInterface $response
     * @param $args
     * @return mixed
     */
    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $args);
}