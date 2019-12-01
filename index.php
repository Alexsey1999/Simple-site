<?php

// Включение отображения всех возможных ошибок
ini_set('display_errors', 1);
error_reporting(E_ALL);

// Определение константы с путем до нашего сайта, подключение файлов Router и DB
define('ROOT', __DIR__);
require_once ROOT . '/components/Router.php';
require_once ROOT . '/models/DB.php';

// Создание экземпляра класса Router, передача управления его методу run
$router = new Router;
$router->run();
