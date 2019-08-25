<?php

namespace App\Http\Middleware;

use Closure;

class AuthKey
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
        //$token = header('APP_KEY');
        $token = request()->header('App-Key');
        if($token != "ABCDEFG")
        {
            return response()->json(["message"=>"app key not found"]);
        }
        return $next($request);
    }
}
