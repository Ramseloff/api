<?php

namespace TestEngine\core;


use Psr\Container\ContainerInterface;

interface IInstruction
{
    public function __construct(ContainerInterface $container);

    public function __invoke($instructionData, $instructionResult);
}