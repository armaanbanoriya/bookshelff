<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;

class frontlogin
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

        if(empty(Session::has('armaanbanoriya')))
        {
            return redirect('signin');
        }
        return $next($request);
    }
}
