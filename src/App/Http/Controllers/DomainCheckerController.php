<?php

namespace App\Http\Controllers;

use App\Actions\DomainChecker;

class DomainCheckerController
{
    public function handle(array $request): array
    {
        if (!isset($request['domains'])) {
            return ['message' => 'No domains specified.'];
        }

        $response = [];

        foreach ($request['domains'] as $domain) {
            if (DomainChecker::isBlockedDomain($domain)) {
                $response[] = [
                    'domain' => $domain,
                    'is_blocked' => true
                ];

                continue;
            }

            $response[] = [
                'domain' => $domain,
                'is_blocked' => false
            ];
        }

        return $response;
    }
}