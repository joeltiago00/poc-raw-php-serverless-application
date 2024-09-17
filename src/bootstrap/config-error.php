<?php

function configError(): void
{
    match (ENVIRONMENT) {
        'development' => configErrorDev(),
        default => configDefaultError()
    };
}

function configErrorDev(): void
{
    ini_set('display_errors', 1);
    ini_set('display_startup_errors', 1);
    error_reporting(E_ALL);
}

function configDefaultError(): void
{
    ini_set('display_errors', 0);
    ini_set('log_errors', 1);
    ini_set('error_log', __DIR__ . '/logs/error.log');
    error_reporting(E_ALL & ~E_DEPRECATED & ~E_NOTICE);
}