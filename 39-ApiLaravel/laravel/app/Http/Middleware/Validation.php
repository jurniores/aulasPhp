<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Http\Request;

class Validation
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
        $token = explode(' ',$request->header('Authorization'))[1];

        if($token !== '123456'){
            return response()->json($token);
        }

        return $next($request);
    }
}
