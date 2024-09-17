<?php

use App\Http\Controllers\DomainCheckerController;

return [
    'get' => [
        '/' => fn() => json_encode(['status' => 'API ON FIRE!']),
        '/check-domain' => [DomainCheckerController::class, 'handle'],
    ]
];