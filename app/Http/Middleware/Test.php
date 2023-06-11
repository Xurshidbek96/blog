<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Test
{
    /**
     * Handle an incoming request.
     *
     * @param  \Illuminate\Http\Request  $request
     * @param  \Closure(\Illuminate\Http\Request): (\Illuminate\Http\Response|\Illuminate\Http\RedirectResponse)  $next
     * @return \Illuminate\Http\Response|\Illuminate\Http\RedirectResponse
     */
    public function handle(Request $request, Closure $next)
    {
        \Log::info("This middleware working ". date('H:i:s d-m-Y'));
        return $next($request);
    }
}
