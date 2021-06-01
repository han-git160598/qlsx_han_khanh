<?php

namespace App\Http\Middleware;

use Closure;
use Illuminate\Support\Facades\Session;
use Illuminate\Support\Facades\Auth;
use Illuminate\Support\Facades\Route;
session_start();
class AcessPermission2
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
        $cus = Session::get('data_admin');
        if(isset($cus) && !empty($cus))
        {
            return $next($request);
        }
        else
        {
            return redirect('/admin');
        }
    }
}
