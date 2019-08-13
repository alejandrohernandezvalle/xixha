<?php
namespace xixha\Http\Middleware;
use Closure;
use Illuminate\Support\Facades\Auth;
class UserMiddleware{
    public function handle($request, Closure $next){
        if(auth()->check() && auth()->user()->is_user == 0){
            if(auth()->user()->is_admin == 0){
                if(auth()->user()->is_root == 0){
                    if(auth()->user()->is_super == 0){
                        return $next($request);
                    } return redirect('login');
                }
            }
        }
    }
}