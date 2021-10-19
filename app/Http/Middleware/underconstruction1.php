<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class underconstruction1
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure  $next
     * @return mixed
     */
    public function handle(Request $request, Closure $next)
    {
        echo '<h1>this one is second construction wee combind 2middle ware ebcs its group middleware</h1>';
        return $next($request);
    }
}
