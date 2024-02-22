<?php

namespace Main;

class EntryPoint {

    public static function dispatch(string $method, string $uri): void
    {
        $routes = require __DIR__ . '/../routes.php';
        $methodRoutes = $routes[$uri] ?? [];

        $parameters = [];
        if ($method === 'POST') {
            $parameters = $_POST;
        }

        if ($controllerInfo = $methodRoutes[$method] ?? null) {
            $controller = new $controllerInfo['controller']();
            if ($action = $controllerInfo['action']) {
                $controller->$action($parameters);
                return;
            }
            $controller($parameters);
            return;
        }

        echo sprintf('No method found for %s [%s]', $method, $uri);
    }
}