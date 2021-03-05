<?php

require '../functions/functions.php';

echo ('hello');

$method = $_SERVER['REQUEST_METHOD'];

if (isset($_GET['q'])) {
    $q = $_GET['q'];
    //echo ($q).PHP_EOL;
    $params = explode('/', $q);
    if (isset($params[0])) {
        $type = $params[0];
        if (isset($params[1])) {
            $recipe = $params[1];
            if (isset($params[2])) {
                $id = $params[2];
            }
        }
    }
}

if (isset ($q)) {
    if ($method === 'GET') {
        if (isset ($type) && $type === 'hello') {
           getHello();
        }
    }
}

