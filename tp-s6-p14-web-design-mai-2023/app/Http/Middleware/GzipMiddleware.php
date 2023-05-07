<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Response;

class GzipMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle($request, Closure $next)
    {
        $response = $next($request);

        if ($response instanceof Response) {
            $content = gzencode($response->getContent(), 9);
            $response->setContent($content);
            $response->header('Content-Encoding', 'gzip');
            $response->header('Vary', 'Accept-Encoding');
            $response->header('Content-Type', 'text/html; charset=UTF-8');
        }

        return $response;
    }
}
