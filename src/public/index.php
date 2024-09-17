<?php

require_once "../vendor/autoload.php";
$boot = require_once "../bootstrap/bootstrap.php";

header('Content-Type: application/json');

$serverInfo = $_SERVER;

$requestUri = explode('?', $serverInfo['REQUEST_URI'])[0];

bootApp($serverInfo['REQUEST_METHOD'], $requestUri, $_REQUEST);