<?php

namespace App\Http\Middleware;

use Closure;
use Auth;

class basicAuth
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
        if(Auth::onceBasic())
        //if(Auth::user()->id ==NULL)
        {
            return response()->json(["message"=>"wrong email or password"]);
        }
        return $next($request);
    }
}
