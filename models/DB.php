<?php

class DB
{
    // использование параметров из db-params,
    // возвращение PDO
    static public function getConnect()
    {
        $paramsPath = ROOT . '/config/db-params.php';
        $params = include($paramsPath);
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']};
        charset={$params['charset']}";
        return new PDO($dsn, $params['user'], $params['password']);
    }
}
