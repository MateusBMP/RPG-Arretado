<?php

namespace App\Http\Middleware;

use Closure;

class AuthenticateWithToken
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
        if (\App\User::findByToken($request->header('remember_token'))->first() == NULL) {
            abort(401);
        }

        return $next($request);
    }
}
