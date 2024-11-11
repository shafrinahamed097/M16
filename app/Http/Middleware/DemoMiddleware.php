<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;
use Symfony\Component\HttpFoundation\Response;

class DemoMiddleware
{
    /**
     * Handle an incoming request.
     *
     * @param  \Closure(\Illuminate\Http\Request): (\Symfony\Component\HttpFoundation\Response)  $next
     */
    public function handle(Request $request, Closure $next): Response
    {
        
    //  $request->headers->add(['email' => '8PdP6@example.com']);   
    //  $request->headers->replace(['email' => '8PdP6@example.com']);   
     $request->headers->remove('email');   
     return $next($request);
    }
}
    

