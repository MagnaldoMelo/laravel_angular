<?php

namespace App\Http\Middleware;

use Closure;

class CORS
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle($request, Closure $next)
    {
        $request->header('Access-Control-Allow-Origin', '*');
        $request->header('Access-Control-Allow-Methods', 'GET, POST, PUT, DELETE, OPTIONS');
        $request->header('Access-Control-Allow-Headers', 'Content-type, X-Auth-Token, Authorization, Origin');

        return $next($request);
    }
}
