<?php

class Router
{
    private $routes;

    // Присваеваем в свойство $routes массив с роутами
    public function __construct()
    {
        $routesPath = ROOT . '/config/routes.php';
        $this->routes = include($routesPath);
    }

    // Возвращает URI
    private function getURI()
    {
        return trim($_SERVER['REQUEST_URI'], '/');
    }

    // Перебираем массив с роутами, в зависимости от URI запроса
    // подключаем нужный контроллер, создаем экземпляр класса и вызываем метод.
    // В итоге получаем вывод всех новостей или одной новости
    public function run()
    {
        $uri = $this->getURI();
        foreach ($this->routes as $uriPattern => $path) {
            if (preg_match("~$uriPattern~", $uri)) {
                $fullPath = preg_replace("~$uriPattern~", $path, $uri);
                $pathes = explode('/', $fullPath);
                $controllerName = ucfirst(array_shift($pathes)) . 'Controller';
                $controllerFile = ROOT . '/controllers/' . $controllerName . '.php';
                if (file_exists($controllerFile)) {
                    include_once $controllerFile;
                }
                $action = 'action' . ucfirst(array_shift($pathes));
                $params = $pathes;
                $controllerObject = new $controllerName;
                $result = call_user_func_array(array($controllerObject, $action), $params);
                if ($result != null) {
                    break;
                }
            }
        }
    }
}
