<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class CacheMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        $response = $next($request);
        if(in_array($response->getStatusCode(), [200, 203, 206, 304]) && $request->is('/*')){
            $response->header('Cache-Control', 'public, max-age=31536000');
        }
        return $response;
    }
}
