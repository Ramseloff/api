<?php

namespace App\query;

use Psr\Container\ContainerInterface;
use TestEngine\core\IDataSource;
use TestEngine\core\IQuery;

class TestQuery implements IQuery
{
    private $container;
    private $db;

    public function __construct(ContainerInterface $container, $params = [])
    {
        $this->container = $container;
        $this->db = $this->container->get('db');
    }

    public function __invoke($queryData, $queryResult)
    {
        $result = $this->db->exec("
            select a.id, a.title, a.content 
            from articles a order by a.id;
        ", [], IDataSource::MODE_LIST);

        return ['jobs' => $result] + $queryResult;
    }
}