<?php
namespace xixha\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class AdminMiddleware{
    public function handle($request, Closure $next){
        //if(auth()->check() && auth()->user()->is_admin == 1)
        if(auth()->check())
            return $next($request);
        return redirect('login');
        }
    }