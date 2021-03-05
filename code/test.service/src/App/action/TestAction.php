<?php

namespace App\action;

use App\query\TestQuery;
use Psr\Container\ContainerInterface;
use Psr\Http\Message\ResponseInterface;
use Psr\Http\Message\ServerRequestInterface;
use TestEngine\core\IAction;

class TestAction implements IAction
{
    private $container;

    public function __construct(ContainerInterface $container)
    {
        $this->container = $container;
    }

    public function __invoke(ServerRequestInterface $request, ResponseInterface $response, $args)
    {
        $result = $this->container->get('queries')
            ->add(new TestQuery($this->container))
            ->run([]);

        return $response
            ->withHeader("Content-Type", "application/json")
            ->withJson($result);
    }
}