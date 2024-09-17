<?php

namespace App\Actions;

class DomainChecker
{
    private const array BLOCKED_DOMAINS = ['@blocked-domain.com'];

    public static function isBlockedDomain(string $domain): bool
    {
        return in_array($domain, self::BLOCKED_DOMAINS);
    }
}