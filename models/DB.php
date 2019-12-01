<?php


class DB
{

    static public function getConnect()
    {
        $paramsPath = ROOT . '/config/db-params.php';
        $params = include($parmsPath);
        $dsn = "mysql:host={$params['host']};dbname={$params['dbname']};
        charset={$params['charset']}";
        return new PDO($dsn, $params['user'], $params['password']);
    }
}
