<?php

namespace App\Http\Middleware;

use Illuminate\Auth\Middleware\Authenticate as Middleware;

class Authenticate extends Middleware
{
    /**
     * Get the path the user should be redirected to when they are not authenticated.
     *
     * @param  \Illuminate\Http\Request  $request
     * @return string
     */
    protected function redirectTo($request)
    {
        if (!$request->expectsJson()) {
            return route('influencer.login');
        }
    }
    
    public function handle($request, Closure $next)
    {
        //check here if the user is authenticated
        if (!$this->auth->user()) {
            // here you should redirect to login 
            return route('influencer.login');
        }
    
        return $next($request);
    }
}
