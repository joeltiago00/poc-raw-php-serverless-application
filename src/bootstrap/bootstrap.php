<?php

require 'config-error.php';
require_once 'route-resolver.php';

function bootApp(string $method, string $route, array $params = []): void
{
    // TODO:: config to use .env plugin!
    define('ENVIRONMENT', 'development'); // or 'production'

    configError();

    resolveRoute($method, $route, $params);
}



