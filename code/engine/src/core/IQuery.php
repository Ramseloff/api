<?php


namespace TestEngine\core;


use Psr\Container\ContainerInterface;

interface IQuery extends IInstruction
{
    public function __construct(ContainerInterface $container, $params = []);

    public function __invoke($queryData, $queryResult);
}