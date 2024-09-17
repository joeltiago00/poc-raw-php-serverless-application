<?php

function resolveRoute(string $method, string $route, array $params = []): void
{
    $routes = require_once "../routes/web.php";

    $selectedRoute = $routes[strtolower($method)][$route];

    if (!isset($selectedRoute)) {
        echo json_encode(['message' => 'Route not found'], JSON_PRETTY_PRINT);

        return;
    }

    if (is_callable($selectedRoute)) {
        echo $selectedRoute($params);

        return;
    }

    [$class, $method] = $selectedRoute;

    echo json_encode((new $class)->$method($params));
}