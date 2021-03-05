<?php


namespace TestEngine\core;


interface IDataSource
{
    const MODE_ONE = 'one';
    const MODE_LIST = 'list';
    const MODE_EXEC = 'exec';
    const MODE_VAL = 'val';

    const SRC_INNER = 1;
    const SRC_1C = 2;

    public function connect($params = []);

    public function one($cmd, $params = []);

    public function all($cmd, $params = []);

    public function val($cmd, $params = []);

    public function lastId();

    public function exec($cmd, $params = [], $mode = self::MODE_EXEC);
}