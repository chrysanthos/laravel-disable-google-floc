<?php

namespace Chrysanthos\DisableFloc;

use Closure;

class DisableFlocMiddleware
{
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if (!$response->headers->has('Permissions-Policy')) {
            $response->headers->set('Permissions-Policy', 'interest-cohort=()');
        }

        return $response;
    }
}