<?php

namespace App\query;

use Psr\Container\ContainerInterface;
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
            select j.id, j.title, j.descr, j.region_id 
            from job j where j.id=:job_id;
        ", ['job_id' => $jobId], IDataSource::MODE_LIST);

        return ['job' => $result] + $queryResult;
    }
}