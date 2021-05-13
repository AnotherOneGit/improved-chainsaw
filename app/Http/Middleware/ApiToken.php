<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class ApiToken
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
        $token = $request->header('API_TOKEN');
        if ($token != env('API_TOKEN')) {
            return response()->json(['message' => 'No Auth'], 401);
        }
        return $next($request);
    }
}
