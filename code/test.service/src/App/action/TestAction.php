<?php

namespace App\action;

use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TestEngine\core\IAction;

class TestAction implements IAction
{

    public function __construct(ContainerInterface $container)
    {
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        // TODO: Implement __invoke() method.
    }
}